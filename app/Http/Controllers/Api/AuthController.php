<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function googleAuth(Request $request)
    {
        $validated = $this->validateGoogleRequest($request);

        $user = $this->findOrCreateGoogleUser($validated);

        $token = $this->createUserToken($user);

        // Login to the correct session guard so web requests are authenticated without Bearer tokens
        $guard = $user instanceof Teacher ? 'teacher' : 'student';
        Auth::guard($guard)->login($user);

        return $this->googleAuthSuccessResponse($user, $token);
    }

    public function googleCallback(Request $request)
    {
        return response()->json([
            'message' => 'This endpoint is for API-based Google authentication. Use the /auth/google endpoint with a POST request.'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('auth-token')->plainTextToken;

        return response()->json([
            'user' => new UserResource($user),
            'token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $data['password'] = Hash::make($data['password']);
        $user = Student::create($data);
        $token = $user->createToken('auth-token')->plainTextToken;

        return response()->json([
            'user' => new UserResource($user),
            'token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        Auth::logout();

        return response()->json([
            'message' => 'Logged out successfully'
        ]);
    }

    public function refresh(Request $request)
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();

        $token = $user->createToken('auth-token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    public function me(Request $request)
    {
        return response()->json(new UserResource($request->user()));
    }

    //_____ Validation Methods _____//

    private function validateGoogleRequest(Request $request)
    {
        return $request->validate([
            'token' => 'required|string',
            'profile' => 'required|array',
            'profile.google_id' => 'required|string',
            'profile.name' => 'required|string',
            'profile.email' => 'required|email',
            'profile.login_type' => 'required|in:teacher,student',
            'profile.profile_photo' => 'nullable|string',
        ]);
    }

    //_____ User Management Methods _____//

    private function findOrCreateGoogleUser(array $validated)
    {
        $profile = $validated['profile'];
        $loginType = $profile['login_type'];

        $user = $this->findGoogleUser($profile['google_id'], $loginType);

        if (!$user) {
            $user = $this->createGoogleUser($profile, $loginType);
        }

        return $user;
    }

    private function findGoogleUser(string $googleId, string $loginType)
    {
        if ($loginType === 'teacher') {
            return Teacher::where('google_id', $googleId)->first();
        }

        return Student::where('google_id', $googleId)->first();
    }

    private function createGoogleUser(array $profile, string $loginType)
    {
        $userData = [
            'name' => $profile['name'],
            'email' => $profile['email'],
            'google_id' => $profile['google_id'],
            'user_type' => $loginType,
            'email_verified_at' => now(),
        ];

        //_____ Handle profile photo if available _____//
        if (isset($profile['profile_photo'])) {
            $userData['profile_photo'] = $profile['profile_photo'];
        } elseif (isset($profile['picture'])) {
            $userData['profile_photo'] = $profile['picture'];
        }

        if ($loginType === 'teacher') {
            return Teacher::create($userData);
        }

        return Student::create($userData);
    }

    //_____ Token Management Methods _____//

    private function createUserToken($user)
    {
        //_____ Create token for API authentication _____//
        return $user->createToken('auth-token')->plainTextToken;
    }

    //_____ Response Methods _____//

    private function googleAuthSuccessResponse($user, string $token)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'User authenticated successfully',
            'data' => [
                'user' => new UserResource($user),
                'token' => $token,
            ]
        ]);
    }
}

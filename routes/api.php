<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//_____ API Routes _____//

Route::prefix('v1')->group(function () {

    //_____ Authentication Routes _____//
    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);
        Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
        Route::post('refresh', [AuthController::class, 'refresh'])->middleware('auth:sanctum');
        Route::get('me', [AuthController::class, 'me'])->middleware('auth:sanctum');

        //_____ Google OAuth Routes _____//
        Route::post('google', [AuthController::class, 'googleAuth']);
        Route::get('google/callback', [AuthController::class, 'googleCallback']);
    });

    
    //_____ Public Profile Route _____//
    Route::get('profile', function (Request $request) {
        if (auth('teacher')->check()) {
            return response()->json(new UserResource(auth('teacher')->user()));
        } elseif (auth('student')->check()) {
            return response()->json(new UserResource(auth('student')->user()));
        } else {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }
    });

    //_____ Health Check Endpoint _____//
    Route::get('health', function () {
        return response()->json([
            'status' => 'ok',
            'timestamp' => now(),
            'version' => '1.0.0'
        ]);
    });
});

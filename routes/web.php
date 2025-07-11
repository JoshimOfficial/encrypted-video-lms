<?php
// D:\Laravel\encypted-video-lms\app\Http\Controllers\LoginController.php
use App\Models\User;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Laravel\Socialite\Facades\Socialite;

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

Route::get('dashboard', function () {
return Auth::user();
});

Route::get('login/{userType}', [LoginController::class, 'redirectToGoogle'])->name('loginRequestWithType');




Route::get('auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');



Route::get('auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();
    // Set default user type for Google OAuth users
    $userType = session('userType'); // You can change this default or make it configurable

    $user = User::updateOrCreate(
        ['email' => $googleUser->getEmail()],
        [
            'name' => $googleUser->getName(),
            'google_id' => $googleUser->getId(),
            'user_type' => $userType,
        ]
    );
    Session::forget('userType');

    Auth::login($user);

    // return $user->user_type;

    if($user->user_type == 'teacher') {
        return redirect()->route('teacher-dashboard');
    }else{
        return redirect()->route('student-dashboard');
    }
});


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/static_web.php';
require __DIR__.'/system.php';
require __DIR__.'/student.php';
require __DIR__.'/teacher.php';

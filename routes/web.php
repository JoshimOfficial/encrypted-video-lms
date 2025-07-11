<?php

use App\Models\User;
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

Route::get('auth/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();


    $user = User::updateOrCreate(
        ['email' => $googleUser->getEmail()],
        [
            'name' => $googleUser->getName(),
            'google_id' => $googleUser->getId(),
            'user_type' => $userType,
        ]
    );

    Auth::login($user);

    return redirect('/dashboard');
});


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/static_web.php';
require __DIR__.'/system.php';
require __DIR__.'/student.php';
require __DIR__.'/teacher.php';

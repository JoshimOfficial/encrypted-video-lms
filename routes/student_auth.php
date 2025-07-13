<?php

use App\Http\Controllers\Auth\StudentAuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// Student Authentication Routes
Route::prefix('/student')->group(function () {
    // Guest routes (login)
    Route::middleware('guest')->group(function () {
        Route::get('login', [StudentAuthenticatedSessionController::class, 'create'])
            ->name('student.login');

        Route::post('login', [StudentAuthenticatedSessionController::class, 'store'])
            ->name('student.login.store');
    });

    // Protected routes
    Route::middleware('auth.student')->group(function () {
        Route::get('dashboard', function () {
            return Inertia::render('Student/Dashboard');
        })->name('student.dashboard');

        Route::post('logout', [StudentAuthenticatedSessionController::class, 'destroy'])
            ->name('student.logout');
    });
});

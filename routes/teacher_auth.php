<?php

use App\Http\Controllers\Auth\TeacherAuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// Teacher Authentication Routes
Route::prefix('/teacher')->group(function () {
    // Guest routes (login)
    Route::middleware('guest')->group(function () {
        Route::get('login', [TeacherAuthenticatedSessionController::class, 'create'])
            ->name('teacher.login');

        Route::post('login', [TeacherAuthenticatedSessionController::class, 'store'])
            ->name('teacher.login.store');
    });

    // Protected routes
    Route::middleware('auth.teacher')->group(function () {
        Route::get('dashboard', function () {
            return Inertia::render('Teacher/Dashboard');
        })->name('teacher.dashboard');

        Route::post('logout', [TeacherAuthenticatedSessionController::class, 'destroy'])
            ->name('teacher.logout');
    });
});

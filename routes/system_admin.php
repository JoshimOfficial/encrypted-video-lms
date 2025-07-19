<?php

use App\Http\Controllers\Auth\SystemAdminAuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// System Admin Authentication Routes
Route::prefix('/system')->group(function () {
    // Guest routes (login)
    Route::middleware('guest')->group(function () {
        Route::get('login', [SystemAdminAuthenticatedSessionController::class, 'create'])
            ->name('system.login');

        Route::post('login', [SystemAdminAuthenticatedSessionController::class, 'store'])
            ->name('system.login.store');
    });

    // Protected routes
    Route::middleware('auth.system_admin')->group(function () {
        Route::get('dashboard', function () {
            return Inertia::render('System/Dashboard');
        })->name('system.dashboard');

        Route::post('logout', [SystemAdminAuthenticatedSessionController::class, 'destroy'])
            ->name('system.logout');
    });
});

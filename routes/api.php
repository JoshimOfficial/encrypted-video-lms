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

    // profile endpoint moved to web middleware to use session auth

    //_____ Health Check Endpoint _____//
    Route::get('health', function () {
        return response()->json([
            'status' => 'ok',
            'timestamp' => now(),
            'version' => '1.0.0'
        ]);
    });
});

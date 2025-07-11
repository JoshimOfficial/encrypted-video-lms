<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('/teacher')->middleware('auth')->group(function(){
    // Route::get('dashboard',function() {
    //     return "This is teacher dashboard.";
    // });
    Route::get('dashboard', function () {
        return Inertia::render('teacher/dashboard');
    })->name('teacher-dashboard');
});

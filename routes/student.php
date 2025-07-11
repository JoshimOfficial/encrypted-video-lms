<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('/student')->middleware('auth')->group(function(){
    // Route::get('dashboard',function() {
    //     return "This is student dashboard.";
    // });
    Route::get('dashboard', function () {
        return Inertia::render('student/dashboard');
    })->name('student-dashboard');
});

<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::prefix('/system')->midd, function(){
//     Route::get('system',function() {
//         return "This is system.";
//     });
// });


Route::prefix('/system')->middleware('auth')->group(function(){
    // Route::get('dashboard',function() {
    //     return "This is system dashboard.";
    // });
    Route::get('dashboard', function () {
        return Inertia::render('system/dashboard');
    })->name('system-dashboard');
});

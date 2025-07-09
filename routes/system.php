<?php

use Illuminate\Support\Facades\Route;

// Route::prefix('/system')->midd, function(){
//     Route::get('system',function() {
//         return "This is system.";
//     });
// });


Route::prefix('/system')->middleware('auth')->group(function(){
    Route::get('dashboard',function() {
        return "This is system dashboard.";
    });
});

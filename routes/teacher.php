<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/teacher')->middleware('auth')->group(function(){
    Route::get('dashboard',function() {
        return "This is teacher dashboard.";
    });
});

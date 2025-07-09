<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/student')->middleware('auth')->group(function(){
    Route::get('dashboard',function() {
        return "This is student dashboard.";
    });
});

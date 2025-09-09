<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::prefix('/teacher')->middleware('auth.teacher')->group(function(){
Route::prefix('/teacher')->group(function(){
    // Route::get('dashboard',function() {
    //     return "This is teacher dashboard.";
    // });
    Route::get('dashboard', function () {
        return Inertia::render('teacher/dashboard');
    })->name('teacher-dashboard');

    Route::get('course', function () {
        return Inertia::render('teacher/course/index');
    })->name('teacher-course');


    Route::get('video', function () {
        return Inertia::render('teacher/video/index');
    })->name('teacher-video');

    Route::get('video/create', function () {
        return Inertia::render('teacher/video/create');
    })->name('teacher-video-create');

    Route::get('video/{id}/edit', function ($id) {
        return Inertia::render('teacher/video/edit', ['id' => $id]);
    })->name('teacher-video-edit');

    Route::get('video/{id}', function ($id) {
        return Inertia::render('teacher/video/show', ['id' => $id]);
    })->name('teacher-video-show');
    Route::get('role', function () {
        return Inertia::render('teacher/role/index');
    })->name('teacher-role-index');

});

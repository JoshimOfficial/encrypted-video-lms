<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function() {
    return view('welcome');
})->name('home');

Route::get('/about',function() {
    return view('about');
})->name('about');

Route::get('/services',function() {
    return view('service');
})->name('services');

Route::get('/price',function() {
    return view('price');
})->name('price');

Route::get('/contact',function() {
    return view('contact');
})->name('contact');

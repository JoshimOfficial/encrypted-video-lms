<?php
use App\Models\User;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Admin;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Laravel\Socialite\Facades\Socialite;

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Auth::user();
});

// Session-authenticated profile endpoint matching API path (no Bearer needed on web)
Route::get('/profile', function () {
    
    if (Auth::guard('teacher')->check()) {
        return response()->json(new \App\Http\Resources\UserResource(Auth::guard('teacher')->user()));
    } elseif (Auth::guard('student')->check()) {
        return response()->json(new \App\Http\Resources\UserResource(Auth::guard('student')->user()));
    } else {
        return response()->json(['message' => 'Unauthenticated.'], 401);
    }
})->name('web.profile');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/static_web.php';
require __DIR__.'/system_admin.php';
require __DIR__.'/teacher_auth.php';
require __DIR__.'/student_auth.php';
require __DIR__.'/system.php';
require __DIR__.'/student.php';
require __DIR__.'/teacher.php';

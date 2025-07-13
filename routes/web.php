<?php
// D:\Laravel\encypted-video-lms\app\Http\Controllers\LoginController.php
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

Route::get('login/{userType}', [LoginController::class, 'redirectToGoogle'])->name('loginRequestWithType');




Route::get('auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');



Route::get('auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();
    $userType = session('userType');
    // return $userType;

    if ($userType == 'teacher') {
        // return "Teacher detected!";
        // Handle teacher authentication
        $teacher = Teacher::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                'user_type' => 'teacher',
            ]
        );

        Session::forget('userType');
        Auth::guard('teacher')->login($teacher);

        return redirect()->route('teacher-dashboard');
    } else {
        // return "Student detected!";

        // Handle student authentication (default)
        $student = Student::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                'user_type' => 'student',
            ]
        );

        Session::forget('userType');
        Auth::guard('student')->login($student);

        return redirect()->route('student-dashboard');
    }
});


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/static_web.php';
require __DIR__.'/system_admin.php';
require __DIR__.'/teacher_auth.php';
require __DIR__.'/student_auth.php';
require __DIR__.'/system.php';
require __DIR__.'/student.php';
require __DIR__.'/teacher.php';

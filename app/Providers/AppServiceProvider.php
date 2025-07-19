<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Socialite::driver('google')->stateless()->setHttpClient(new \GuzzleHttp\Client([
        //     'verify' => storage_path('certs/cacert.pem'), // Path to your cert
        // ]));

        view()->composer('*', function ($view) {
            $isStudent = Auth::guard('student')->check();
            $isTeacher = Auth::guard('teacher')->check();
            $isAdmin = Auth::guard('system_admin')->check();
            $isAuthenticated = $isStudent || $isTeacher || $isAdmin;

            $currentUser = null;
            if ($isStudent) {
                $currentUser = Auth::guard('student')->user();
            } elseif ($isTeacher) {
                $currentUser = Auth::guard('teacher')->user();
            } elseif ($isAdmin) {
                $currentUser = Auth::guard('system_admin')->user();
            }

            $view->with([
                'isAuthenticated' => $isAuthenticated,
                'isStudent' => $isStudent,
                'isTeacher' => $isTeacher,
                'isAdmin' => $isAdmin,
                'currentUser' => $currentUser,
            ]);
        });
    }
}

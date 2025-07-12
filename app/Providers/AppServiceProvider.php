<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Facades\Socialite;


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
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('student')->check()) {
            return redirect('/login/student');
        }

        $user = Auth::guard('student')->user();
        if (!$user || $user->user_type !== 'student') {
            Auth::guard('student')->logout();
            return redirect('/login/student');
        }

        return $next($request);
    }
}

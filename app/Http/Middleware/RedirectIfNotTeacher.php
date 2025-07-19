<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotTeacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('teacher')->check()) {
            return redirect('/login/teacher');
        }

        $user = Auth::guard('teacher')->user();
        if (!$user || $user->user_type !== 'teacher') {
            Auth::guard('teacher')->logout();
            return redirect('/login/teacher');
        }

        return $next($request);
    }
}

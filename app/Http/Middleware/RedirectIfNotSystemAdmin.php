<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotSystemAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('system_admin')->check()) {
            return redirect('/system/login');
        }

        $user = Auth::guard('system_admin')->user();
        if (!$user || $user->user_type !== 'admin') {
            Auth::guard('system_admin')->logout();
            return redirect('/system/login');
        }

        return $next($request);
    }
}

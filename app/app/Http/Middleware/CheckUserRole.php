<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {

        if (Auth::check()) {

            $user = Auth::user();
            if ($user->is_admin == 1 && $role == 'admin') {
                return $next($request);
            } elseif ($user->is_admin == 0 && $role == 'user') {
                return $next($request);
            }
        }

        return redirect()->route('home');
        // return $next($request);
    }
}

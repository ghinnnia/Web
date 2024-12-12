<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);  // Jika user adalah admin, lanjutkan
        }

        return redirect('/')->with('error', 'Anda tidak memiliki akses sebagai admin.');
    }
}

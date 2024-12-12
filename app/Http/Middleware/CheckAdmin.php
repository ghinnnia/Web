<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   public function handle(Request $request, Closure $next)
{
    if (session()->has('admin_id')) {
        return $next($request); // Lanjutkan request
    }

    // Jika bukan admin, redirect ke halaman lain
    return redirect('/')->with('error', 'Anda tidak memiliki akses sebagai admin.');
}
}

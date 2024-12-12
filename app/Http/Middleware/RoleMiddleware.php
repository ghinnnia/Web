<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Memeriksa apakah user sudah login dan memiliki peran yang diinginkan
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);  // Lanjutkan jika peran cocok
        }

        return redirect('/login')->with('error', 'Anda tidak memiliki akses ke halaman ini.');  // Redirect jika tidak sesuai
    }
}

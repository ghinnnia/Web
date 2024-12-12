<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login berhasil, cek role
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard'); // Admin ke halaman dashboard admin
            } else {
                return redirect()->route('user.dashboard'); // User ke halaman dashboard user
            }
        } else {
            return back()->with('error', 'Login gagal. Periksa email dan password Anda.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

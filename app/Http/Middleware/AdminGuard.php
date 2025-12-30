<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminGuard
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah di sesi browser sudah ada stempel 'sudah_login'
        if (!session('sudah_login')) {
            // Kalau belum, tendang ke halaman login
            return redirect()->route('login')->with('error', 'Harap masukkan password admin dulu!');
        }

        return $next($request);
    }
}
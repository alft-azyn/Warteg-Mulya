<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // 1. Tampilkan Form Login
    public function showLoginForm()
    {
        return view('login');
    }

    // 2. Proses Cek Password
    public function login(Request $request)
    {
        
        $password_benar = "admin123"; 

        if ($request->password == $password_benar) {
            // Jika benar, simpan "tanda" di session
            session(['sudah_login' => true]);
            return redirect()->route('dapur')->with('success', 'Selamat datang Admin!');
        }

        return redirect()->back()->with('error', 'Password salah!');
    }

    // 3. Logout
    public function logout()
    {
        session()->forget('sudah_login');
        return redirect()->route('home')->with('success', 'Anda sudah keluar.');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Pastikan model User digunakan

class LoginController extends Controller
{
    // Tampilkan halaman login
    public function showLoginForm()
    {
        return view('login'); // Pastikan file blade login tersedia
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email', // Email wajib dan harus valid
            'password' => 'required',    // Password wajib
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password harus diisi.',
        ]);

        // Ambil kredensial dari request
        $credentials = $request->only('email', 'password');

        // Cek login menggunakan Auth::attempt
        if (Auth::attempt($credentials)) {
            // Regenerasi sesi untuk keamanan
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Login berhasil.');
        }

        // Login gagal
        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }

    // Logout pengguna
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logout berhasil.');
    }

    // Tampilkan dashboard
    public function home()
    {
        return view('home'); // Pastikan file blade home tersedia
    }
}

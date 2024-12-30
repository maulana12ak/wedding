<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
use Laravel\Socialite\Facades\Socialite;
=======
use App\Models\User; // Pastikan model User digunakan
>>>>>>> 8d718bd13546ee68671d43252b06df88e7de5be2

class LoginController extends Controller
{
    // Method untuk menampilkan halaman login
    public function showLoginForm()
    {
<<<<<<< HEAD
        return view('auth.login');
=======
        return view('login'); // Pastikan file blade login tersedia
>>>>>>> 8d718bd13546ee68671d43252b06df88e7de5be2
    }

    // Method login standar
    public function login(Request $request)
    {
<<<<<<< HEAD
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak sesuai dengan data kami.'
        ])->onlyInput('email');
    }

    // Method redirect ke Google OAuth
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Method handle callback dari Google
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            
            // Cari user berdasarkan email Google
            $existingUser = User::where('email', $googleUser->getEmail())->first();

            if ($existingUser) {
                // Update Google ID jika belum ada
                if (!$existingUser->google_id) {
                    $existingUser->update([
                        'google_id' => $googleUser->getId(),
                        'avatar' => $googleUser->getAvatar()
                    ]);
                }

                // Login existing user
                Auth::login($existingUser);
            } else {
                // Buat user baru
                $newUser = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                    'password' => Hash::make(str()->random(16)) // Random password
                ]);

                Auth::login($newUser);
            }

            return redirect()->intended('dashboard');

        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Gagal login dengan Google: ' . $e->getMessage());
        }
    }

    // Method logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
=======
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
>>>>>>> 8d718bd13546ee68671d43252b06df88e7de5be2
    }
}
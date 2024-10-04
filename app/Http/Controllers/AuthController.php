<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    // Registrasi Pengguna
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'no_hp' => 'required|string|max:15',
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('home')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    // Login Pengguna
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('/'); // Ganti dengan route yang sesuai setelah login
        } else {
            return back()->withErrors(['email' => 'Email atau kata sandi salah.']);
        }
    }

    // Logout Pengguna
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Anda telah berhasil logout.');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Validasi data registrasi
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Buat user baru
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Autentikasi user setelah registrasi
        Auth::login($user);

        // Redirect ke halaman dashboard atau halaman tujuan lainnya setelah registrasi
        return redirect('/dashboard');
    }

    public function login(Request $request)
    {
        // Validasi data login
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Lakukan proses login
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, redirect ke halaman dashboard atau halaman tujuan lainnya
            return redirect()->intended('/dashboard');
        } else {
            // Jika login gagal, kembalikan ke halaman login dengan pesan error
            return redirect()->back()->withErrors(['email' => 'Email atau password salah.']);
        }
    }

    // Metode lain seperti logout dan lain-lain bisa ditambahkan di sini
}


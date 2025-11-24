<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email (tanpa hashing)
        $staff = \App\Models\Staff::where('email', $request->email)->first();

        // Jika tidak ada staff dengan email tsb
        if (!$staff) {
            return back()->withErrors(['email' => 'Email tidak ditemukan']);
        }

        // Cek password plain text (tanpa bcrypt)
        if ($staff->password !== $request->password) {
            return back()->withErrors(['password' => 'Password salah']);
        }

        // Login manual
        Auth::login($staff);

        return redirect('/category');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

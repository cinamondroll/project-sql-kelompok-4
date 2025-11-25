<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        // Panggil Stored Procedure login_staff
        $result = DB::select("CALL login_staff(?, ?)", [
            $request->email,
            $request->password
        ]);

        // Jika kosong → email atau password salah
        if (empty($result)) {
            return back()->withErrors([
                'email' => 'Email atau password salah'
            ]);
        }

        // Ambil staff
        $staffData = $result[0];

        // Buat user model manual (GA PAKE DB)
        $user = new \App\Models\Staff();
        $user->staff_id   = $staffData->staff_id;
        $user->first_name = $staffData->first_name;
        $user->last_name  = $staffData->last_name;
        $user->email      = $staffData->email;
        $user->username   = $staffData->username;
        $user->store_id   = $staffData->store_id;
        $user->active     = $staffData->active;

        // Login ke Auth Laravel
        Auth::login($user);

        return redirect('/category');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

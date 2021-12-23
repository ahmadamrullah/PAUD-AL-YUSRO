<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function post_login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('login')->with('pesan', 'Email atau Password Salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('pesan', 'Anda Berhasil Logout');
    }
}

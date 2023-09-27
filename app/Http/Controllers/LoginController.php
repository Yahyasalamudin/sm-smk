<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } else {
            return view('login');
        }
    }

    public function action_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:5'
        ]);

        $email = $request->email;
        $password = $request->password;
        $remember = $request->remember;

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect('dashboard');
        } elseif (!User::where('email', $email)->first()) {
            return redirect()->back()->withErrors(['email' => 'Email anda tidak terdaftar!'])->withInput($request->input());
        } else {
            return redirect()->back()->withErrors(['password' => 'Password anda salah!'])->withInput($request->input());
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}

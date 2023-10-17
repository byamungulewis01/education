<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthContoller extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }
    public function login_auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (auth()->guard('student')->attempt($credentials)) {
            return redirect()->route('student.index');
        }
        return redirect()->route('login')->with('error', 'Invalid Credentials');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function logout()
    {
        auth()->guard('student')->logout();
        return to_route('login');
    }
}

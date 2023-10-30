<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    //login
    public function login()
    {
        return view('auth.admin-login');
    }
    public function login_auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            if (auth()->user()->role == 'instructor') {
                return redirect()->route('instructor.index');
            } else {
                return redirect()->route('admin.index');
            }
        }
        return redirect()->route('admin.login')->with('error', 'Invalid Credentials');
    }
    public function logout()
    {
        auth()->logout();
        return to_route('admin.login');
    }
}

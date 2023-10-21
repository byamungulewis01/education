<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Mail\CreateAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    public function register_auth(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|min:3',
            'lname' => 'required|string|min:3',
            'email' => 'required|email',
            'phone' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'password' => 'required',
        ]);
        $request->merge(['password' => Hash::make($request->password)]);

        Student::create($request->all());
        Mail::to($request->email)->send(new CreateAccount($request->fname, $request->lname));
        return to_route('register')->with('success', 'Account Created Succesfully');
    }

    public function logout()
    {
        auth()->guard('student')->logout();
        return to_route('login');
    }
}

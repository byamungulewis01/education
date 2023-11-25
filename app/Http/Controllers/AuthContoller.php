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
            return to_route('index')->with('message', 'Login Successful');
        }
        return redirect()->route('index')->with('error', 'Invalid Credentials');
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
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|numeric|unique:students,phone',
            'dob' => 'required',
            'gender' => 'required',
            'password' => 'required|min:6',
            'academic_doc' => 'required|mimes:pdf,png,jpg',
            'identity_doc' => 'required|mimes:pdf,png,jpg',
        ]);
        $request->merge(['password' => Hash::make($request->password)]);

        if ($request->hasFile('academic_doc')) {
            $file1 = $request->file('academic_doc');
            $file1Name = time() . '.' . $file1->getClientOriginalExtension();
            $request->merge(['academic_doc_path' => $file1Name]);
        }

        if ($request->hasFile('identity_doc')) {
            $file2 = $request->file('identity_doc');
            $file2Name = time() + 1 . '.' . $file2->getClientOriginalExtension();
            $request->merge(['identity_doc_path' => $file2Name]);
        }
        try {
            Student::create($request->all());
            $file1->move(public_path('/files'), $file1Name);
            $file2->move(public_path('/files'), $file2Name);

            Mail::to($request->email)->send(new CreateAccount($request->fname, $request->lname));
            return to_route('register')->with('success', 'Account Created Succesfully');
        } catch (\Throwable $th) {
            //throw $th;
            // return back()->with('error', $th->getMessage());
            return back()->with('error', 'Some things went wrong try again');
        }
    }

    public function logout()
    {
        auth()->guard('student')->logout();
        return to_route('index');
    }
}

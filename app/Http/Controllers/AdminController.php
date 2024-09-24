<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Training;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index()
    {
        $statistics = (object) [
            'students' => Student::where('status','approved')->count(),
            'instructors' => User::where('role','instructor')->count(),
            'courses' => Training::count(),
            'revenue' => 0,
        ];
        return view('admin.index' ,compact('statistics'));
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function changeProfile(Request $request)
    {
        $id = auth()->user()->id;
        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|numeric|unique:users,phone,' . $id,
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/users'), $imageName);
            $request->merge(['imageName' => $imageName]);
        }

        try {
            User::findorfail($id)->update($request->all());
            return back()->with('message', 'Profile Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
        $user = User::findorfail(auth()->user()->id);
        if (Hash::check($request->old_password, $user->password)) {
            $user->update(['password' => Hash::make($request->password)]);
            return back()->with('message', 'Password Changed Successfully');
        } else {
            return back()->with('error', 'Old Password Not Matched');
        }
    }
}

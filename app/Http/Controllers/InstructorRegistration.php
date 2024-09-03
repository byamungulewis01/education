<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InstructorRegistration extends Controller
{
    //index
    public function index()
    {
        $instructors = User::where('role', 'instructor')->orderByDesc('id')->get();
        return view('admin.instructors', ['instructors' => $instructors]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|unique:users,phone',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
        }
        $request->merge([
            'imageName' => $imageName,
            'role' => 'instructor',
            'password' => bcrypt('password'),
        ]);

        try {
            User::create($request->all());
            $image->move(public_path('/images/users'), $imageName);

            return to_route('admin.instructor.index')->with('success', 'Instructor Added Successfully');
        } catch (\Throwable $th) {
            return to_route('admin.instructor.index')->with('error', 'Instructor not registed try again');
        }
    }
    public function update(Request $request, $id)
    {
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
            return to_route('admin.instructor.index')->with('success', 'Instructor Updated Successfully');
        } catch (\Throwable $th) {
            return to_route('admin.instructor.index')->with('error', 'Instructor not registed try again');
        }
    }
    public function destroy($id)
    {
        User::findorfail($id)->delete();
        return to_route('admin.instructor.index')->with('success', 'Instructor Delete Successfully');
    }
}

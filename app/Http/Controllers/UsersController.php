<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //index
    public function index()
    {
        $users = User::where('role', 'admin')->orderByDesc('id')->get();
        return view('admin.users', ['users' => $users]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|unique:users,phone',
            'image' => 'required|mimes:png,jpg'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
        }
        $request->merge([
            'imageName' => $imageName,
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        try {
            User::create($request->all());
            $image->move(public_path('/images/users'), $imageName);

            return to_route('admin.user.index')->with('success', 'User Added Successfully');
        } catch (\Throwable $th) {
            return to_route('admin.user.index')->with('error', 'User not registed try again');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|numeric|unique:users,phone,' . $id,
            'image' => 'nullable|mimes:png,jpg'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/users'), $imageName);
            $request->merge(['imageName' => $imageName]);
        }

        try {
            User::findorfail($id)->update($request->all());
            return to_route('admin.user.index')->with('success', 'User Updated Successfully');
        } catch (\Throwable $th) {
            return to_route('admin.user.index')->with('error', 'User not registed try again');
        }
    }
    public function destroy($id)
    {
        User::findorfail($id)->delete();
        return to_route('admin.user.index')->with('success', 'User Delete Successfully');
    }
}

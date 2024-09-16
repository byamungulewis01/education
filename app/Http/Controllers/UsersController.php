<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Country;
use App\Models\Student;
use App\Mail\CreateAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    //index
    public function index()
    {
        $users = User::where('role', 'admin')->orderByDesc('id')->get();
        return view('admin.users.admins', ['users' => $users]);
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
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        try {
            User::create($request->all());
            $image->move(public_path('/images/users'), $imageName);

            return to_route('admin.user.index')->with('message', 'User Added Successfully');
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
            return to_route('admin.user.index')->with('message', 'User Updated Successfully');
        } catch (\Throwable $th) {
            return to_route('admin.user.index')->with('error', 'User not registed try again');
        }
    }
    public function destroy($id)
    {
        User::findorfail($id)->delete();
        return to_route('admin.user.index')->with('message', 'User Delete Successfully');
    }

    public function students()
    {
        $students = Student::orderByDesc('id')->get();
        $countries = Country::orderBy('name')->get();
        return view('admin.users.students', compact('students', 'countries'));
    }

    public function store_student(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|min:3',
            'lname' => 'required|string|min:3',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|numeric|unique:students,phone',
            'dob' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'password' => 'required|min:6',
            'academic_doc' => 'required|mimes:pdf,png,jpg',
            'identity_doc' => 'required|mimes:pdf,png,jpg',
        ]);
        $count = str_pad(Student::max('id') + 1, 3, '0', STR_PAD_LEFT);
        $regnumber = now()->year . '/BCCH/' . $count;
        $request->merge(['password' => Hash::make('password'), 'regnumber' => $regnumber]);

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
            $student = Student::create($request->all());
            $file1->move(public_path('/files'), $file1Name);
            $file2->move(public_path('/files'), $file2Name);

            Mail::to($request->email)->send(new CreateAccount($student->fname, $student->lname, $student->regnumber));
            return to_route('admin.student.index')->with('message', 'Student Created Successfully');
        } catch (\Throwable $th) {
            //throw $th;
            // return back()->with('error', $th->getMessage());
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update_student(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required|string|min:3',
            'lname' => 'required|string|min:3',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone' => 'required|numeric|unique:students,phone,' . $id,
            'dob' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'password' => 'nullable|min:6',
            'academic_doc' => 'nullable|mimes:pdf,png,jpg',
            'identity_doc' => 'nullable|mimes:pdf,png,jpg',
        ]);

        if ($request->hasFile('academic_doc')) {
            $file1 = $request->file('academic_doc');
            $file1Name = time() . '.' . $file1->getClientOriginalExtension();
            $request->merge(['academic_doc_path' => $file1Name]);
            $file1->move(public_path('/files'), $file1Name);
        }

        if ($request->hasFile('identity_doc')) {
            $file2 = $request->file('identity_doc');
            $file2Name = time() + 1 . '.' . $file2->getClientOriginalExtension();
            $request->merge(['identity_doc_path' => $file2Name]);
            $file2->move(public_path('/files'), $file2Name);
        }
        try {
            Student::findorfail($id)->update($request->all());
            return to_route('admin.student.index')->with('message', 'Student Updated Successfully');
        } catch (\Throwable $th) {
            //throw $th;
            // return back()->with('error', $th->getMessage());
            return back()->with('error', 'Some things went wrong try again');
        }
    }

    public function destroy_student($id)
    {
        Student::findorfail($id)->delete();
        return to_route('admin.student.index')->with('message', 'Student Delete Successfully');
    }
    public function clients()
    {
        $clients = Client::orderByDesc('id')->get();
        $countries = Country::orderBy('name')->get();
        return view('admin.users.clients', compact('clients', 'countries'));
    }

    public function store_client(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required|numeric|unique:clients,phone',
            'country' => 'required',
            'password' => 'required|min:6',
        ]);
        $request->merge(['password' => Hash::make($request->password)]);
        try {
            Client::create($request->all());

            // Mail::to($request->email)->send(new CreateAccount($request->fname, $request->lname));
            return back()->with('message', 'Client Created Successefully');
        } catch (\Throwable $th) {
            //throw $th;
            // return back()->with('error', $th->getMessage());
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update_client(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:clients,email,' . $id,
            'phone' => 'required|numeric|unique:clients,phone,' . $id,
            'country' => 'required',
            'password' => 'nullable|min:6',
        ]);
        $request->merge(['password' => Hash::make($request->password)]);
        try {
            Client::findorfail($id)->update($request->all());

            // Mail::to($request->email)->send(new CreateAccount($request->fname, $request->lname));
            return back()->with('message', 'Client Update Successefully');
        } catch (\Throwable $th) {
            //throw $th;
            // return back()->with('error', $th->getMessage());
            return back()->with('error', 'Some things went wrong try again');
        }
    }

    public function destroy_client($id)
    {
        Client::findorfail($id)->delete();
        return back()->with('message', 'Client Delete Successfully');
    }
}

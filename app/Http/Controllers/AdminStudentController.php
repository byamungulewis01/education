<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    //index
    public function application()
    {
        $students = Student::where('status', 'pending')->get();
        return view('admin.students.apply', compact('students'));
    }
    public function approved()
    {
        $students = Student::where('status', 'approved')->get();
        return view('admin.students.approved', compact('students'));
    }
    public function approve($id)
    {
        try {
            Student::findorfail($id)->update(['status' => 'approved']);
            return back()->with('success', 'Approved Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function rejected()
    {
        $students = Student::where('status', 'rejected')->get();
        return view('admin.students.rejected', compact('students'));
    }
    public function reject(Request $request, $id)
    {
        try {
            Student::findorfail($id)->update(['status' => 'rejected', 'reason' => $request->reason]);
            return back()->with('success', 'Rejected Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
}

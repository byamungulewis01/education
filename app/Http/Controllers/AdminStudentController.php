<?php

namespace App\Http\Controllers;

use App\Mail\ApprovalStudent;
use App\Mail\RejectStudent;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            $student = Student::findorfail($id);
            $training = Enroll::where('student_id',$id)->first()->training->title;
            Student::findorfail($id)->update(['status' => 'approved']);
            Mail::to($student->email)->send(new ApprovalStudent($training));

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
            $student = Student::findorfail($id);
            Student::findorfail($id)->update(['status' => 'rejected', 'reason' => $request->reason]);
            Mail::to($student->email)->send(new RejectStudent($request->reason));
            return back()->with('success', 'Rejected Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
}

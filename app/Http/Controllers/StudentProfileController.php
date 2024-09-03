<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Student;
use App\Models\Training;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{

    public function index($id)
    {
        $student = Student::findOrFail($id);
        $trainings = Enroll::where('student_id', $id)->get();

        return view('admin.student-profile.index', compact('student', 'trainings'));
    }
    public function training($id)
    {
        $student = Student::findOrFail($id);

        @$trainingIds = Enroll::where('student_id', $id)->pluck('training_id')->toArray();

        $trainings = Training::whereNotIn('id', $trainingIds)->orderByDesc('id')->get();

        return view('admin.student-profile.training', compact('student', 'trainings'));
    }
    public function training_joining(Request $request, $id)
    {
        Enroll::create([
            'student_id' => $request->student_id,
            'training_id' => $id,
            'is_payed' => true,
            'payment_date' => now(),
        ]);
        return back()->with('message', 'Training Joined Successfully!');

    }
    public function changePassword(Request $request, $id)
    {

        $this->validate($request, [
            'newPassword' => 'required|min:6',
        ]);
        Student::findOrFail($id)->update(['password' => $request->newPassword]);

        return back()->with('message', 'Password changed successfully!');
    }
}

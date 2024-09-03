<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Enroll;
use App\Models\Student;
use App\Models\Training;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    //    index
    public function index()
    {
        return view('instructor.index');
    }
    public function chat($id)
    {
        $enroll = Enroll::findorfail($id);

        $student = Student::findorfail($enroll->student_id);
        $chats = Chat::where('training_id', $enroll->training_id)->get();
        return view('instructor.chat', compact('student', 'chats', 'id'));
    }

    public function storeChat(Request $request, $id)
    {
        $enroll = Enroll::findorfail($id);
        Chat::create([
            'training_id' => $enroll->training_id,
            'student_id' =>  $enroll->student_id,
            'user_id' => auth()->user()->id,
            'message' => $request->message,
            'sender_by' => 'user',
        ]);
        return back();
    }
    public function trainings()
    {
        $trainings = Training::where('user_id', auth()->user()->id)->orderBy('title')->get();
        return view('instructor.trainings', compact('trainings'));
    }
    public function students()
    {
        $trainingIds = Training::where('user_id', auth()->user()->id)->pluck('id')->toArray();

        $students = Enroll::whereIn('training_id', $trainingIds)->get();
        return view('instructor.students', compact('students'));
    }
}

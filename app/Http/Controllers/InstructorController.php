<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Training;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    //    index
    public function index()
    {
        return view('instructor.index');
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

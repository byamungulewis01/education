<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //index
    public function index()
    {
        return view('student.index');
    }
    public function profile()
    {
        return view('student.profile');
    }
    public function trainings()
    {
        $trainings = Enroll::where('student_id',auth()->guard('student')->user()->id)->get();
        return view('student.trainings', compact('trainings'));
    }
}

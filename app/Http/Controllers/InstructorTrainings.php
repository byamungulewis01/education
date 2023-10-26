<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class InstructorTrainings extends Controller
{
    //index
    public function index()
    {
        $trainings = Training::where('user_id', auth()->user()->id)->orderBy('title')->get();
        return view('instructor.trainings', compact('trainings'));
    }
}

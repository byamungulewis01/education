<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Question;
use App\Models\Training;
use Illuminate\Http\Request;
use App\Models\TrainingComponent;

class StudentController extends Controller
{
    //index

    public function profile()
    {
        return view('student.profile');
    }
    public function trainings()
    {
        $trainings = Enroll::where('student_id',auth()->guard('student')->user()->id)->get();
        return view('student.index', compact('trainings'));
    }
    public function trainingShow($id)
    {
        $training = Training::find($id);
        $components = TrainingComponent::where('training_id', $id)->orderByDesc('id')->get();
        $questions = Question::where('training_id', $id)->get();
        return view('student.show',compact('training', 'components','questions'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Question;
use App\Models\Training;
use App\Models\ExamSetting;
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
        $trainings = Enroll::where('student_id', auth()->guard('student')->user()->id)->get();
        return view('student.index', compact('trainings'));
    }
    public function trainingShow($id)
    {
        $training = Training::find($id);
        $components = TrainingComponent::where('training_id', $id)->orderByDesc('id')->get();
        return view('student.show', compact('training', 'components'));
    }
    public function training_exam_show($id)
    {
        $exam_set = ExamSetting::where('training_id', $id)->where('student_id', auth()->guard('student')->user()->id)->first();
        return view('student.exam_show', compact('id','exam_set'));
    }
    public function trainingExam(Request $request, $id)
    {
        $marks = 0;

        foreach ($request->question as $value) {
            $q = explode('-', $value)[0];
            $c = explode('-', $value)[1];
            $question = Question::findorfail($q);
            $ex_marks = ($c == $question->answer) ? $question->marks : 0;
            $marks += $ex_marks;
        }
        $total_marks = (int)Question::where('training_id', $id)->sum('marks');
        $status = ($marks >= ($total_marks * 0.5)) ? 'success' : 'failure';
        $answers = implode(',', $request->question);

        ExamSetting::create([
            'training_id' => $id,
            'student_id' => auth()->guard('student')->user()->id,
            'questions_answers' => $answers,
            'total_marks' => $marks,
            'status' => $status,
        ]);
        return back()->with('message', 'success message');
    }
}

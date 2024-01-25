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
        // $components = TrainingComponent::where('training_id', $id)->orderByDesc('id')->get();
        return view('student.show', compact('training'));
    }
    public function training_exam_show($id)
    {
        $exam_set = ExamSetting::where('training_id', $id)->where('student_id', auth()->guard('student')->user()->id)->first();
        $questions = Question::where('training_id', $id)->get();
        // dd(json_decode($exam_set->questions_answers), true);
        return view('student.exam_show', compact('id', 'exam_set', 'questions'));
    }
    public function trainingExam(Request $request, $id)
    {
        $checkboxData = $request->all(); // Get all data from the request

        $formattedData = [];
        $marks = 0;

        foreach ($checkboxData as $key => $values) {
            // Check if the key starts with 'q-' and has values
            if (strpos($key, 'q-') === 0 && is_array($values)) {
                $questionId = intval(str_replace('q-', '', $key));
                $question = Question::findorfail($questionId);

                $c = implode(',', $values);
                $ex_marks = ($c == $question->answers) ? $question->marks : 0;
                $marks += $ex_marks;
                $formattedData[$key] = implode(',', $values);
            }
        }


        $total_marks = (int)Question::where('training_id', $id)->sum('marks');
        $status = ($marks >= ($total_marks * 0.5)) ? 'success' : 'failure';

        ExamSetting::create([
            'training_id' => $id,
            'student_id' => auth()->guard('student')->user()->id,
            'questions_answers' => json_encode($formattedData),
            'total_marks' => $marks,
            'status' => $status,
        ]);
        return back()->with('message', 'Exam Completed Successfully.');
    }
}

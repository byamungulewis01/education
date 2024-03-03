<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\ExamSetting;
use App\Models\Module;
use App\Models\Question;
use App\Models\Training;
use App\Models\User;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    //index
    public function index()
    {
        $trainings = Training::orderByDesc('id')->get();
        $instructors = User::where('role', 'instructor')->where('status', 'active')->orderByDesc('id')->get();

        return view('admin.trainings.index', compact('trainings', 'instructors'));
    }
    public function students($id)
    {
        $students = Enroll::where('training_id', $id)->get();
        return view('admin.trainings.students', compact('students'));
    }
    public function marking_scheme($id)
    {
        $exam_set = ExamSetting::withTrashed()->find($id);
        return view('admin.trainings.marking_scheme',['exam_set' => $exam_set]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:trainings,title',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|mimes:png,jpg,jpeg',
            'user_id' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
        }
        $request->merge(['imageName' => $imageName]);

        try {
            Training::create($request->all());
            $image->move(public_path('/images/trainings'), $imageName);

            return back()->with('success', 'Training Added Successfully');
        } catch (\Throwable $th) {
            // dd($th);
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:trainings,title,' . $id,
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'user_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->merge(['imageName' => $imageName]);
            $image->move(public_path('/images/trainings'), $imageName);
        }

        try {
            Training::findorfail($id)->update($request->all());
            return back()->with('success', 'Training Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function destroy($id)
    {
        Training::findorfail($id)->delete();
        return back()->with('success', 'Training Delete Successfully');
    }
    public function show($id)
    {
        $training = Training::find($id);
        $modules = Module::where('training_id', $id)->orderByDesc('id')->get();
        $questions = Question::where('training_id', $id)->get();
        return view('admin.trainings.show', compact('training', 'modules', 'questions'));
    }

    public function store_question(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'choices' => 'required|array',
            'answers' => 'required|array',
            'marks' => 'required',
        ]);

        $choices = implode('//next//', $request->choices);
        $answers = implode(',', $request->answers);

        try {
            Question::create([
                'title' => $request->title,
                'choices' => $choices,
                'answers' => $answers,
                'marks' => $request->marks,
                'training_id' => $id,
            ]);

            return back()->with('success', 'Question Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update_question(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'choices' => 'required|array',
            'answers' => 'required|array',
            'marks' => 'required',
        ]);

        $choices = implode('//next//', $request->choices);
        $answers = implode(',', $request->answers);

        try {
            Question::findorfail($id)->update([
                'title' => $request->title,
                'choices' => $choices,
                'answers' => $answers,
                'marks' => $request->marks,
            ]);

            return back()->with('success', 'Question Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function destroy_question($id)
    {
        Question::findorfail($id)->delete();
        return back()->with('success', 'Question Delete Successfully');
    }
    public function activate_exam($id)
    {
        Training::findorfail($id)->update(['exam_status' => 'active']);
        return back()->with('success', 'Exam Acticated Successfully');
    }
    public function disactivate_exam($id)
    {
        Training::findorfail($id)->update(['exam_status' => 'inactive']);
        return back()->with('success', 'Exam Disacticated Successfully');
    }
}

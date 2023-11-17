<?php

namespace App\Http\Controllers;

use App\Models\TrainingComponent;
use App\Models\User;
use App\Models\Category;
use App\Models\Question;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    //index
    public function index()
    {
        $trainings = Training::orderByDesc('id')->get();
        $categories = Category::orderBy('title')->get();
        $instructors = User::where('role', 'instructor')->where('status', 'active')->orderByDesc('id')->get();

        return view('admin.trainings.index', compact('trainings', 'categories', 'instructors'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:trainings,title',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'user_id' => 'required',
        ]);

        try {
            Training::create($request->all());
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
            'user_id' => 'required',
            'category_id' => 'required',
        ]);

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
        $components = TrainingComponent::where('training_id', $id)->orderByDesc('id')->get();
        $questions = Question::where('training_id', $id)->get();
        return view('admin.trainings.show', compact('training', 'components','questions'));
    }
    public function store_component(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:pdf'
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileUrl = time() . '.' . $file->getClientOriginalExtension();
        }
        $request->merge(['fileUrl' => $fileUrl, 'training_id' => $id]);
        try {
            TrainingComponent::create($request->all());
            $file->move(public_path('/files/components'), $fileUrl);

            return back()->with('success', 'Component Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update_component(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'nullable|mimes:pdf'
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileUrl = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/files/components'), $fileUrl);
            $request->merge(['fileUrl' => $fileUrl]);
        }
        try {
            TrainingComponent::findorfail($id)->update($request->all());
            return back()->with('success', 'Component Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function destroy_component($id)
    {
        TrainingComponent::findorfail($id)->delete();
        return back()->with('success', 'Component Delete Successfully');
    }
    public function store_question(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'choice_one' => 'required',
            'choice_two' => 'required',
            'choice_three' =>'nullable',
            'choice_four' =>'nullable',
            'answer' =>'required',
        ]);

        $request->merge(['training_id' => $id]);
        try {
            Question::create($request->all());

            return back()->with('success', 'Question Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update_question(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'choice_one' => 'required',
            'choice_two' => 'required',
            'choice_three' =>'nullable',
            'choice_four' =>'nullable',
            'answer' =>'required',
        ]);

        try {
            Question::findorfail($id)->update($request->all());
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
}

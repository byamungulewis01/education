<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    //index
    public function index()
    {
        $trainings = Training::orderBy('title')->get();
        $categories = Category::orderBy('title')->get();
        $instructors = User::where('role', 'instructor')->where('status', 'active')->orderByDesc('id')->get();

        return view('admin.trainings', compact('trainings', 'categories', 'instructors'));
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
            dd($th);
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
}

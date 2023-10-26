<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\School;
use App\Models\Program;
use App\Models\Training;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index
    public function index()
    {
        $categories = Category::orderBy('title')->get();
        return view('home.index', compact('categories'));
    }
    public function instructor()
    {
        return view('home.instructor');
    }
    public function training($id)
    {
        $category = Category::findorfail(decrypt($id));
        // trainigs
        $trainings = Training::where('category_id', decrypt($id))->paginate(6);
        $trainingsCount = Training::where('category_id', decrypt($id));
        return view('home.show-trainings', compact('category', 'trainings', 'trainingsCount'));
    }

    public function filter(Request $request, $id)
    {
        $school = School::findorfail(decrypt($id));
        // courses
        $q = Course::where('school_id', decrypt($id))
            ->where('title', 'like', '%' . $request->title . '%')
            ->where('program_id', $request->program_id);

        if ($request->price == 'free') {
            $q->where('price', 0);
        } elseif ($request->price == 'paid') {
            $q->where('price', '>', 0);
        }

        $courses = $q->paginate(6);
        $coursesCount = Course::where('school_id', decrypt($id));
        $programs = Program::all();
        return view('home.show-course', compact('school', 'courses', 'coursesCount', 'programs'));
    }
    public function show($id)
    {
        $training = Training::findorfail(decrypt($id));
        return view('home.detail-training', compact('training'));
    }
}

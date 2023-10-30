<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;

class InstructorTrainings extends Controller
{
    //index
    public function index()
    {
        // $trainings = Training::where('user_id', auth()->user()->id)->orderBy('title')->get();
        // return view('admin.trainings', compact('trainings'));
        $trainings = Training::orderBy('title')->get();
        $categories = Category::orderBy('title')->get();
        $instructors = User::where('role', 'instructor')->where('status', 'active')->orderByDesc('id')->get();

        return view('admin.trainings', compact('trainings', 'categories', 'instructors'));
    }
}

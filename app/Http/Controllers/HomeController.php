<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\School;
use App\Models\Program;
use App\Models\Category;
use App\Models\Training;
use App\Models\Consultance;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index
    public function index()
    {
        $categories = Category::orderBy('title')->get();
        return view('home.index', compact('categories'));
    }
    public function consultancy($id)
    {
        $consultancy = Consultance::findorfail($id);
        return view('home.show-consultancy',compact('consultancy'));
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
        $training = Training::findorfail(decrypt($id));
        // courses
        $q = Training::where('category_id', decrypt($id))
            ->where('title', 'like', '%' . $request->title . '%');

        if ($request->price == 'free') {
            $q->where('price', 0);
        } elseif ($request->price == 'paid') {
            $q->where('price', '>', 0);
        }

        $trainings = $q->paginate(6);
        $trainingsCount = Training::where('category_id', decrypt($id));

        return view('home.show-trainings', compact('training', 'trainings', 'trainingsCount'));
    }
    public function show($id)
    {
        $training = Training::findorfail(decrypt($id));
        return view('home.detail-training', compact('training'));
    }
    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }
}

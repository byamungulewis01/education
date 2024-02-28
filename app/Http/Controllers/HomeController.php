<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use App\Models\School;
use App\Models\Country;
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

        return view('home.index');
    }
    public function consultancy()
    {
        return view('home.consultancy');
    }

    public function consultancyShow($id)
    {
        $consultancy = Consultance::findorfail($id);
        return view('home.show-consultancy',compact('consultancy'));
    }
    public function training($id)
    {
        $training = Training::findorfail($id);
        $modules = Module::where('training_id', $id)->orderByDesc('id')->get();
        return view('home.show-training', compact('training', 'modules'));
    }
    public function admission($id)
    {
        $training = Training::findorfail($id);
        $countries = Country::orderBy('name')->get();
        return view('home.admission', compact('countries','training'));
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
    public function trainings()
    {
        return view('home.trainings');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function accreditations()
    {
        return view('home.accreditations');
    }
}

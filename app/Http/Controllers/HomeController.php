<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Module;
use App\Models\Country;
use App\Models\Training;
use App\Models\ContactUs;
use App\Models\HomeBanner;
use App\Models\Consultance;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //index
    public function index()
    {
        $about = About::first();
        $banners = HomeBanner::orderByDesc('id')->get();


        return view('home.index',compact('about','banners'));
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
        $about = About::first();
        return view('home.about',compact('about'));
    }
    public function trainings()
    {
        return view('home.trainings');
    }
    public function contact()
    {
        $contact = ContactUs::first();

        return view('home.contact', compact('contact'));
    }
    public function accreditations()
    {
        return view('home.accreditations');
    }
}

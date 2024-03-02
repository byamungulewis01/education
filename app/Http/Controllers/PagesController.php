<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class PagesController extends Controller
{
    //
    public function about()
    {
        $about = About::first();
        return view('admin.pages.about',compact('about'));
    }
    public function contact()
    {
        return view('admin.pages.contact');
    }
    public function aboutUpdate(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:4|max:30',
            'header_section' => 'required|string|min:30|max:500',
            'file' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/abouts'), $imageName);
            $request->merge(['image' => $imageName]);
        }
        if ($request->description != null) {
            $request->merge(['description' => $request->description]);
        } else {
            $request->merge(['description' => About::first()->description]);
        }
        
        try {
            //code...
             About::first()->update($request->all());

            return back()->with('success', 'Change Updated Successfully');

        } catch (\Throwable $th) {
            return  back()->with('error', 'Some things went wrong');

        }
    }
    public function aboutMissionUpdate(Request $request)
    {
        $request->validate([
            'mission' => 'required|string|min:10|max:1200',
            'vission' => 'required|string|min:10|max:1200',
            'objective' => 'required|string|min:10|max:1200'
        ]);
        
        try {
            //code...
             About::first()->update($request->all());

            return back()->with('success', 'Change Updated Successfully');

        } catch (\Throwable $th) {
            return  back()->with('error', 'Some things went wrong');

        }
    }
}

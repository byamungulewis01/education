<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ContactUs;
use App\Models\Structure;
use App\Models\HomeBanner;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function about()
    {
        $about = About::first();
        return view('admin.pages.about', compact('about'));
    }
    public function contact()
    {
        $contact = ContactUs::first();

        return view('admin.pages.contact', compact('contact'));
    }
    public function aboutUpdate(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:4|max:30',
            'header_section' => 'required|string|min:30|max:500',
            'file' => 'nullable|mimes:png,jpg,jpeg',
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
            return back()->with('error', 'Some things went wrong');

        }
    }

    public function aboutMissionUpdate(Request $request)
    {
        $request->validate([
            'mission' => 'required|string|min:10|max:1200',
            'vission' => 'required|string|min:10|max:1200',
            'objective' => 'required|string|min:10|max:1200',
        ]);

        try {
            //code...
            About::first()->update($request->all());

            return back()->with('success', 'Change Updated Successfully');

        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong');

        }
    }

    public function contactUpdate(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:4|max:30',
            'header_section' => 'required|string|min:30|max:500',
            'company_desc_title' => 'required|string|min:4|max:30',
            'company_descr' => 'required|string|min:4|max:300',
            'addr_title' => 'required|string|min:4|max:30',
            'company_addr_details' => 'required|string|min:4|max:300',
            'contact_title' => 'required|string|min:4|max:30',
            'contact_details' => 'required|string|min:4|max:300',
            'head_phone' => 'required',
            'head_email' => 'required',
            'branch_phone' => 'required',
            'branch_email' => 'required',
        ]);

        try {
            //code...
            // ContactUs::create($request->all());
            ContactUs::first()->update($request->all());

            return back()->with('success', 'Change Updated Successfully');

        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong');

        }
    }
    public function home_banners()
    {
        $banners = HomeBanner::all();
        return view('admin.pages.home_banners', compact('banners'));
    }
    public function store_home_banner(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:home_banners,title',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
        }
        $request->merge(['imageName' => $imageName]);

        try {
            HomeBanner::create($request->all());
            $image->move(public_path('/images/home_banners'), $imageName);

            return back()->with('success', 'Banner Added Successfully');
        } catch (\Throwable $th) {
            // dd($th);
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update_home_banner(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:home_banners,title,' . $id,
            'description' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->merge(['imageName' => $imageName]);
            $image->move(public_path('/images/home_banners'), $imageName);
        }

        try {
            HomeBanner::findorfail($id)->update($request->all());
            return back()->with('success', 'Bunner Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function destroy_home_banner($id)
    {
        HomeBanner::findorfail($id)->delete();
        return back()->with('success', 'Bunner Delete Successfully');
    }

    public function structure()
    {
        $structures = Structure::orderByDesc('id')->get();
        return view('admin.pages.structure.index', ['structures' => $structures]);
    }
    public function create_structure()
    {
        return view('admin.pages.structure.create');
    }
    public function edit_structure($id)
    {
        $item = Structure::findorfail($id);
        return view('admin.pages.structure.edit', compact('item'));
    }
    public function store_structure(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:structures,title',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
        }
        $request->merge(['imageName' => $imageName]);
        try {
            Structure::create($request->all());
            $image->move(public_path('/images/structure'), $imageName);

            return to_route('admin.pages.structure')->with('success', 'Structure Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update_structure(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:structures,title,' . $id,
            'image' => 'nullable|mimes:png,jpg,jpeg,'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->merge(['imageName' => $imageName]);
            $image->move(public_path('/images/structure'), $imageName);
        }
        if ($request->description != null) {
            $request->merge(['description' => $request->description]);
        } else {
            $request->merge(['description' => Structure::find($id)->description]);
        }

        try {
            Structure::findorfail($id)->update($request->all());
            return back()->with('success', 'Structure Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function destroy_structure($id)
    {
        Structure::findorfail($id)->delete();
        return back()->with('success', 'Structure Delete Successfully');
    }
}

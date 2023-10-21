<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //index
    public function index()
    {
        $schools = School::orderBy('title')->get();
        return view('admin.schools', ['schools' => $schools]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:schools,title',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images'), $imageName);
        }
        $request->merge(['imageName' => $imageName]);

        School::create($request->all());
        return to_route('admin.school.index')->with('success', 'School Added Successfully');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:schools,title,' . $id,
            'description' => 'required',
            'image' => 'required',
        ]);
        // dd($request->all());
        // upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images'), $imageName);
            $request->merge(['imageName' => $imageName]);
        }

        School::findorfail($id)->update($request->all());
        return to_route('admin.school.index')->with('success', 'School Updated Successfully');
    }
    public function destroy($id)
    {
        School::findorfail($id)->delete();
        return to_route('admin.school.index')->with('success', 'School Delete Successfully');
    }
}

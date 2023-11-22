<?php

namespace App\Http\Controllers;

use App\Models\Consultance;
use Illuminate\Http\Request;

class ConsultanceController extends Controller
{
    //index
    public function index()
    {
        $consultances = Consultance::orderBy('title')->get();
        return view('admin.consultancy.index', ['consultances' => $consultances]);
    }
    public function create()
    {
        return view('admin.consultancy.create');
    }
    public function edit($id)
    {
        $item = Consultance::findorfail($id);
        return view('admin.consultancy.edit',compact('item'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:consultances,title',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
        }
        $request->merge(['imageName' => $imageName]);
        try {
            Consultance::create($request->all());
            $image->move(public_path('/images'), $imageName);

            return back()->with('success', 'Consultance Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:categories,title,' . $id,
            'description' => 'required',
            'image' => 'nullable|mimes:png,jpg'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->merge(['imageName' => $imageName]);
            $image->move(public_path('/images'), $imageName);
        }

        try {
            Consultance::findorfail($id)->update($request->all());
            return back()->with('success', 'Consultance Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function destroy($id)
    {
        Consultance::findorfail($id)->delete();
        return back()->with('success', 'Consultance Delete Successfully');
    }
}

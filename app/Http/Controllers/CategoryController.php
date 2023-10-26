<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //index
    public function index()
    {
        $categories = Category::orderBy('title')->get();
        return view('admin.categories', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:categories,title',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
        }
        $request->merge(['imageName' => $imageName]);
        try {
            Category::create($request->all());
            $image->move(public_path('/images'), $imageName);

            return back()->with('success', 'Category Added Successfully');
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
            Category::findorfail($id)->update($request->all());
            return back()->with('success', 'Category Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function destroy($id)
    {
        Category::findorfail($id)->delete();
        return back()->with('success', 'Category Delete Successfully');
    }
}

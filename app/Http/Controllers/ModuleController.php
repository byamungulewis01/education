<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf'
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileUrl = time() . '.' . $file->getClientOriginalExtension();
        }
        $request->merge(['fileUrl' => $fileUrl, 'training_id' => $id]);
        try {
            Module::create($request->all());
            $file->move(public_path('/files/components'), $fileUrl);

            return back()->with('success', 'Module Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'nullable|mimes:pdf'
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileUrl = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/files/components'), $fileUrl);
            $request->merge(['fileUrl' => $fileUrl]);
        }
        try {
            Module::findorfail($id)->update($request->all());
            return back()->with('success', 'Module Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function destroy($id)
    {
        Module::findorfail($id)->delete();
        return back()->with('success', 'Module Delete Successfully');
    }
}

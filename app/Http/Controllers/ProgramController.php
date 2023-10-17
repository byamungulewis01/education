<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
       //index
       public function index()
       {
           $programs = Program::orderBy('title')->get();
           return view('admin.programs',['programs' => $programs]);
       }
       public function store(Request $request)
       {
            $request->validate([
               'title' => 'required|unique:programs,title',
               'description' => 'nullable',
           ]);
           Program::create($request->all());
           return to_route('admin.program.index')->with('success', 'Program Added Successfully');
       }
       public function update(Request $request,$id)
       {
            $request->validate([
               'title' => 'required|unique:programs,title,'.$id,
               'description' => 'nullable',
           ]);
           Program::findorfail($id)->update($request->all());
           return to_route('admin.program.index')->with('success', 'Program Updated Successfully');
       }
       public function destroy($id)
       {
           Program::findorfail($id)->delete();
           return to_route('admin.program.index')->with('success', 'Program Delete Successfully');
       }

}

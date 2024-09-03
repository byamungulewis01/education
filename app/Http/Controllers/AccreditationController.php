<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accreditation;

class AccreditationController extends Controller
{
      //index
      public function index()
      {
          $accreditations = Accreditation::orderByDesc('id')->get();
          return view('admin.accreditation.index', ['accreditations' => $accreditations]);
      }
      public function create()
      {
          return view('admin.accreditation.create');
      }
      public function edit($id)
      {
          $item = Accreditation::findorfail($id);
          return view('admin.accreditation.edit', compact('item'));
      }
      public function store(Request $request)
      {
          $request->validate([
              'title' => 'required|unique:accreditations,title',
              'description' => 'required',
              'image' => 'required|mimes:png,jpg,jpeg'
          ]);
          if ($request->hasFile('image')) {
              $image = $request->file('image');
              $imageName = time() . '.' . $image->getClientOriginalExtension();
          }
          $request->merge(['imageName' => $imageName]);
          try {
            Accreditation::create($request->all());
              $image->move(public_path('/images/accreditation'), $imageName);

              return to_route('admin.accreditation.index')->with('success', 'Accreditation Added Successfully');
          } catch (\Throwable $th) {
              return back()->with('error', 'Some things went wrong try again');
          }
      }
      public function update(Request $request, $id)
      {
          $request->validate([
              'title' => 'required|unique:accreditations,title,' . $id,
              'image' => 'nullable|mimes:png,jpg,jpeg'
          ]);

          if ($request->hasFile('image')) {
              $image = $request->file('image');
              $imageName = time() . '.' . $image->getClientOriginalExtension();
              $request->merge(['imageName' => $imageName]);
              $image->move(public_path('/images/accreditation'), $imageName);
          }
          if ($request->description != null) {
              $request->merge(['description' => $request->description]);
          } else {
              $request->merge(['description' => Consultance::find($id)->description]);
          }

          try {
            Accreditation::findorfail($id)->update($request->all());
              return back()->with('success', 'Accreditation Updated Successfully');
          } catch (\Throwable $th) {
              return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
          }
      }
      public function destroy($id)
      {
        Accreditation::findorfail($id)->delete();
          return back()->with('success', 'Accreditation Delete Successfully');
      }

}

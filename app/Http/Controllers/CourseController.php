<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\School;
use App\Models\Program;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //index
    public function index()
    {
        $courses = Course::orderBy('title')->get();
        $schools = School::orderBy('title')->get();
        $programs = Program::orderBy('title')->get();
        return view('admin.courses', compact('courses', 'schools', 'programs'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:courses,title',
            'description' => 'required',
            'school_id' => 'required',
            'program_id' => 'required',
            'price' => 'required',
        ]);

        $check = Course::where('title', $request->title)->where('school_id', $request->school_id)->first();
        if ($check) {
            return to_route('admin.course.index')->with('warning', 'Course Arleady Existy');
        }
        Course::create($request->all());
        return to_route('admin.course.index')->with('success', 'Course Added Successfully');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:courses,title,' . $id,
            'description' => 'required',
            'school_id' => 'required',
            'program_id' => 'required',
            'price' => 'required',
        ]);
        $check = Course::where('title', $request->title)->where('school_id', $request->school_id)
        ->whereNot('id',$id)->first();
        if ($check) {
            return to_route('admin.course.index')->with('warning', 'Course Arleady Existy');
        }
        Course::findorfail($id)->update($request->all());
        return to_route('admin.course.index')->with('success', 'Course Updated Successfully');
    }
    public function destroy($id)
    {
        Course::findorfail($id)->delete();
        return to_route('admin.course.index')->with('success', 'Course Delete Successfully');
    }
}

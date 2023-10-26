<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    //index
    public function index()
    {
        $students = Student::all();
        return view('admin.students', compact('students'));
    }
    public function application()
    {
        $students = Student::all();
        return view('admin.students', compact('students'));
    }
}

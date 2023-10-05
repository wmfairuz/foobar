<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StudentController extends Controller
{ 
    public function index(Request $request)
    {
        # code...

        $student = Student::all();
        return view('students.index')->with(['students' => $student]);
    }

    public function create(Request $request)
    {
        # code...
        return view('students.create');
    }

    
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...
 
        $student = new Student;
 
        $product->name = $request->name;
        $product->student_id = $request->student_id;
        $product->class = $request->class;
        $product->course = $request->course;
        $product->cgpa = $request->cgpa;
 
        $student->save();
 
        return redirect('/students');

    }

 
    public function destroy(Request $request, Student $student)
    {
       $student->delete();
       return redirect()->route('students.index');
    }

    public function edit(Request $request, Student $student)
    {
       return view('students.edit')->with(['student' => $student]);
    }

    public function update(Request $request,Student $student): RedirectResponse
    {

        $product->name = $request->name;
        $product->student_id = $request->student_id;
        $product->class = $request->class;
        $product->course = $request->course;
        $product->cgpa = $request->cgpa;
 
        $student->save();
 
        return redirect()->route('students.index');

    }

    public function show(Request $request,Student $student)
    {
        # code...
    
        return view('students.show')->with(['student' => $student]);
    }

}



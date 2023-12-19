<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class StudentController extends Controller
{
    public function index(){
        $students = student::all();
        return view('Student.index' , ['students' => $students]);
        

    }
    public function create(){
        return view('Student.create');

    }
    public function store(Request $request){
        $data = $request->validate([
            'cnic' => 'required',
            'name' => 'required'
        ]);

        $newStudent = student::create($data);

        return redirect(route('student.index'));

    }

    public function edit(student $student){
      return view('student.edit', ['student' => $student]);

    }

    public function update(student $student , Request $request){
        $data = $request->validate([
            'cnic' => 'required',
            'name' => 'required'
        ]);
        $student->update($data);

        return redirect(route('student.index'))->with('success' , 'Student Profile Updated Successfully');



    }
    public function delete(student $student)
    {
        $student->delete();
        return redirect(route('student.index'))->with('success' , 'Student Profile Deleted Successfully');
    }

    // public function update( student $student , Request $request)
    // {
    //     $data = $request->validate([
    //         'cnic' => 'required',
    //         'name' => 'required'
    //     ]);
        
    // $student->update($data);

    // return redirect(route('student.index'))->with('success','Product Updated Successfully');

    // }

}

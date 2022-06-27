<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students=Student::paginate(3);
        return view('backend.student.addstudent',compact('students'));
    }

    public function about(Request $request){

        $newName='student_'.time().'.'.$request->file('photo')->getClientOriginalExtension();
        $request->file('photo')->move('uploads/students',$newName);

        $inputs=[
           'name'=>$request->input('name'),
           'phone'=>$request->input('phone'),
           'email'=>$request->input('email'),
           'denomination'=>$request->input('denomination'),
           'address'=>$request->input('address'),
           'roll'=>$request->input('roll'),
           'photo'=>$newName,
        ];

        Student::create($inputs);
        return redirect()->route('student.list');

    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Validator;

class AddController extends Controller
{   
    //teacher list page view
    public function index(){

        $teacher=Teacher::paginate(5);
        return view('backend.teacher.teacher',compact('teacher'));
    }

    //add new teacher page view
    Public function teacher(){
        return view('backend.teacher.addteacher');
    }

    //teacher data submit in database
    public function addteacher(Request $request){

        
            $validator = Validator::make($request->all(), 
            [
                'name' => 'required',
                'phone' => 'required|numeric',
                'email' => 'required|unique:users',
                'status'=>'required',
                'photo'=>'required|image',
                              
            ]);
     
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }

            $newName='teacher_'.time().'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move('uploads/teacher',$newName);
      
       

        $inputs=[
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'status'=>$request->input('status'),
            'photo'=>$newName,
           

        ];

        Teacher::create($inputs);
        return redirect()->route('admin.teacher');
    }

    //teacher information edit
    public function edit($id){

        $teacher=Teacher::find($id);
        return view('backend.teacher.edit',compact('teacher'));
    }

    //store teacher edit data
    public function update(Request $request,$id){

        $inputs=[
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'status'=>$request->input('status'),
        ];

        $teacher=Teacher::find($id);
        $teacher->update($inputs);
        return redirect()->route('admin.teacher');

 }

 //teacher data delete
 public function delete($id){
    $teacher=Teacher::find($id);
    $teacher->delete();
    return redirect()->route('admin.teacher');

 }


}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{   
    //all teacher list show by api
    public function index(){

        
       try{

        $teachers=Teacher::all();
        return response()->json([

            'status' => true,
            'message' => 'All teacher list',
            'data' => $teachers,

        ]);

       }catch(\Exception $exception){

        return response()->json([

            'status' => false,
            'message' => $exception->getMessage(),

        ]);

       }

    }

    //single teacher show by api

    public function show($id){

        try{
            $teacher=Teacher::find($id);

            if($teacher){

                return response()->json([
    
                    'status' => true,
                    'message' => 'Singel teacher list',
                    'data' => $teacher,
        
                ]);
            }
            return response()->json([
                'status'=>fasle,
                'message'=>"teacher not found",
            ]);
    
           }catch(\Exception $exception){
    
            return response()->json([
    
                'status' => false,
                'message' => $exception->getMessage(),
    
            ]);
    
           }    
} 

//store data

  public function store(Request $request){
     
    try{

    $validator = Validator::make($request->all(), 
    [
        'name' => 'required',
        'phone' => 'required|numeric',
        'email' => 'required|unique:users',
        'status'=>'required',
        'photo'=>'required|image',
                      
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status'=>fasle,
            'message'=>$validator->getMessageBag(),
        ]);
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

$teacher=Teacher::create($inputs);
return response()->json([
    
    'status' => true,
    'message' => 'Teacher Create',
    'data' => $teacher,

]);


  }catch(\Excption $excption){

    return response()->json([
    
        'status' => false,
        'message' => $exception->getMessage(),

    ]);

  }
   


  }

  //update
  public function update(Request $request,$id){
    try{
    $validator = Validator::make($request->all(), 
    [
        'name' => 'required',
        'phone' => 'required|numeric',
        'email' => 'required|unique:users',
        'status'=>'required',
        'photo'=>'image',
                      
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status'=>fasle,
            'message'=>$validator->getMessageBag(),
        ]);
    }
    $inputs=[
        'name'=>$request->input('name'),
        'phone'=>$request->input('phone'),
        'email'=>$request->input('email'),
        'status'=>$request->input('status'),
    ];

    $teacher=Teacher::find($id);
    if(!$teacher){

        return response()->json([

            'status' => true,
            'message' => ' Teacher Not found',
            //'data' => $teacher,

        ]);
    }
    $teacher->update($inputs);

    if(!empty($request->file('photo'))){
        if(file_exists('uploads/teacher/'.$teacher->photo)){
            unlink('uploads/teacher/'.$teacher->photo);
             }
          $newName='teacher_'.time().'.'.$request->file('photo')->getClientOriginalExtension();
       
$request->file('photo')->move('uploads/teacher',$newName);
$teacher->update(['photo'=>$newName]);
      }
      return response()->json([
    
        'status' => true,
        'message' => "Teacher update",
        'data' => $teacher,
    
    ]);
  } catch(\Excption $excption){

    return response()->json([
    
        'status' => false,
        'message' => $exception->getMessage(),

    ]);
    }
}

//delete
Public function delete($id){
    try{
    $teacher=Teacher::find($id);
    if(file_exists('uploads/teacher/'.$teacher->photo)){
           unlink('uploads/teacher/'.$teacher->photo);
            }
    $teacher->delete();
    return response()->json([
    
        'status' => true,
        'message' => "Teacher delete",
    
    ]);
   
}catch(\Excption $excption){

    return response()->json([
    
        'status' => false,
        'message' => $exception->getMessage(),

    ]);
}
}

}

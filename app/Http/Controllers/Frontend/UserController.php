<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Anousment;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{   
    //teacher list 
    public function index(){
        $teacher=Teacher::paginate(3);
        return view('frontend.teacherlist',compact('teacher'));
    }

    //notic board see
    public function notic(){

        $anousments=Anousment::paginate(3);
        return view('frontend.notic',compact('anousments'));
    }

  //student profile index
  public function student(){
    return view('frontend.profile');
  }

//student profile edit
public function update(Request $request){

  $user=auth()->user();

  $validator = Validator::make($request->all(), 
  [
      'name' => 'required',
      'phone' => 'required',
      'address' => 'required',
      'photo'=>'image|required',
      
  ]);

  if ($validator->fails()) {
      return redirect()->back()
                  ->withErrors($validator)
                  ->withInput();
  }

  $newName='profile_'.time().'.'.$request->file('photo')->getClientOriginalExtension();
  $request->file('photo')->move('uploads/profiles',$newName);
  $inputs=[
      'name'=>$request->input('name'),
      'phone'=>$request->input('phone'),
      'address'=>$request->input('address'),
      'photo'=>$newName,
  ];
 
  $user->update($inputs);
  return redirect()->back();


}


}

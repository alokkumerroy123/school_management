<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class RgeController extends Controller
{
    public function index(){
        return view('auth.rge');
    }

    public function dorge(Request $request){

        
  $validator = Validator::make($request->all(), 
  [
      'name' => 'required',
      'phone' => 'required',
      'address' => 'required',
      'email' => 'required|unique:users',
      'photo' => 'required|image',
      
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
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'photo'=>$newName,
            

        ];

        User::create($inputs);
        return redirect()->route('login');

    }

    
}

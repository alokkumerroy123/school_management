<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RgeController extends Controller
{
    public function index(){
        return view('auth.rge');
    }

    public function dorge(Request $request){

        $inputs=[
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),

        ];

        User::create($inputs);
        return redirect()->route('login');

    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
 }

 public function login(Request $request){

    $creds=$request->except('_token');
    if(\auth()->attempt($creds)){
        if(\auth()->user()->role == 'admin'){
         return redirect()->route('dashboard');
        }
        return redirect()->route('home');
         
        }
        return redirect()->back();
    }

    //logout
    public function logout(){
        \auth()->logout();
        return redirect()->route('login');

    }

 }


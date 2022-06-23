<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Connect;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConnectMail;


class ConnectController extends Controller
{
    //connect page view
    public function index(){
        return view('frontend.connect');
    }
    
    public function connect(Request $request){
        $inputs=[
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'subject'=>$request->input('subject'),
            'message'=>$request->input('message'),
        ];

        $ovejog=Connect::create($inputs);
        Mail::to(auth()->user()->email)->send(new ConnectMail($ovejog));
        return redirect()->route('home');
    }

    //admin show the message
    public function message(){
        $ovejog=Connect::paginate(3);
        return view('backend.teacher.showmessage',compact('ovejog'));
    }
}

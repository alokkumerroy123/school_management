<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConnectController extends Controller
{
    //connect page view
    public function index(){
        return view('frontend.connect');
    }
}

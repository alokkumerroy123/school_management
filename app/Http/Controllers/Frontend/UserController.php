<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Anousment;

class UserController extends Controller
{   
    //teacher list 
    public function index(){
        $teacher=Teacher::paginate(5);
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


}

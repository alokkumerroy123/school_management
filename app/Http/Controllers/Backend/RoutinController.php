<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Routin;
use Illuminate\Support\Facades\Validator;

class RoutinController extends Controller
{
    public function index(){
        $routin=Routin::paginate(4);
        return view('backend.routin.index',compact('routin'));
    }

    public function routin(){
        return view('backend.routin.addroutin');
    }

    public function upload(Request $request){

        $validated = $request->validate(
            [
            'photo' => 'required|image',
           ]
    );

        $newName='routin_'.time().'.'.$request->file('photo')->getClientOriginalExtension();
        $request->file('photo')->move('uploads/routin',$newName);
  
    $inputs=[
        'photo'=>$newName, 
    ];
    Routin::create($inputs);
    return redirect()->route('routin');
    }

    public function delete($id)
    {
        $routin=Routin::find($id);
        $routin->delete();
        return redirect()->route('routin');

    }
}

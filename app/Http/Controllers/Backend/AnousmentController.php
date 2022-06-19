<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anousment;
use Illuminate\Support\Facades\Validator;

class AnousmentController extends Controller
{   
    //add anousment page view
    public function index(){
        $anousment=Anousment::paginate(3);
        return view('backend.anousment.anousment',compact('anousment'));
    }
    
    //add new anousment page view
    public function anousment(){
        return view('backend.anousment.addanousment');
    }
    
    //submit into database anousment
    public function input(Request $request){

        $validator = Validator::make($request->all(), 
        [
            'anousment' => 'required',
            
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $inputs=[
            'anousment'=>$request->input('anousment'),
        ];

        Anousment::create($inputs);
        return redirect()->route('anousment');
    }

    //edit anousment
    public function edit($id){

        $anousments=Anousment::find($id);
        return view('backend.anousment.edit',compact('anousments'));
    }

    //anousment edit data submit in database
    public function update(Request $request,$id){
        $inputs=[
            'anousment'=>$request->input('anousment'),
        ];
        $anousment=Anousment::find($id);
        $anousment->update($inputs);
        return redirect()->route('anousment');
    }

    //anousment delete
    public function delete($id){
        $anousment=Anousment::find($id);
        $anousment->delete();
        return redirect()->route('anousment');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanborrowersController extends Controller
{
    public function index(){
        
    }
    public function create(){
        return view('loanborrowers.create');
    }
    public function store(Request $request){
        $pictureurl="";
        if($request->hasfile('filename'))
         {
            $file = $request->file('picture');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            $pictureurl=public_path().'/images/'.$name;
         }
        $loanborrowers= new \App\loanborrowers;
        $loanborrowers->name=$request->get('name');
        $loanborrowers->email=$request->get('email');
        $loanborrowers->mobile_no=$request->get('mobile_no');
        $loanborrowers->address=$request->get('address');
        $loanborrowers->image=$pictureurl;
        $loanborrowers->save();
        return redirect('loanborrowers')->with('success', 'Information has been added');
    }
}

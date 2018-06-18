<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanborrowersController extends Controller
{
    public function index(){
        if (!Auth::user()){
            return redirect('login');
        }
        $loanborrowers=\App\loanborrowers::paginate(5);
        return view('loanborrowers.index',compact('loanborrowers'));
    }
    public function create(){
        if (!Auth::user()){
            return redirect('login');
        }
        return view('loanborrowers.create');
    }
    public function store(Request $request){
        if (!Auth::user()){
            return redirect('login');
        }
        $pictureurl="";
        if($request->hasfile('picture')){
            $file = $request->file('picture');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            $pictureurl='/images/'.$name;
         }
        $loanborrowers= new \App\loanborrowers;
        $loanborrowers->name=$request->get('name');
        $loanborrowers->email=$request->get('email');
        $loanborrowers->mobile_no=$request->get('mobile_no');
        $loanborrowers->address=$request->get('address');
        $loanborrowers->image=$pictureurl;
        $loanborrowers->save();
        return redirect('loanborrower')->with('success', 'Information has been added');
    }
    public function edit($id)
    {
        $borrower = \App\loanborrowers::find($id);
        return view('create',compact('borrower','id'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\contract;
use Illuminate\Http\Request;


class frontendcontroller extends Controller
{
    public function index(){
    
       
        return view('muster');
    }

    public function abot(){
    
        return view('about');
    } 




    public function store(Request $request){
        $coment=new contract();
        $coment->name=$request->name;
        $coment->email=$request->email;
        $coment->subject=$request->subject;
        $coment->message=$request->message;
        $coment->save();
        return redirect()->back()->with('success','Your response is successfully submitted');

    }
}

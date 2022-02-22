<?php

namespace App\Http\Controllers;

use App\Models\contract;
use App\Mail\contractmail;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
use Mail;


class backendcontroller extends Controller
{
    public function store(Request $request){
        $coment=new contract();
        $coment->name=$request->name;
        $coment->email=$request->email;
        $coment->subject=$request->subject;
        $coment->message=$request->message;
        $coment->save();
        $data= array(
      
       'name'=>$request->name,
       'email'=>$request->email,
       'subject'=>$request->subject,
       'message'=>$request->message
        );
        Mail::to('viralshortsvideo33@gmail.com')->send(new contractmail ($data));{
             
            return redirect()->back()->with('success','Your response is successfully submitted');

        };

     

    }
}

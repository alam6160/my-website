<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;

class todocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insert=todo::all();
        return view('backend.view',compact('insert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store=new todo();
        $store->name=$request->name;
        $store->email=$request->email;
        $store->subject=$request->subject;
       if($request->hasfile('img')){
           $file=$request->file('img');
           $extension=$file->getClientOriginalExtension();
           $filename=time().'.'.$extension;
           $file->move('upload/image',$filename);
           $store->img=$filename;

       }
        $store->save();
        return redirect()-> back()-> with('success','Data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdata=todo::find('id');
        return view('backend.edit',compact('editdata'));
        // return view('backend.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedata=todo::findOrFail($id);
        return redirect()->back();
    }
}

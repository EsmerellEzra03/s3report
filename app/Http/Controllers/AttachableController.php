<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttachableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attachables=attachable::all();
        return view('attachable.index',compact('attachables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attachable.attachable');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //declare model
        $attachable = new Attachable;
        $attachable->user_id=Auth::id();
        $attachable->progress_id=$request->progress_id;
        $attachable->name=$request->name;
        $attachable->type=$request->type;
        $attachable->created_by=$request->created_by;
        $attachable->updated_by=$request->updated_by;
        $attachable->save();

        return redirect()->route('attachable:index')->with('message', 'Attachment added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Attachable $attachable)
    {
        //create editform
        return view('attachable.show', compact ('attachable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Attachable $attachable)
    {
        //update
        $attachable->progress_id=$request->progress_id;
        $attachable->name=$request->name;
        $attachable->type=$request->type;
        $attachable->created_by=$request->created_by;
        $attachable->updated_by=$request->updated_by;
        $attachable->save();

        return redirect()->route('attachable:index')->with('message', 'Attachment updated succesfully');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attachable $attachable)
    {
        //to delete
        $attachable->delete();

        return redirect()->route('attachable:index')->with('message', 'Attachment deleted');
    }
}

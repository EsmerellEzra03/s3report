<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assigns=assign::all();
        return view('assign.index',compact('assigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assign.assign');
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
        $assign = new Assign;
        $assign->user_id=Auth::id();
        $assign->contractor_id=$request->contractor_id;
        $assign->scope_id=$request->scope_id;
        $assign->created_by=$request->created_by;
        $assign->updated_by=$request->updated_by;
        $assign->save();

        return redirect()->route('assign:index')->with('message', 'Assign added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Assign $assign)
    {
        //create editform
        return view('assign.show', compact ('assign'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Assign $assign)
    {
        //update
        $assign->contractor_id=$request->contractor_id;
        $assign->scope_id=$request->scope_id;
        $assign->created_by=$request->created_by;
        $assign->updated_by=$request->updated_by;
        $assign->save();

        return redirect()->route('assign:index')->with('message', 'Assign updated succesfully');
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
    public function destroy(Assign $assign)
    {
        //to delete
        $assign->delete();

        return redirect()->route('assign:index')->with('message', 'Assign deleted');
    }
}

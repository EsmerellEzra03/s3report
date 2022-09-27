<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contractors=contractor::all();
        return view('contractor.index',compact('contractors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contractor.contractor');
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
        $contractor = new Contractor;
        //$role->user_id=Auth::id();
        $contractor->user_id=$request->user_id;
        $contractor->state_id=$request->state_id;
        $contractor->name=$request->name;
        $contractor->email=$request->email;
        $contractor->address=$request->address;
        $contractor->postcode=$request->postcode;
        $contractor->password=$request->password;
        $contractor->created_by=$request->created_by;
        $contractor->updated_by=$request->updated_by;
        $contractor->save();

        return redirect()->route('contractor:index')->with('message', 'Contractor added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contractor $contractor)
    {
        //create editform
        return view('contractor.show', compact ('contractor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Contractor $contractor)
    {
        //update
        $contractor->user_id=$request->user_id;
        $contractor->state_id=$request->state_id;
        $contractor->name=$request->name;
        $contractor->email=$request->email;
        $contractor->address=$request->address;
        $contractor->postcode=$request->postcode;
        $contractor->password=$request->password;
        $contractor->created_by=$request->created_by;
        $contractor->updated_by=$request->updated_by;
        $contractor->save();

        return redirect()->route('contractor:index')->with('message', 'Contractor updated succesfully');
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
    public function destroy(Contractor $contractor)
    {
        //to delete
        $contractor->delete();

        return redirect()->route('contractor:index')->with('message', 'Contractor deleted');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoqSchedulingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boqschedules=boqschedule::all();
        return view('boqschedule.index',compact('boqschedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boqschedule.boqschedule');
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
        $boqschedule = new Boqschedule;
        $boqschedule->user_id=Auth::id();
        $boqschedule->boq_id=$request->boq_id;
        $boqschedule->scheduling_id=$request->scheduling_id;
        $boqschedule->quantity=$request->quantity;
        $boqschedule->completed=$request->completed;
        $boqschedule->percentage=$request->percentage;
        $boqschedule->created_by=$request->created_by;
        $boqschedule->updated_by=$request->updated_by;
        $boqschedule->save();

        return redirect()->route('boqschedule:index')->with('message', 'Schedule added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Boqschedule $boqschedule)
    {
        //create editform
        return view('boqschedule.show', compact ('boqschedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Boqschedule $boqschedule)
    {
        //update
        $boqschedule->boq_id=$request->boq_id;
        $boqschedule->scheduling_id=$request->scheduling_id;
        $boqschedule->quantity=$request->quantity;
        $boqschedule->completed=$request->completed;
        $boqschedule->percentage=$request->percentage;
        $boqschedule->created_by=$request->created_by;
        $boqschedule->updated_by=$request->updated_by;
        $boqschedule->save();

        return redirect()->route('boqschedule:index')->with('message', 'Schedule updated succesfully');
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
    public function destroy(Boqschedule $boqschedule)
    {
        //to delete
        $boqschedule->delete();

        return redirect()->route('boqschedule:index')->with('message', 'Schedule deleted');
    }
}

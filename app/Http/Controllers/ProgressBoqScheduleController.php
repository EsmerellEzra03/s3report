<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgressBoqScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $progressboqschedules=progressboqschedule::all();
        return view('progressboqschedule.index',compact('progressboqschedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('progressboqschedule.progressboqschedule');
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
        $progressboqschedule = new Progressboqschedule;
        $progressboqschedule->user_id=Auth::id();
        $progressboqschedule->progress_id=$request->progress_id;
        $progressboqschedule->boqscheduling_id=$request->boqscheduling_id;
        $progressboqschedule->quantity=$request->quantity;
        $progressboqschedule->percent=$request->percent;
        $progressboqschedule->created_by=$request->created_by;
        $progressboqschedule->updated_by=$request->updated_by;
        $progressboqschedule->save();

        return redirect()->route('progressboqschedule:index')->with('message', 'Schedule added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Progressboqschedule $progressboqschedule)
    {
        //create editform
        return view('progressboqschedule.show', compact ('progressboqschedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Progressboqschedule $progressboqschedule)
    {
        //update
        $progressboqschedule->progress_id=$request->progress_id;
        $progressboqschedule->boqscheduling_id=$request->boqscheduling_id;
        $progressboqschedule->quantity=$request->quantity;
        $progressboqschedule->percent=$request->percent;
        $progressboqschedule->created_by=$request->created_by;
        $progressboqschedule->updated_by=$request->updated_by;
        $progressboqschedule->save();

        return redirect()->route('progressboqschedule:index')->with('message', 'Schedule updated succesfully');
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
    public function destroy(Progressboqschedule $progressboqschedule)
    {
        //to delete
        $progressboqschedule->delete();

        return redirect()->route('progressboqschedule:index')->with('message', 'Schedule deleted');
    }
}

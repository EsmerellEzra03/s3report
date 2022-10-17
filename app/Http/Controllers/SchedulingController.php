<?php

namespace App\Http\Controllers;

use App\Models\Assign;
use App\Models\Scheduling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchedulingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $schedules=Scheduling::all();
        return view('schedule.index1',compact('schedules'));
    }

    public function index(Assign $assign)
    {
        // $scopes=Scope::all();
        // $schedule = Assign::find($assign)->first()->schedule->first();
        $schedule = Assign::find($assign)->first();
        return view('schedule.index',compact('schedule'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedule.scheduling');
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
        $schedule = new Scheduling;
        // $schedule->user_id=Auth::id();
        $schedule->assign_id=$request->assign_id;
        $schedule->boq_id=$request->boq_id;
        $schedule->start_date=$request->start_date;
        $schedule->end_date=$request->end_date;
        $schedule->created_by=$request->created_by;
        $schedule->updated_by=$request->updated_by;
        $schedule->save();

        return redirect()->route('schedule:index')->with('message', 'Schedule added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Scheduling $schedule)
    {
        //create editform
        return view('schedule.show', compact ('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Scheduling $schedule)
    {
        //update
        $schedule->assign_id=$request->assign_id;
        $schedule->boq_id=$request->boq_id;
        $schedule->start_date=$request->start_date;
        $schedule->end_date=$request->end_date;
        $schedule->created_by=$request->created_by;
        $schedule->updated_by=$request->updated_by;
        $schedule->save();

        return redirect()->route('schedule:index')->with('message', 'Schedule updated succesfully');
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
    public function destroy(Scheduling $schedule)
    {
        //to delete
        $schedule->delete();

        return redirect()->route('schedule:index')->with('message', 'Schedule deleted');
    }
}

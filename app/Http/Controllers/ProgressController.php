<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use App\Models\Scheduling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $progresses=Progress::all();
        return view('progress.index1',compact('progresses'));
    }

    public function index(Scheduling $schedule)
    {
        // $scopes=Scope::all();
        // $progress = Scheduling::find($schedule)->first()->progress->first();
        $progress = Scheduling::find($schedule)->first();
        return view('progress.index',compact('progress'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('progress.progress');
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
        $progress = new Progress;
        //$progress->user_id=Auth::id();
        $progress->schedule_id=$request->schedule_id;
        $progress->name=$request->name;
        $progress->remark=$request->remark;
        $progress->date=$request->date;
        $progress->created_by=$request->created_by;
        $progress->updated_by=$request->updated_by;
        $progress->save();

        return redirect()->route('progress:index')->with('message', 'Progress added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Progress $progress)
    {
        //create editform
        return view('progress.show', compact ('progress'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Progress $progress)
    {
        //update
        $progress->schedule_id=$request->schedule_id;
        $progress->name=$request->name;
        $progress->remark=$request->remark;
        $progress->date=$request->date;
        $progress->created_by=$request->created_by;
        $progress->updated_by=$request->updated_by;
        $progress->save();

        return redirect()->route('progress:index')->with('message', 'Progress updated succesfully');
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
    public function destroy(Progress $progress)
    {
        //to delete
        $progress->delete();

        return redirect()->route('progress:index')->with('message', 'Progress deleted');
    }
}

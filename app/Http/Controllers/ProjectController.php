<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::all();
        return view('project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.project');
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
        $project = new Project;
        //$project->user_id=Auth::id();
        $project->pic_id=$request->pic_id;
        $project->name=$request->name;
        $project->start_date=$request->start_date;
        $project->end_date=$request->end_date;
        $project->created_by=$request->created_by;
        $project->updated_by=$request->updated_by;
        $project->save();

        return redirect()->route('project:index')->with('message', 'Project added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //create editform
        return view('project.show', compact ('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Project $project)
    {
        //update
        $project->pic_id=$request->pic_id;
        $project->name=$request->name;
        $project->start_date=$request->start_date;
        $project->end_date=$request->end_date;
        $project->created_by=$request->created_by;
        $project->updated_by=$request->updated_by;
        $project->save();

        return redirect()->route('project:index')->with('message', 'Project updated succesfully');
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
    public function destroy(Project $project)
    {
        //to delete
        $project->delete();

        return redirect()->route('project:index')->with('message', 'Project deleted');
    }

}

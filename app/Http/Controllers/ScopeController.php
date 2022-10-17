<?php

namespace App\Http\Controllers;

use App\Models\Scope;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScopeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index1()
    {
        $scopes=Scope::all();
        return view('scope.index1',compact('scopes'));
    }

    public function index(Project $project)
    {
        // $scopes=Scope::all();
        $scope = Project::find($project)->first()->scope->first();
        return view('scope.index',compact('scope'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scope.scope');
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
        $scope = new Scope;
        //$scope->project_id=Auth::id();
        //$scope->project_id=$request->project_id;
        $scope->name=$request->name;
        $scope->description=$request->description;
        $scope->created_by=$request->created_by;
        $scope->updated_by=$request->updated_by; 
        $scope->save();

        return redirect()->route('scope:index1')->with('message', 'Scope added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Scope $scope)
    {
        //create editform
        return view('scope.show', compact ('scope'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Scope $scope)
    {
        //update
        $scope->project_id=$request->project_id;
        $scope->name=$request->name;
        $scope->description=$request->description;
        $scope->created_by=$request->created_by;
        $scope->updated_by=$request->updated_by;
        $scope->save();

        return redirect()->route('scope:index')->with('message', 'Scope updated succesfully');
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
    public function destroy(Scope $scope)
    {
        //to delete
        $scope->delete();

        return redirect()->route('scope:index')->with('message', 'Scope deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Boq;
use App\Models\Scope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $boqs=Boq::all();
        return view('boq.index1',compact('boqs'));
    }

    public function index(Scope $scope)
    {
        // $scopes=Scope::all();
        $boq = Scope::find($scope)->first()->boq->first();
        return view('boq.index',compact('boq'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boq.boq');
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
        $boq = new Boq;
        // $boq->user_id=Auth::id();
        // $boq->scope_id=$request->scope_id;
        $boq->name=$request->name;
        $boq->quantity=$request->quantity;
        $boq->created_by=$request->created_by;
        $boq->updated_by=$request->updated_by;
        $boq->save();

        return redirect()->route('boq:index')->with('message', 'Schedule added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Boq $boq)
    {
        //create editform
        return view('boq.show', compact ('boq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Boq $boq)
    {
        //update
        // $boq->scope_id=$request->scope_id;
        $boq->name=$request->name;
        $boq->quantity=$request->quantity;
        $boq->created_by=$request->created_by;
        $boq->updated_by=$request->updated_by;
        $boq->save();

        return redirect()->route('boq:index')->with('message', 'Schedule updated succesfully');
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
    public function destroy(Boq $boq)
    {
        //to delete
        $boq->delete();

        return redirect()->route('boq:index')->with('message', 'Schedule deleted');
    }
}

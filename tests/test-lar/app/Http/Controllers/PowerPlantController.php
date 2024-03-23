<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PowerPlant;
use Illuminate\Http\Request;

class PowerPlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('powerPlants.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function fetch() 
    {
        return response()->json(PowerPlant::with('postcode')->get());
    }
    public function selective(Request $request) 
    {
        // redirect back if no powerplants are selected
        // with a status
        if($request->powerplants == null) {
            return redirect()->back()->with('status','Please select a powerplant');
        }
        $powerplants = Powerplant::wherein('id',$request->powerplants)->get();

        return view('powerPlants.selective',['powerplants'=>$powerplants]);
    }
}

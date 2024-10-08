<?php

namespace App\Http\Controllers;

use App\Models\AssuranceIndividuelleAccidents;
use Illuminate\Http\Request;

class AssuranceIndividuelleAccidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assurances = AssuranceIndividuelleAccidents::all();
        return response()->json($assurances);

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
        $assurance = AssuranceIndividuelleAccidents::create($request->all());
        return response()->json($assurance, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $assurance = AssuranceIndividuelleAccidents::findOrFail($id);
        return response()->json($assurance);
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

/* 
    public function update(Request $request, string $id)
    {
        $assurance = AssuranceIndividuelleAccidents::findOrFail($id);
        $assurance->update($request->all());
        return response()->json($assurance);
    } */
    public function update(Request $request, string $id)
    {
        $assurances = AssuranceIndividuelleAccidents::findOrFail($id);
        $assurances->update($request->only('date_fin_couvert'));
        return response()->json($assurances); 
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AssuranceIndividuelleAccidents::destroy($id);
        return response()->json(null, 204);
    }
}

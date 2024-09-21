<?php

namespace App\Http\Controllers;

use App\Models\AssuranceAuto;
use Illuminate\Http\Request;

class AssuranceAutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assurances = AssuranceAuto::all();
        return response()-> json($assurances);
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
        $assurances = AssuranceAuto::create($request->all());
        return response()->json($assurances,201) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $assurances = AssuranceAuto::findOrFail($id);
        return response()-> json($assurances);
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
        $assurances = AssuranceAuto::findOrFail($id);
        $assurances->update($request->all());
        return response()->json($assurances); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AssuranceAuto::destroy($id);
        return response()->json(null,204);
    }
}

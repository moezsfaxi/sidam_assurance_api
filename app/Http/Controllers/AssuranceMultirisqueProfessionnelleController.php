<?php

namespace App\Http\Controllers;

use App\Models\AssuranceMultirisqueProfessionnelle;
use Illuminate\Http\Request;

class AssuranceMultirisqueProfessionnelleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assurances = AssuranceMultirisqueProfessionnelle::all();
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
        $assurance = AssuranceMultirisqueProfessionnelle::create($request->all());
        return response()->json($assurance, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $assurance = AssuranceMultirisqueProfessionnelle::findOrFail($id);
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
    public function update(Request $request, string $id)
    {
        $assurance = AssuranceMultirisqueProfessionnelle::findOrFail($id);
        $assurance->update($request->all());
        return response()->json($assurance);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AssuranceMultirisqueProfessionnelle::destroy($id);
        return response()->json(null, 204);
    }
}

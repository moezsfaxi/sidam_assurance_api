<?php

namespace App\Http\Controllers;

use App\Models\AssuranceSante;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AssuranceSanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assurances = AssuranceSante::all();
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
        $assurance = AssuranceSante::create($request->all());
        return response()->json($assurance, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $assurance = AssuranceSante::findOrFail($id);
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

        
        // $assurances = AssuranceSante::findOrFail($id);
        // $assurances->update($request->only('date_fin_couvert'));
        // return response()->json($assurances); 
        // Validate the incoming request
    // $request->validate([
    //     'date_fin_couvert' => 'required|in:3 mois,6 mois,1 ans,2 ans',
    // ]);

    // Find the AssuranceAuto record by ID
    $assuranceAuto = AssuranceSante::findOrFail($id);

    // Get the current date from the date_fin_couvert field
    $currentDate = Carbon::parse($assuranceAuto->date_fin_couvert);

    // Update the date based on the request value
    switch ($request->date_fin_couvert) {
        case '3 mois':
            $newDate = $currentDate->addMonths(3);
            break;
        case '6 mois':
            $newDate = $currentDate->addMonths(6);
            break;
        case '1 ans':
            $newDate = $currentDate->addYear();
            break;
        case '2 ans':
            $newDate = $currentDate->addYears(2);
            break;
        default:
            dd($request->date_fin_couvert);
            return response()->json(['message' => 'Invalid value'], 201);
    }

    // Update the date_fin_couvert field
    $assuranceAuto->date_fin_couvert = $newDate;
    $assuranceAuto->save();

    return response()->json(['message' => 'Date updated successfully', 'date_fin_couvert' => $assuranceAuto->date_fin_couvert],200);
    }

   /*  public function update(Request $request, string $id)
    {
        $assurance = AssuranceSante::findOrFail($id);
        $assurance->update($request->all());
        return response()->json($assurance);
    } */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AssuranceSante::destroy($id);
        return response()->json(null, 204);
    }
}
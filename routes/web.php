<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 
use App\Models\Users;
use App\Models\AssuranceSante;
use Illuminate\Support\Facades\Hash; // Import Hash facade for password comparison

Route::get('/homes', function () {
    //DB::enableQueryLog();
    $users = Users::all();
    //dd(DB::getQueryLog());
    return [$users];
});

Route::get('/signin', function (Request $request) {
    
    $email = $request->input('email');
    $password = $request->input('password');

    // Find user by email
    $user = Users::where('mail', $email)->first()->get();
    if($user){
        return response()->json([
            'message' => 'Login successful!',
            'email' => $email
        ], 200); 
    }
    else{
        return response()->json([
            'message' => 'Login unsuccessful!',
            'email' => $email
        ], 404);
    }

});




Route::get("/home",function(){

return "it works this time";

});


Route::post('/logintest', function (Request $request) {
    // Validate the incoming request data
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Check if the user exists
    $user = Users::where('mail', $request->email)->first();

    // Check if user exists and password matches
    if ($user && Hash::check($request->password, $user->password)) {
        return response()->json([
            'message' => 'Login successful!',
            'user' => $user
        ], 200);
    } else {
        return response()->json([
            'message' => 'Invalid email or password.'
        ], 401);
    }
});


Route::get('/working',function(Request $request){
    
    $user = Users::all();
    return "[$user]";



});

Route::get('/sante', function (Request $request)   {
    // $request->validate([
    //     'email' => 'required|email',
    //     'adresse' => 'required|string',
    //     'nom_prenom' => 'required|string',
    //     'nom_du_beneficiaire' => 'required|string',
    //     'telephone' => 'required|string',
    //     'whatsapp' => 'required|string',
    //     'numero_de_securite_sociale' => 'required|string',
    //     'type_de_client' => 'required|string',
    //     'type_de_couverture' => 'required|string',
    //     'date_de_naissance' => 'nullable|date',
    // ]);

    $assuranceSante = AssuranceSante::create([
        'email' => $request->input('email'),
        'adresse' => $request->input('adresse'),
        'prenom' => $request->input('nomPrenom'),
        'nom_beneficiaire' => $request->input('nomDuBeneficiaire'),
        'tel' => $request->input('telephone'),
        'wtsp' => $request->input('whatsapp'),
        'num_securite_social' => $request->input('numeroDeSecuriteSociale'),
        'type_client' => $request->input('typeDeClient'),
        'type_couvert' => $request->input('typeDeCouverture'),
        'date_naissance' => $request->input('dateDeNaissance'),
    ]);

    return response()->json(['message' => 'Data saved successfully!',
     'data' => "done" ], 200);
});


Route::get('/santetwo', function (Request $request) {
    // Uncomment and use validation if needed
    // $request->validate([
    //     'email' => 'required|email',
    //     'adresse' => 'required|string',
    //     'nomPrenom' => 'required|string',
    //     'nomDuBeneficiaire' => 'required|string',
    //     'telephone' => 'required|string',
    //     'whatsapp' => 'required|string',
    //     'numeroDeSecuriteSociale' => 'required|string',
    //     'typeDeClient' => 'required|string',
    //     'typeDeCouverture' => 'required|string',
    //     'dateDeNaissance' => 'nullable|date',
    // ]);

    $assuranceSante = AssuranceSante::create([
        'email' => $request->query('email'),
        'adresse' => $request->query('adresse'),
        'prenom' => $request->query('nomPrenom'),
        'nom_beneficiaire' => $request->query('nomDuBeneficiaire'),
        'tel' => $request->query('telephone'),
        'wtsp' => $request->query('whatsapp'),
        'num_securite_social' => $request->query('numeroDeSecuriteSociale'),
        'type_client' => $request->query('typeDeClient'),
        'type_couvert' => $request->query('typeDeCouverture'),
        'date_naissance' => $request->query('dateDeNaissance'),
    ]);

    return response()->json([
        'message' => 'Data saved successfully!',
        'data' => "done"
    ], 200);
});
/////
////



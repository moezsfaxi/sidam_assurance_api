<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assurances = Users::all();
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
    
    
    //validate user
    
    {
        $validated = $request->validate([
            'mail' => 'required|string',
            'password' => 'required|string',
        ]);
        
        // Extract the name and password from the request
        $name = $validated['mail'];
        $password = $validated['password'];
        
        // Find the user by name
        //$user = Users::where('name', $name)->first();
        // find the user by email
        $user = Users::where('mail', $name)->first();
        
        if (!$user) {
            return response()->json(['message' => "User doesn't exist"], 200);
        }
        
        // Verify the password (assuming passwords are hashed)
        if (!Hash::check($password, $user->password)) {
            return response()->json(['message' => 'The password is wrong'], 200);
        }
        
        // If user exists and password is correct
        return response()->json(['message' => 'Login success'], 200);
    }
    // create user
    
     // {
     //     // Validate the request
     //     $validated = $request->validate([
     //         'name' => 'required|string|unique:users',  // Ensure name is unique in the users table
     //         'password' => 'required|string|min:6',     // Set minimum password length
     //     ]);
     
     //     // Hash the password
     //     $validated['password'] = Hash::make($validated['password']);  // or bcrypt($validated['password'])
     
     //     // Create the user with the hashed password
     //     $user = Users::create($validated);
     
     //     // Return a success response
     //     return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
     // }
    
    
    // default code
    // {
        //     $assurance = Users::create($request->all());
        //     return response()->json($assurance, 201);
        // }
        
        /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $assurance = Users::findOrFail($id);
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
        $assurance = Users::findOrFail($id);
        $assurance->update($request->all());
        return response()->json($assurance);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Users::destroy($id);
        return response()->json(null, 204);
    }
    
    
    public function specificColumns($email)
    {
    $user = Users::select('name', 'mail','') // specify the columns you want
                ->where('mail', $email)
                ->first();

    if ($user) {
        return response()->json($user, 200);
    } else {
        return response()->json(['message' => 'User not found'], 404);
    }
    }

}
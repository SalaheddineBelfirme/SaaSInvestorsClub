<?php

namespace App\Http\Controllers;

use App\Models\StartupUser;
use Illuminate\Http\Request;

class StartupUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
       // Validate the request data
       $validatedData = $request->validate([
        'startup_id' => 'required|exists:startups,id',
        'user_id' => 'required|exists:users,id',
 
    ]);

    // Create a new startup_user record
    $startupUser = StartupUser::create($validatedData);

    return response()->json(['message' => 'successfully', 'data' => $startupUser]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(StartupUser $startupUser)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StartupUser $startupUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StartupUser $startupUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StartupUser $startupUser)
    {
        //
    }

    
}

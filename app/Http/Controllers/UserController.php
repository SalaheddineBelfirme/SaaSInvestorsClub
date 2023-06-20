<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * \
     */

     public function __construct()
     {
         $this->middleware(function ($request, $next) {
 
            $user = Auth::user();
 
            return $next($request);
         });
     }
 
    public function index()
    {
    
        
        $users=User::where('role','!=','2')->paginate(4);


        return response()->json(['status'=>'200','data'=>$users],200);
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->image = $request->image;

        $user->save();

        return response()->json(['message'=>'User information updated successfully','data'=>$user]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function Premium(string $id)
    {
        $user = User::find($id);
        $user->role = '1';
        $user->save();
    
        $message = 'Congratulations! You are now a premium member. Enjoy all the exclusive benefits and features.';
        return response()->json(['message' => $message]);
    }
    
}

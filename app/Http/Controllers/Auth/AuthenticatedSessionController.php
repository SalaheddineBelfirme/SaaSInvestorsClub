<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

         $user = User::where('email',$request->email)->first();
         $authToken = $user->createToken('auth-token')->plainTextToken; 
         $request->session()->regenerate();
        return response()->json([
        'message' => 'Login successful',
        'accessToken'=> $authToken ,
        'data' =>$request->user(),201]);
    }
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->json(['message'=>"You have been logged out successfully"]);
    }
}

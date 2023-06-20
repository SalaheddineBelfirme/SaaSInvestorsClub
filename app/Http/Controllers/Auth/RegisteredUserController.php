<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\JsonResponse;


class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request):  JsonResponse
    {
      
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone_number'=>['required','string'],
            'CIN' => ['required', 'string'],
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number'=> $request->phone_number,
            'CIN'=> $request->CIN 
             
        ]);
        $user = User::where('email',$request->email)->first();
        $authToken = $user->createToken('auth-token')->plainTextToken; 

        event(new Registered($user));

        Auth::login($user);

        return response()->json([
            'message' => 'Login successful',
            'accessToken'=> $authToken ,
            'data' =>$request->user(),201]);
        }
}

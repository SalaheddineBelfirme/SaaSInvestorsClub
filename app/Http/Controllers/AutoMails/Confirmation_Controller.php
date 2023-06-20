<?php

namespace App\Http\Controllers\AutoMails;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmailConfirmation;
use App\Mail\WeeklyEmail;

use App\Models\User;
use App\Models\Startup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class Confirmation_Controller extends Controller
{

    public function sendEmail(Request $request)
    {
        $userEmail = $request->input('email');
         Mail::to($userEmail)->send(new EmailConfirmation());
       return response()->json(['message' => 'Email sent successfully']); 

    }

    public function handle(Request $request)
    {
        $usersmail=User::pluck('email');
        $lastThreeStartups = Startup::latest()->take(3)->get();
        $lastStartups = Startup::find($request->id);
        $data=['lastThreeStartups'=>$lastStartups,'lastStartups'=>$lastStartups];
         return response()->json($lastThreeStartups);
        foreach($usersmail as $usermail){
            Mail::to($usermail)->send(new WeeklyEmail($lastThreeStartups));
         }
    }

    //

}

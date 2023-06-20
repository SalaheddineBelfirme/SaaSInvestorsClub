<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\Message_notification_Email;
use Illuminate\Support\Facades\Mail;

class Message_notification_Controller extends Controller
{
    
    public function sendEmail(Request $request)
    {
        $userEmail = $request->input('email');
         Mail::to($userEmail)->send(new Message_notification_Email());
       return response()->json(['message' => 'Email sent successfully']);
       
    }

}

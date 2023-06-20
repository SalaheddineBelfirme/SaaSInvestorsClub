<?php

namespace App\Http\Controllers\AutoMails;
use Illuminate\Support\Facades\Mail;
use App\Mail\Offer_notification_Email;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Offer_notificationController extends Controller
{
    public function sendEmail(Request $request)
    {
    
        $userEmail = $request->input('email');
         Mail::to($userEmail)->send(new Offer_notification_Email());
       return response()->json(['message' => 'Email sent successfully']);
       
    }
}

<?php



namespace App\Http\Controllers\AutoMails;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

use App\Mail\Message_notification_Email;
use Illuminate\Http\Request;

class EmailNotifyController extends Controller
{
    public function sendEmail(Request $request)
    {
        
        $userEmail = 'salahazarag17@gmail.com';
         Mail::to($userEmail)->send(new Message_notification_Email());
       return response()->json(['message' => 'Email sent successfully']);
    }
}

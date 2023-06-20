<?php



namespace App\Http\Controllers\AutoMails;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

use App\Mail\Message_notification_Email;
use Illuminate\Http\Request;

class Message_NotificationController extends Controller
{
    public function sendEmail(Request $request)
    {
        
        $userEmail = $request->input('email');
         Mail::to($userEmail)->send(new Message_notification_Email());
       return response()->json(['message' => 'Email sent successfully']);
    }
}

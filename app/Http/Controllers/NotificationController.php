<?php

namespace App\Http\Controllers;

use App\Http\Resources\NotifyResource;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
     
        $notifications = Notification::with('user')->get();

       return   NotifyResource::collection($notifications) ;
    }

    public function store(Request $request) :void
    {
      
    $notify = new Notification();
    $notify->Notification = $request->Notification;
    $notify->user_id = $request->user_id;
     
     $notify->save();
    }

    public function NotifCount(){

        $count = Notification::count();
        
        return response($count);
    }

    public function destroy($id){

        $notify = Notification::findOrFail($id);

        $notify->delete();

        return response()->json(['message','Successfully']);
    }
}

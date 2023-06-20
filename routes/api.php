<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\AutoMails\Confirmation_Controller;
use App\Http\Controllers\AutoMails\EmailNotifyController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StartupController;
use App\Http\Controllers\StartupUserController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/userr', function (Request $request) {
    return $request->user();
});
 // router of add StartUp
    Route::post('/AddStartUp',[StartupController::class,'store']);
// router of update satatus of startUp
    Route::post('/updateStartUp',[StartupController::class,'update']);
 // router of update of startUp
    Route::post('/updatestatu/{id}',[StartupController::class,'Update_statu']);
// 
    Route::get('/startup_for_card',[StartupController::class,'getStartup_for_card']);

    Route::get('/startups',[StartupController::class,'index']);
    // Delete Startup
    Route::post('/startup/{id}', [StartupController::class, 'destroy']);
    // Show One Startup
    Route::post('/Show/{id}',[StartupController::class,'show']);


//get all users
    Route::get('/Users', [UserController::class, 'index']);
    Route::post('/userupdate/{id}',[UserController::class,'update']);
    Route::post('/premuim/{id}',[UserController::class,'Premium']);


// Get Categories
    Route::get('/getCategories',[CategoryController::class,'index']);
// Create Notification
   Route::post('/createNotify',[NotificationController::class,'store']);
//   Get Notifiaction
   Route::get('/getNotifications',[NotificationController::class,'index']);
// Get Notification Count
   Route::get('/getCount',[NotificationController::class,'NotifCount']);
// Delete Notification 
   Route::post('/deleteNotify/{id}',[NotificationController::class,'destroy']);
// Send Notification Email
   Route::post('/SendNotifyEmail',[EmailNotifyController::class,'sendEmail']);





//rout for add  row in tbale visitors
    Route::post('/Addvisite',[StartupUserController::class,'store']);

    Route::post('/sendEmail',[Confirmation_Controller::class,'sendEmail']);

    Route::post('/test',[Confirmation_Controller::class,'handle']);

    Route::post('/transaction_details',[PaymentController::class,'transaction_details']);



    Route::get('/switch/{id}', [StartupController::class, 'switch']);



    Route::post('/createtransaction', [PaymentController::class, 'createtransaction']);



    Route::middleware(['auth:sanctum'])->group(function (){


    });


    
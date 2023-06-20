<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailConfirmation;
use App\Mail\WeeklyEmail;
use App\Models\Startup;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Console\Command;
use App\Http\Controllers\StartupController;

class SendWeeklyEmail extends Command

{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-weekly-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command dane send email ';

    /**
     * Execute the console command.
     */

     
    public function handle()
    {
        $users = User::where('is_buyer', 1)->get();
        $lastThreeStartups = Startup::latest()->take(3)->get();
        $markstartup=StartupController::getMarkStartup();
        $data=[
            'lastThreeStartups'=>$lastThreeStartups,
            'markstartup'=>$markstartup,
            'name'=>'name'
        ];

        foreach($users as $user){
            $data['name']=$user->name;
            Mail::to($user->email)->send(new WeeklyEmail($data));
         }
         StartupController::switchMark($markstartup->id); 
         
    }



}

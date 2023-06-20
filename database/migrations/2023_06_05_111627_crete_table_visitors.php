<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('startup_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('startup_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('visited_at')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('startup_id')->references('id')->on('startups')->onUpdate('cascade')->onDelete('cascade');

            // Add any additional columns or indexes if needed 
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('startup_users');
    }
};


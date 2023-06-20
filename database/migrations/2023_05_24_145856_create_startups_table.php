<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('startups', function (Blueprint $table) {
            $table->id();
            //Tell about startup
            $table->string('name');
            $table->string('website');
            $table->string('email')->unique();
            $table->text('Startup_Description_Short')->nullable();
            $table->string('location')->nullable();
           //Startup Overview
            $table->text('Overview_desc')->nullable(); //brief story of your startup
            $table->integer('NB_customers')->nullable();
            $table->string('date_launch');
            $table->text('Businessmodel_pricing')->nullable();
            //Startup Overview (contd.)
            $table->string('Competitors')->nullable();
            $table->string('target_customer')->nullable();
            $table->string('assets')->nullable();
            $table->string('Tech_Stack')->nullable();
            //Financial Details
            $table->decimal('ARR', 10, 2);
            $table->string('Expenses')->nullable();
            $table->decimal('price', 10, 2);
            //Metrics
            $table->text('Traffic_Metrics')->nullable();
            $table->text('Revenue_Metrics')->nullable();
            $table->text('Traffic_Metrics_blur')->nullable();
            $table->text('Revenue_Metrics_blur')->nullable();
            //How It Works
            $table->text('Video')->nullable();
            $table->integer('status')->default('0');
            $table->unsignedBigInteger('user_id');
          
            $table->foreign('user_id') // Define foreign key
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->foreign('categorie_id') ->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('mark')->default('0');
            $table->timestamps();

        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('startups');
    }
    
    
};

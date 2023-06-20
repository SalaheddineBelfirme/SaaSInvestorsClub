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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->min(4); 
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->min(8);
            $table->tinyInteger('role')->default(0);
            $table->tinyInteger('is_seller')->default(0);
            $table->tinyInteger('is_buyer')->default(0);
            $table->string('CIN')->min(4);
            $table->string('image')->default('https://res.cloudinary.com/dli4titxf/image/upload/v1681827872/salles/585e4bf3cb11b227491c339a.png');
            $table->string('phone_number')->min(10); 
            $table->rememberToken();
            $table->timestamps();

            

        });
    }

    /**                                                         
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

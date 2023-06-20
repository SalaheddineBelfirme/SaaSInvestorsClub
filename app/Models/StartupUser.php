<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StartupUser extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'startup_id'
    ];
}

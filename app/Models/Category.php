<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function startups()
    {
        return $this->hasOne(Startup::class,'categorie_id','id');
    }
  
}

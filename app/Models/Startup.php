<?php

namespace App\Models;
use App\Models\Category;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Startup extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'name',
        'email',
        'website',
        'Startup_Description_Short',
        'location',
        'Overview_desc',
        'NB_customers',
        'date_launch',
        'Businessmodel_pricing',
        'Competitors',
        'target_customer',
        'assets',
        'Tech_Stack',
        'ARR',
        'Expenses',
        'user_id',
        'categorie_id',
        'price',
        'Video',
        'Revenue_Metrics',
        'Traffic_Metrics',
        'Revenue_Metrics_blur',
        'Traffic_Metrics_blur',
        'created_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'categorie_id','id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}

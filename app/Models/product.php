<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class product extends Model
{
   
    use HasFactory;
    protected $fillable = [
        
        'product_name',
        'price',
        'user_id',
        'category',
        'title',
        'discount',
        'discription',
        'delivery_fee',
        'photo',
        'views',
        'created_at',
        
    ];


    public function review(): HasMany
    {
        return $this->hasMany(reviews::class,'product_id','id');
    }
    
}

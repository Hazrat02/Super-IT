<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

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

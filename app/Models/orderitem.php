<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\cardordercontroller;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\product;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Relations\HasOne;
class orderitem extends Model
{
   
    use HasFactory;
    protected $fillable = [
        
        'product_id',
        'customer_id',
        'size',
        'quantity',
        'subtotal',
        'order_id',
        'vandor_id',
     
        
    ];

    public function order(): HasOne
{
    return $this->hasOne(order::class,'id','order_id');
}

}
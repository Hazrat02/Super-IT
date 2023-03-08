<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        
        
        'customar_id',
      
       
        
        'total_price',
        'status',
        'customar_number',
        'customar_email',
        'customar_name',
        'customar_country',
        'customar_streat',
        'customar_district',
        'customar_upozila',
        'customar_village',
        'transaction_id',
        'currency',
        'zip',
     
        
    ];

//     public function order(): HasOne
// {
//     return $this->hasOne(order::class,'id','order_id');
// }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'created_at',
     
        
    ];

  public function orderitem(): HasMany
{
    return $this->hasMany(orderitem::class,'order_id','id');
}

}

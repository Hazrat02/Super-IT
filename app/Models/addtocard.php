<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\product;

use Illuminate\Database\Eloquent\Relations\HasOne;
class addtocard extends Model
{
   
    use HasFactory;
    protected $fillable = [
        
        'product_id',
        'customar_id',
        'size',
        'quantity',
        'total_price',
     
        
    ];

    public function product(): HasOne
{
    return $this->hasOne(product::class,'id','product_id');
}

}
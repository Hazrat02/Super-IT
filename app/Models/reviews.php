<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'product_id',
        'email',
        'user_id',
        'name',
        'comment',
        'reting',
    
        
    ];
}

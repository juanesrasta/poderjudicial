<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'quantity',
        'price',
        'tax',
        'product_imagen',
    ];
}

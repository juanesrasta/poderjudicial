<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id',
    ];

    public function shops(){
        return $this->belongsToMany(Shop::class)->withPivot('quantity');
    }

    public function use(){
        return $this->belongsTo(User::class);
    }
}

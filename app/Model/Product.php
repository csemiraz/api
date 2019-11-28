<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'user_id', 'name', 'detail', 'price', 'stock', 'discount',
    ];
}

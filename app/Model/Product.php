<?php

namespace App\Model;

use App\Model\Review;
use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'user_id', 'name', 'detail', 'price', 'stock', 'discount',
    ];

    public function reviews()
    {
    	return $this->hasMany(Review::class);
    }
}

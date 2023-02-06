<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function order(){
        return $this->belongsToMany(Order::class);
    }
    public function category(){
        return $this->belongsToMany(Category::class);
    }
    public function prodshoppingcart(){
        return $this->belongsToMany(Shoppingcart::class);
    }

    public function discount(){
        return $this->belongsTo(Discount::class);
    }
}

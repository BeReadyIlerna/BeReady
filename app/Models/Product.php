<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    public function order(){
        return $this->belongsToMany(Order::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function prodshoppingcart(){
        return $this->belongsToMany(Shoppingcart::class);
    }
    
   
}

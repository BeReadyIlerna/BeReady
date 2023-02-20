<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoppingcart extends Model
{
    public function user(){
        return $this->hasOne(User::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class)->withTimestamps()->withPivot('quantity');
    }
}

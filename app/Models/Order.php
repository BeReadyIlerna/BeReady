<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->hasMany(User::class);
    }

    public function product(){
        return $this->belongsToMany(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function address(){
        return $this->hasMany(Address::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}

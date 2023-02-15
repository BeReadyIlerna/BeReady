<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{

    use HasFactory;

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function prodshoppingcart()
    {
        return $this->belongsToMany(Shoppingcart::class);
    }

    //* DEFAULT
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'stock',
        'description',
        'image',
        'iva',
        'total',
        'category_id'
    ];
}

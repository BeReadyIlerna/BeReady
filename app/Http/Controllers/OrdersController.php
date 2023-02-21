<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shoppingcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function saveOrder(){

        $cart = Shoppingcart::where('user_id', Auth::id())->get();
        $products = $cart->products;
        $order = $cart->replicate();
        $order->setTable('orders');
        $order->save();
        foreach ($products as $product) {
            $order->products()->attach($product->id, ['quantity' => $product->pivot->quantity]);
        }
        $cart->products()->delete();
        $cart->delete();

        return view('/');
    }
}

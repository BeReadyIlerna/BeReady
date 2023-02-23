<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shoppingcart;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function makeOrder(){

        $cart = Shoppingcart::where('user_id', Auth::id())->first();
        $products = $cart->products;
        $order = new Order;
        $order->total = $cart->total;
        $order->user_id = Auth::id();
        $order->setTable('orders');
        $order->save();

        foreach ($products as $product) {
            $order->products()->attach($product->id, ['quantity' => $product->pivot->quantity]);
        }

        $cart->products()->detach();
        $cart->total = 0;
        $cart->update();

        $pController = new ProductsController;

        return $pController->products();
    }
}

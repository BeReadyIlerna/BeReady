<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shoppingcart;
use App\Http\Controllers\ProductsController;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function makeOrder()
    {

        $cart = Shoppingcart::where('user_id', Auth::id())->first();
        $products = $cart->products;
        if (count($products) == 0) {
            return back()->with('error', 'No puedes tramitar un pedido vacío');
        } else {
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

    public function showOrderDetails($id)
    {
        $user = User::findOrFail(Auth::id());
        $order = Order::findOrFail($id);
        $products = $order->products;
        
        if ($order->user_id === Auth::id()) {
            return view('user.orderdetails', @compact('user', 'products', 'order'));
        } else {
            $pProduct = new ProductsController;

            return $pProduct->products();
        }

    }
}

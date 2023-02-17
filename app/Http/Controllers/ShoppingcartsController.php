<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shoppingcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingcartsController extends Controller
{
    public function showCart()
    {
        $cart = Shoppingcart::where('user_id', Auth::id())->first();
        $products = $cart->products;
        return view('user.shoppingCart', @compact('products'));
    }

    public function addProduct(Request $request)
    {
        $cart = Shoppingcart::where('user_id', Auth::id())->first();
        $cart->products()->attach($request['product'], ['quantity' => $request->quantity]);
        return back();
    }
}

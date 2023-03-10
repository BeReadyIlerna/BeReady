<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Shoppingcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingcartsController extends Controller
{
    public function showCart()
    {
        $cart = Shoppingcart::where('user_id', Auth::id())->first();
        $products = $cart->products;
        $totalPrice = 0;
        foreach ($products as $product) {
            $totalPrice += $product->total * $product->pivot->quantity;
        }
        $cart->total = $totalPrice;
        $cart->update();
        return view('user.shoppingCart', @compact('products', 'totalPrice'));
    }

    public function addProduct(Request $request)
    {
        $cart = Shoppingcart::where('user_id', Auth::id())->first();
        $product = Product::findOrFail($request['product']);

        if ($product->stock < $request->quantity || $product->stock < 1) {
            return back()->with('error', 'No hay stock suficiente de este producto');
        } else {
            if (!$cart->products->contains($request['product'])) { // check if the product is already in the cart
                $cart->products()->attach($request['product'], ['quantity' => $request->quantity ?? 1]);
            } else {
                $cart->products()->updateExistingPivot($request['product'], ['quantity' => $request->quantity ?? 1]);
            }
            return back();
        }
    }

    public function deleteProduct($id)
    {
        $cart = Shoppingcart::where('user_id', Auth::id())->first();
        $cart->products()->detach($id);
        return back();
    }

    public function subtractProduct($id)
    {
        $cart = Shoppingcart::where('user_id', Auth::id())->first();
        if ($cart->products()->where('product_id', $id)->pluck('quantity')[0] == 1) {
            $cart->products()->detach($id);
        } else {
            $cart->products()->where('product_id', $id)->decrement('quantity');
        }
        return back();
    }

    public function sumProduct($id)
    {
        $cart = Shoppingcart::where('user_id', Auth::id())->first();
        $product = Product::findOrFail($id);
        if ($cart->products()->where('product_id', $id)->pluck('quantity')[0] ==  $product->stock) {
            return back()->with('error', 'No hay stock suficiente de este producto');
        }else{
            $cart->products()->where('product_id', $id)->increment('quantity');
            return back();
        }
    }
}

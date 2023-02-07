<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\ImageController;

class ProductsController extends Controller
{
    public function products() {
        $products = Product::all();
        return view('index', @compact('products'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:4|max:255',
            'price' => 'required|float|min:0',
            'stock' => 'required|integer',
            'description' => 'required|string|min:10|max:255',
            'image' => 'required|string',
            'IVA' => 'integer'
        ]); 

        $newProduct = new Product;
        $newProduct->name = $request->name;
        $newProduct->price = $request->price;
        $newProduct->stock = $request->stock;
        $newProduct->description = $request->description;
        $newProduct->image = $request->image;
        $newProduct->IVA = $request->IVA ?? 21;
        $newProduct->total = $newProduct->price + ($newProduct->price % $newProduct->IVA);
        $newProduct->save();

        return back()->with('message', 'Producto añadido');
    }
}

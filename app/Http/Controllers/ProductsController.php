<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function products()
    {
        $products = Product::latest()->take(8)->get();
        $categories = Category::all();
        return view('index', @compact('products', 'categories'));
    }


    public function selectProduct($id) {
        $product = Product::findOrFail($id); // Get selected product
        return view('product', @compact('product'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name|string|min:4|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string|min:10|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'IVA' => 'required|integer|min:0'
        ]);

        $errors = $request->has('errors');

        if (!$errors) {
            $newProduct = new Product;
            $newProduct->name = $request->name;
            $newProduct->price = $request->price;
            $newProduct->stock = $request->stock;
            $newProduct->description = $request->description;
            $newProduct->IVA = $request->IVA;
            $newProduct->total = ($newProduct->price * ($newProduct->IVA / 100)) + $newProduct->price;
            $newProduct->category_id = 2; //TODO completar formulario para poner las categorías de la BBDD
            $newProduct->save();

            $imageName = "image-" . $newProduct->id . '.' . $request->image->extension();
            $request->image->move(public_path('img'), $imageName);
            $newProduct->image = $imageName;

            $newProduct->save();

            return back()->with('message', 'Producto añadido correctamente');
        } else {
            $errors = $request->errors();
            return back()->with('errors', $errors);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\ImageController;

use function PHPUnit\Framework\isEmpty;

class ProductsController extends Controller
{
    public function products() {
        $products = Product::all();
        return view('index', @compact('products'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name|string|min:4|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer',
            'description' => 'required|string|min:10|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'IVA' => 'integer'
        ]);

       $errors=$request->has('errors');

        if (!$errors) {
            $newProduct = new Product;
            $newProduct->name = $request->name;
            $newProduct->price = $request->price;
            $newProduct->stock = $request->stock;
            $newProduct->description = $request->description;
            $newProduct->IVA = $request->IVA ?? 21;
            $newProduct->total = ($newProduct->price * ($newProduct->IVA / 100)) + $newProduct->price;
            $newProduct->save();

            $imageName = "image-" . $newProduct->id . '.' . $request->image->extension();

            $request->image->move(public_path('img'), $imageName);

            $newProduct->image = $imageName;

            $newProduct->save();


            return back()->with('message', 'Producto añadido correctamente');
        }else{
             $errors = $request->errors();
            return back()->with('errors', $errors);
        }
    }
}

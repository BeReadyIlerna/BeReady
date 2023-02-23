<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductsController extends Controller
{
    public function products()
    {
        $products = Product::latest()->take(8)->get();

        if (Auth::check()) {
            $user = User::findOrFail(Auth::id());
            return view('index', @compact('products', 'user'));
        } else {
            return view('index', @compact('products'));
        }
    }

    public function showCategories()
    {
        $categories = Category::all();
        return view('admin.newproduct', @compact('categories'));
    }

    public function selectProduct($id)
    {
        $product = Product::findOrFail($id); // Get selected product
        return view('product', @compact('product'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name|string|min:4|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string|min:10|max:65000',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'iva' => 'required|integer|min:0',
            'category' => 'required'
        ]);

        $errors = $request->has('errors');

        if (!$errors) {
            $product = new Product;
            $product->name = $request['name'];
            $product->price = $request['price'];
            $product->stock = $request['stock'];
            $product->description = $request['description'];
            $product->IVA = $request['iva'];
            $product->total = ($request['price'] * ($request['iva'] / 100)) + $request['price'];
            $product->category_id = $request['category'];

            $product->save();

            $imageName = "image-" . $product->id . '.' . $request->image->extension();
            $request->image->move(public_path('img'), $imageName);
            $product->image = $imageName;

            $product->save();

            return back()->with('message', 'Producto añadido correctamente');
        } else {
            $errors = $request->errors();
            return back()->with('errors', $errors);
        }
    }

    public function showProduct()
    {
        $products = Product::all();
        return view('admin.dashboard', @compact('products'));
    }
    public function editProduct($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id); // Get selected product
        return view('admin.editproduct', @compact('product', 'categories'));
    }

    public function saveEditedProduct(Request $request)
    {

        $actualizar = Product::findOrFail($request->id);
        $actualizar->name = $request->name;
        $actualizar->price = $request->price;
        $actualizar->stock = $request->stock;
        $actualizar->description = $request->description;
        $actualizar->image = $request->image;
        $actualizar->IVA = $request->iva;
        $actualizar->total = $request->total;
        $actualizar->save();

        $pProduct = new ProductsController;
        return $pProduct->showProduct();
    }
}

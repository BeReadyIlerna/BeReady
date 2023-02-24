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
        $products = Product::where('status', 'enabled')->latest()->take(8)->get();

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
        $product = Product::where('status', 'enabled')->findOrFail($id); // Get selected product
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
            'status' => 'required',
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
            $product->status = $request['status'];
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

    public function showProduct($message = "")
    {
        $products = Product::paginate(10);
        return view('admin.products', @compact('products'))->with('message', $message);
    }

    public function editProduct($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id); // Get selected product
        return view('admin.editproduct', @compact('product', 'categories'));
    }

    public function saveEditedProduct(Request $request)
    {
        $editedProduct = Product::findOrFail($request->id);

        if ($request->name === $editedProduct->name) {
            $request->validate([
                'name' => 'required|string|min:4|max:255',
                'price' => 'required|numeric|min:0',
                'stock' => 'required|integer|min:0',
                'description' => 'required|string|min:10|max:65000',
                'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
                'iva' => 'required|integer|min:0',
                'status' => 'required',
                'category' => 'required'
            ]);
        } else {
            $request->validate([
                'name' => 'required|unique:products,name|string|min:4|max:255',
                'price' => 'required|numeric|min:0',
                'stock' => 'required|integer|min:0',
                'description' => 'required|string|min:10|max:65000',
                'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
                'iva' => 'required|integer|min:0',
                'status' => 'required',
                'category' => 'required'
            ]);
        }

        $errors = $request->has('errors');

        if (!$errors) {

            $editedProduct->name = $request->name;
            $editedProduct->price = $request->price;
            $editedProduct->stock = $request->stock;
            $editedProduct->description = $request->description;
            $request->image ? $editedProduct->image = $request->image : '';
            $editedProduct->IVA = $request->iva;
            $editedProduct->total = ($request['price'] * ($request['iva'] / 100)) + $request['price'];
            $editedProduct->status = $request->status;
            $editedProduct->category_id = $request['category'];
            $editedProduct->update();

            if ($request->image) {
                $imageName = "image-" . $editedProduct->id . '.' . $request->image->extension();
                $request->image->move(public_path('img'), $imageName);
                $editedProduct->image = $imageName;

                $editedProduct->update();
            }

            $message = 'El producto ' . $editedProduct->id . ' se ha actualizado correctamente';
            return redirect()->route('admin.products')->with('message', $message);
        } else {
            $errors = $request->errors();
            return back()->with('errors', $errors);
        }
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        if ($product->status == 'enabled') {
            $product->status = 'disabled';
            $product->update();

            return redirect()->route('admin.products')->with('message', 'Se ha deshabilitado correctamente el producto ' . $product->id);
        } else {
            return redirect()->route('admin.products')->with('errors', 'El producto ' . $product->id . ' ya está deshabilitado');
        }
    }
}

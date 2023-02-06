<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products() {
        $products = Product::paginate(4);;
        return view('index', @compact('products'));
    }
}

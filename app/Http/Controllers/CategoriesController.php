<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function category($categoryName)
    {
        $category = Category::where('name', $categoryName)->first();
        $products = Product::where('category_id', $category->id)->paginate(8);
        return view('category', @compact('products', 'categoryName'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class CategoriesController extends Controller
{

    public function categoryProducts($categoryName)
    {
        $category = Category::where('name', $categoryName)->first();
        $products = Product::where('category_id', $category->id)->paginate(8);
        return view('category', @compact('products', 'categoryName'));
    }
}

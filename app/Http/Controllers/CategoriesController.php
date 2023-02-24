<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:category,name|string|min:4|max:255',
            'description' => 'required|string|min:10|max:255',
        ]);

        $errors = $request->has('errors');

        if (!$errors) {
            $newCategory = new Category;
            $newCategory->name = $request->name;
            $newCategory->description = $request->description;
            $newCategory->save();

            $newCategory->save();

            return back()->with('message', 'Categoría creada correctamente');
        } else {
            $errors = $request->errors();
            return back()->with('errors', $errors);
        }
    }

    public function categoryProducts($categoryName)
    {
        try {
            $category = Category::where('name', $categoryName)->first();
            $products = Product::where('category_id', $category->id)->where('status', 'enabled')->paginate(8);
            return view('category', @compact('products', 'category'));
        } catch (Exception $e) {
            abort(404);
        }
    }

    public function showCategories()
    {
        $categories = Category::paginate(10);
        return view('admin.categories', @compact('categories'));
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id); // Get selected category
        return view('admin.editcategory', @compact('category'));
    }

    public function saveEditedCategory(Request $request)
    {
        $editedCat = Category::findOrFail($request->id);

        if ($request->name === $editedCat->name) {
            $request->validate([
                'name' => 'required|string|min:4|max:255',
                'description' => 'required|string|min:10|max:255',
            ]);
        } else {
            $request->validate([
                'name' => 'required|unique:categories,name|string|min:4|max:255',
                'description' => 'required|string|min:10|max:255',
            ]);
        }

        $errors = $request->has('errors');

        if (!$errors) {
            $editedCat->name = $request->name;
            $editedCat->description = $request->description;
            $editedCat->update();

            $message = 'La categoría ' . $editedCat->id . ' se ha actualizado correctamente';
            return redirect()->route('admin.categories')->with('message', $message);
        } else {
            $errors = $request->errors();
            return back()->with('errors', $errors);
        }
    }
}

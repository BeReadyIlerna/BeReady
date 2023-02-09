<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name|string|min:4|max:255',
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
}

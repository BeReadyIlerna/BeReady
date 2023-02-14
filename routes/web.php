<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductsController::class, 'products'])->name('index');

Route::get('/login', function () {
     return view('auth.login');
 })->name('login');

Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');


Route::post("/signup", [UsersController::class, "create"])->name("user.create");

Route::get('/product/{id?}', [ProductsController::class, 'selectProduct'])->name('product');

Route::get('/{name}', [CategoriesController::class, 'categoryProducts'])->name('category');

Route::prefix('/admin')->group(function () {
    Route::get('/newproduct', [ProductsController::class, 'showCategories'])->name('product.new');

    Route::get('/newcategory', function () {
        return view('admin.newcategory');
    })->name('category.new');

    Route::post('/addProduct', [ProductsController::class, 'create'])->name('product.create');

    Route::post('/addCategory', [CategoriesController::class, 'create'])->name('category.create');
});

Route::prefix('/user')->group(function () {

    Route::get('/myData', [UsersController::class, 'showData'])->name('user.data');

    Route::get('/myOrders', [UsersController::class, 'showData'])->name('user.orders');

    Route::get('/support', [UsersController::class, 'supportView'])->name('user.support');
});
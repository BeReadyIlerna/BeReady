<?php

use App\Http\Controllers\AddressesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShoppingcartsController;
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
})->name('login')->middleware('guest');

Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup')->middleware('guest');

Route::post("/signup", [UsersController::class, "create"])->name("user.create")->middleware('guest');

Route::get('/product/{id?}', [ProductsController::class, 'selectProduct'])->name('product');
Route::post('/product/addProduct', [ShoppingcartsController::class, 'addProduct'])->name('cart.addProduct')->middleware('auth');

Route::get('/{name}', [CategoriesController::class, 'categoryProducts'])->name('category');

Route::post('/', [OrdersController::class, 'makeOrder'])->name('user.makeOrder')->middleware('auth');

Route::prefix('/admin')->group(function () {
    Route::get('/newproduct', [ProductsController::class, 'showCategories'])->name('product.new')->middleware('admin');
    
    Route::get('/newcategory', function () {
        return view('admin.newcategory');
    })->name('category.new')->middleware('admin');
    
    Route::post('/addProduct', [ProductsController::class, 'create'])->name('product.create')->middleware('admin');

    Route::post('/addCategory', [CategoriesController::class, 'create'])->name('category.create')->middleware('admin');
});


Route::prefix('/user')->group(function () {
    Route::get('/myData', [UsersController::class, 'showData'])->name('user.data')->middleware('auth');
    Route::put('/adressUpdate', [AddressesController::class, 'update'])->name('user.adressUpdate')->middleware('auth');
    
    Route::get('/myOrders', [UsersController::class, 'showData'])->name('user.orders')->middleware('auth');
    
    Route::get('/support', [UsersController::class, 'supportView'])->name('user.support')->middleware('auth');
    
    Route::prefix('/cart')->group(function () {
        Route::get('/', [ShoppingcartsController::class, 'showCart'])->name('user.cart')->middleware('auth');
        Route::get('/delete/{id?}', [ShoppingcartsController::class, 'deleteProduct'])->name('user.cartDelete')->middleware('auth');
        Route::get('/sub/{id?}', [ShoppingcartsController::class, 'subtractProduct'])->name('user.cartProductSub')->middleware('auth');
        Route::get('/sum/{id?}', [ShoppingcartsController::class, 'sumProduct'])->name('user.cartProductSum')->middleware('auth');
    });
});


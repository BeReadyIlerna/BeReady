<?php

use App\Http\Controllers\AddressesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShoppingcartsController;
use App\Http\Controllers\UsersController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::post('/product/addproduct', [ShoppingcartsController::class, 'addProduct'])->name('cart.addProduct')->middleware('auth');

Route::post('/', [OrdersController::class, 'makeOrder'])->name('user.makeOrder')->middleware('auth');

Route::prefix('/admin')->group(function () {
    Route::get('/newproduct', [ProductsController::class, 'showCategories'])->name('product.new')->middleware('admin');
    
    Route::get('/newcategory', function () {
        return view('admin.newcategory');
    })->name('category.new')->middleware('admin');
    
    Route::post('/addproduct', [ProductsController::class, 'create'])->name('product.create')->middleware('admin');

    Route::post('/addcategory', [CategoriesController::class, 'create'])->name('category.create')->middleware('admin');
    
    Route::get('/products',[ProductsController::class, 'showProduct'])->name('admin.products')->middleware('admin');

    Route::get('/categories',[CategoriesController::class, 'showCategories'])->name('admin.categories')->middleware('admin');

    Route::get('/users',[UsersController::class, 'showUsers'])->name('admin.users')->middleware('admin');

    Route::post('/addCategory', [CategoriesController::class, 'create'])->name('category.create')->middleware('admin');

    Route::get('/editproduct/{id?}',[ProductsController::class, 'editProduct'])->name('admin.editproduct')->middleware('admin');

    Route::post('/editproduct/{id?}',[ProductsController::class, 'saveEditedProduct'])->name('admin.editproduct')->middleware('admin');

    Route::get('/deleteproduct/{id?}', [ProductsController::class, 'deleteproduct'])->name('admin.deleteproduct')->middleware('admin');
});

Route::prefix('/user')->group(function () {
    Route::get('/', [UsersController::class, 'showData'])->name('user.data')->middleware('auth');
    Route::put('/adress-update', [AddressesController::class, 'update'])->name('user.adressUpdate')->middleware('auth');
    
    Route::get('/orders', [UsersController::class, 'showOrders'])->name('user.orders')->middleware('auth');
    Route::get('/orders/{id?}', [OrdersController::class, 'showOrderDetails'])->name('user.orderdetails')->middleware('auth');
    
    Route::get('/support', [UsersController::class, 'supportView'])->name('user.support')->middleware('auth');
    
    Route::prefix('/cart')->group(function () {
        Route::get('/', [ShoppingcartsController::class, 'showCart'])->name('user.cart')->middleware('auth');
        Route::get('/delete/{id?}', [ShoppingcartsController::class, 'deleteProduct'])->name('user.cartDelete')->middleware('auth');
        Route::get('/sub/{id?}', [ShoppingcartsController::class, 'subtractProduct'])->name('user.cartProductSub')->middleware('auth');
        Route::get('/sum/{id?}', [ShoppingcartsController::class, 'sumProduct'])->name('user.cartProductSum')->middleware('auth');
    });
});

Route::get('/{name}', [CategoriesController::class, 'categoryProducts'])->name('category');

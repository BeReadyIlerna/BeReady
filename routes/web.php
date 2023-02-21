<?php

use App\Http\Controllers\AddressesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
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

Route::get('/{name}', [CategoriesController::class, 'categoryProducts'])->name('category');

Route::prefix('/admin')->group(function () {
    Route::get('/newproduct', [ProductsController::class, 'showCategories'])->name('product.new')->middleware('admin');

    Route::get('/newcategory', function () {
        return view('admin.newcategory');
    })->name('category.new')->middleware('admin');


    Route::post('/addProduct', [ProductsController::class, 'create'])->name('product.create')->middleware('admin');

    Route::post('/addCategory', [CategoriesController::class, 'create'])->name('category.create')->middleware('admin');

    Route::post('/dashboard',[ProductsController::class ,'showProduct'])->name('product.view')->middleware('admin');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard')->middleware('admin');
});

Route::prefix('/user')->group(function () {
    Route::get('/myData', [UsersController::class, 'showData'])->name('user.data')->middleware('auth');
    Route::put('/adressUpdate', [AddressesController::class, 'update'])->name('user.adressUpdate')->middleware('auth');


    Route::get('/myOrders', [UsersController::class, 'showData'])->name('user.orders')->middleware('auth');


    Route::get('/support', [UsersController::class, 'supportView'])->name('user.support')->middleware('auth');
});

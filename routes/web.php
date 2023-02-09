<?php

use App\Http\Controllers\ProductsController;
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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/product/{id?}', [ProductsController::class, 'selectProduct'])->name('product');

Route::get('/newproduct', function () {
    return view('newproduct');
})->name('product.new');

Route::get('/', [ProductsController::class, 'products'])->name('index');

Route::post('addProduct', [ProductsController::class, 'create'])->name('product.create');

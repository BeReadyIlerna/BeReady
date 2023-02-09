<?php

use App\Http\Controllers\CategoryController;
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

//Route::get('/{name?}', CategoryController::class, )->name('category');

Route::get('/product/{id?}', [ProductsController::class, 'selectProduct'])->name('product');

Route::get('/', [ ProductsController::class, 'products'])->name('index');
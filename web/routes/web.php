<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/sample', function () {
    return view("sample");
})->name('sample');



// 商品一覧表示のルート (例: /products)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// 特定の商品詳細表示のルート (例: /products/1)
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
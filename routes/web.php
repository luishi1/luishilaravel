<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::resource('products', ProductsController::class);
Route::delete('/products/{product}', [ProductsController::class, 'destroy'])->name('products.delete');


Route::get('/', function () {
    return view('welcome');
});

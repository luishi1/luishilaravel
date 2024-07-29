<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;

Route::resource('products', ProductsController::class);

Route::resource('brands', BrandsController::class);

Route::resource('categories', CategoriesController::class);

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

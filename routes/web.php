<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\Route;

Route::prefix('api/categories')->group(function(){
    Route::get('/',[CategoriesController::class,'list'])->name('category-list');
    Route::post('/',[CategoriesController::class,'create'])->name('category-create');
    Route::delete('/{id}',[CategoriesController::class,'delete'])->name('category-delete');
    Route::put('/{id}',[CategoriesController::class,'update'])->name('category-update');
    Route::get('/{id}',[CategoriesController::class,'getById'])->name('category-getbyid');

});

Route::prefix('api/products')->group(function(){
    Route::get('/',[ProductsController::class,'list'])->name('product-list');
    Route::post('/',[ProductsController::class,'create'])->name('product-create');
    Route::delete('/{id}',[ProductsController::class,'delete'])->name('product-delete');
    Route::put('/{id}',[ProductsController::class,'update'])->name('product-update');
});


Route::get('/home',function(){
    return view('home');
});

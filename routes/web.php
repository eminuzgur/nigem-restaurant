<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;



Route::prefix('categories')->group(function(){
    Route::get('/edit/{id}',[CategoriesController::class,'edit'])->name('category-edit');
    Route::get('/create',[CategoriesController::class,'create'])->name('category-create');
    Route::get('/',[CategoriesController::class,'index'])->name('category-index');
    Route::post('/',[CategoriesController::class,'store'])->name('category-store');
    Route::get('/{id}',[CategoriesController::class,'show'])->name('category-show');
    Route::delete('/{id}',[CategoriesController::class,'destroy'])->name('category-destroy');

    Route::put('/{id}',[CategoriesController::class,'update'])->name('category-update');
});

Route::prefix('products')->group(function(){
    Route::get('/edit/{id}',[ProductsController::class,'edit'])->name('product-edit');
    Route::get('/create',[ProductsController::class,'create'])->name('product-create');
    Route::get('/',[ProductsController::class,'index'])->name('product-index');
    Route::post('/',[ProductsController::class,'store'])->name('product-store');
    Route::get('/{id}',[ProductsController::class,'show'])->name('product-show');
    Route::delete('/{id}',[ProductsController::class,'destroy'])->name('product-destroy');
    Route::put('/{id}',[ProductsController::class,'update'])->name('product-update');
});

Route::prefix('customers')->group(function(){
    Route::get('/edit/{id}',[CustomersController::class,'edit'])->name('customer-edit');
    Route::get('/create',[CustomersController::class,'create'])->name('customer-create');
    Route::get('/',[CustomersController::class,'index'])->name('customer-index');
    Route::post('/',[CustomersController::class,'store'])->name('customer-store');
    Route::get('/{id}',[CustomersController::class,'show'])->name('customer-show');
    Route::delete('/{id}',[CustomersController::class,'destroy'])->name('customer-destroy');
    Route::put('/{id}',[CustomersController::class,'update'])->name('customer-update');
});


Route::get('dashboard',function(){
    return view('admin.dashboard');
})->name('dashboard');

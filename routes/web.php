<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;



Route::prefix('categories')->group(function(){
    Route::get('/',[CategoriesController::class,'index'])->name('category-index');
    Route::get('/create',[CategoriesController::class,'create'])->name('category-create');
    Route::post('/',[CategoriesController::class,'store'])->name('category-store');
    Route::get('/{id}',[CategoriesController::class,'show'])->name('category-show');
    Route::delete('/{id}',[CategoriesController::class,'destroy'])->name('category-destroy');
    Route::get('/edit',[CategoriesController::class,'edit'])->name('category-edit');
    Route::put('/{id}',[CategoriesController::class,'update'])->name('category-update');
});

Route::prefix('products')->group(function(){
    Route::get('/',[ProductsController::class,'index'])->name('product-index');
    Route::get('/create',[ProductsController::class,'create'])->name('product-create');
    Route::post('/',[ProductsController::class,'store'])->name('product-store');
    Route::get('/{id}',[ProductsController::class,'show'])->name('product-show');
    Route::delete('/{id}',[ProductsController::class,'destroy'])->name('product-destroy');
    Route::get('/edit',[ProductsController::class,'edit'])->name('product-edit');
    Route::put('/{id}',[ProductsController::class,'update'])->name('product-update');
});

Route::get('dashboard',function(){
    return view('admin.dashboard');
})->name('dashboard');

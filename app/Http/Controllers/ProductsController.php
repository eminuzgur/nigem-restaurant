<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products= Product::all();
        return view('admin.product.index',compact('products'));
    }

    public function create(){
        $categories=Category::all();
        return view('admin.product.create',compact('categories'));
    }

    public function store(StoreProductRequest $request){
        $request->validated();
        $product=  new Product($request->all());
        $product->save();
        return to_route('product-index',201);
    }
}

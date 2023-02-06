<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list(){
        return view('product');
        return Product::all();
    }
    public function create(Request $request){
        $category=  new Product($request->all());
        return $category->save();
    }
    public function delete($id){
        return Product::find($id)->delete();
    }
    public function update(Request $request,$id){
        return Product::find($id)->update($request->all());
    }
}

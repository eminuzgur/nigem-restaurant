<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('admin.category.index',compact('categories'));
    }
    public function show($id){
        $category=Category::find($id);
        return view('admin.category.show',compact('category'));
    }
    public function create(){
        return view('admin.category.create');
    }
    public function store(StoreCategoryRequest $request){
        $input=$request->all();
        if($request->hasFile('image')){
            $destination_path='public/images/categories';
            $image=$request->file('image');
            $image_name=$image->getClientOriginalName();
            $request->file('image')->storeAs($destination_path,$image_name);
            $input['image']=$image_name;
        }

        $category=  new Category($request->all());
        $category->save();
        return to_route('category-index',201);
    }
    public function destroy($id){
        Category::find($id)->delete();
        return to_route('category-index');
    }
    public function edit($id){
        $category=Category::find($id);
        return view('admin.category.edit',compact('category'));
    }
    public function update(Request $request,$id){
        Category::find($id)->update($request->all());
        return to_route('category-index');
    }
}

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
            $image=$request->file('image');
            $imageName=$image->getClientOriginalName();
            $request->image->move('images/categories/', $imageName);
            $input['image']=$imageName;
        }else{
            $input['image']='default.png';
        }
        $category=  new Category($input);
        $category->name=
        Category::create();
        $category->save();
        return to_route('category-index');
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

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function list(){
        $categories=Category::all();
        return view('categories.index',compact('categories'));
    }
    public function create(Request $request){

        if(count(Category::where('name',$request->name)->get())==0){
            $category=  new Category($request->all());
            $category->save();
            return redirect('api/categories');
        }
        else{
            return abort(404,$message='Hello',);
        }
    }

    public function delete($id){
        Category::find($id)->delete();
        return redirect('api/categories');
    }

    public function update(Request $request,$id){
        return Category::find($id)->update($request->all());
    }

    public function getById($id){
        $category=Category::find($id);
        return view('categories.show',compact('category'));
    }


}

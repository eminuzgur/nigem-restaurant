<?php

namespace App\Http\Controllers;

use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    public function list(){
        return OrderDetails::all();
    }
    public function create(Request $request){
        $category=  new OrderDetails($request->all());
        return $category->save();
    }
    public function delete($id){
        return OrderDetails::find($id)->delete();
    }
    public function update(Request $request,$id){
        return OrderDetails::find($id)->update($request->all());
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function list(){
        return Order::all();
    }
    public function create(Request $request){
        $category=  new Order($request->all());
        return $category->save();
    }
    public function delete($id){
        return Order::find($id)->delete();
    }
    public function update(Request $request,$id){
        return Order::find($id)->update($request->all());
    }
}

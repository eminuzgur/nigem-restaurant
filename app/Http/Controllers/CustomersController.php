<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        return Customer::all();
    }
    public function create(Request $request){
        $category=  new Customer($request->all());
        return $category->save();
    }
    public function delete($id){
        return Customer::find($id)->delete();
    }
    public function update(Request $request,$id){
        return Customer::find($id)->update($request->all());
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        $customers= Customer::all();
        return view('admin.customer.index',compact('customers'));
    }
    public function create(){
        $customer=Customer::all();
        return view('admin.customer.create',compact('customer'));
    }
    public function store(StoreCustomerRequest $request){
        $request->validated();
        $product=  new Customer($request->all());
        $product->save();
        return to_route('customer-index',201);
    }
    public function destroy($id){
    DB::
        Customer::find($id)->delete();
        return to_route('customer-index',201);
    }
    public function edit($id){
        $cutomer=Customer::find($id);
        return view('admin.customer.edit',compact('cutomer'));
    }
    public function update(Request $request,$id){
        Customer::find($id)->update($request->all());
        return to_route('customer-index');
    }
}

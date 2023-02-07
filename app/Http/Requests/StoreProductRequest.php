<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|unique:products',
            'category_id'=>'required',
            'unit_price'=>'required',
            'discount'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Product name is must!',
            'name.unique'=>'Product name cannot be repeated!',
            'category_id.required'=>'Category name is must!',
            'unit_price.required'=>'Unit price name is must!',
            'discount.required'=>'Discount name is must!',
        ];
    }
}

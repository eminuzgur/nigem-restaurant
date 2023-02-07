<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|unique:categories'
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Category name is must!',
            'name.unique'=>'Category name cannot be repeated!'
        ];
    }
}

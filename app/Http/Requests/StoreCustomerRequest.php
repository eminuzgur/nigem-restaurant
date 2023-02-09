<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'first_name.required'=>'Customer first name is must!',
            'last_name.required'=>'Customer last name is must!',
            'phone.required'=>'Customer phone is must!',
            'email.required'=>'Customer email is must!',
            'address.required'=>'Customer address is must!',
        ];
    }
}

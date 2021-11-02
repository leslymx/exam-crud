<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'code' => ['required'],
            'business_name' => ['required', 'max:20'],
            'customer_name' => ['required', 'max:50'],
            'type_currency' => ['required'],
            'country' => ['required'],
            'state' => ['required'],
            'city' => ['required'],
            'phone_number' => ['required', 'min:10', 'numeric'],
            'email' => ['required', 'email', 'unique:users'],
            'is_active' => ['required', 'min:1', 'max:1', 'boolean'],
        ];
    }
}

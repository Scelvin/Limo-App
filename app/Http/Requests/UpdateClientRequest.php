<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            'title' => 'required|string|min:5|max:50',
            'first_name' => 'required|string|min:3|max:25',
            'last_name' => 'required|string|min:3|max:25',
            'email' => 'required|email|max:255|unique',
            'password' => 'required|confirmed|min:8',
            'phone' => 'required|numeric|max:10',
            'company' => 'required|string|min:5|max:250',
            'address' => 'required|string|min:50|max:350',
            'city' => 'required|string|min:5|max:150',
            'state' => 'required|string|min:3|max:50',
            'zip' => 'required|numeric|min:5|max:8',
            'country' => 'required'
        ];
    }
}

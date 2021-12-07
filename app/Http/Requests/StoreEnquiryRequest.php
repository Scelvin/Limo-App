<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'datetime' => 'required',
            'location' => 'required',
            'reason' => 'required',
            'passengers' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'company' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'airline' => 'required',
            'flight' => 'required',
            'arrival_time' => 'required',
            'terminal' => 'required',
        ];
    }
}

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
            "first_name" => 'required|string|min:5|max:50',
            "last_name" => 'required|string|min:5|max:50',
            "phone" => 'required|numeric|max:10',
            "company" => 'string|min:5|max:250',
            'address' => 'string|min:50|max:350',
            'city' => 'string|min:5|max:150',
            'state' => 'string|min:3|max:50',
            'zip' => 'numeric|min:5|max:8',
            'country' => '',
            "dateTime" => 'required|date_format:Y-m-d H:i:s|after:5 hours',
            "location" => '',
            "limo_id" => 'required',
            "service_id" => 'required',
            "passengers" => 'required',
            "reason" => 'required',
            "payment_id" =>'required', 
            "airline" => 'string|min:5|max:50',
            "flight_number" => 'string|max:5',
            "flight_time" => '',
            "terminal" => 'string|min:1|max:3',
            "extras" => '',
        ];
    }
}

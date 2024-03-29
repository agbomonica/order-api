<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Utilities\GoogleMaps;


class PlaceOrderRequest extends FormRequest
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

        'address' => 'required',
        'longitude' => 'required | string',
        'latitude' => 'required | string',


        ];
    }
}

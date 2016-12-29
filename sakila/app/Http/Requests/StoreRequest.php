<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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

               'city' => 'required',
               'country_id' => 'required',

               'address' => 'required',
               'address2' => 'required',
               'district' => 'required',
               'postal_code' => 'required',
               'phone' => 'required'
          
        ];
    }
}

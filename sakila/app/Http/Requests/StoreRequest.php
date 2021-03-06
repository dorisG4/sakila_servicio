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

               'city' => 'required|max:50',
               'country_id' => 'required',

               'address' => 'required|max:50',
               'address2' => 'required|max:50',
               'district' => 'required|max:20',
               'postal_code' => 'required|numeric',
               'phone' => 'required|numeric'
          
        ];
    }
}

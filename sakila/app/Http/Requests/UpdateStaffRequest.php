<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffRequest extends FormRequest
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
            
               'first_name' => 'required',
               'last_name' => 'required',
              
               'email' => 'required',
               'store_id' => 'required',
               'active' => 'required',
               'username' => 'required',
               'password' => 'required',

               'address' => 'required',
               'address2' => 'required',
               'district' => 'required',
               'postal_code' => 'required',
               'phone' => 'required',

               'city' => 'required',
               'country_id' => 'required'
        ];
    }
}
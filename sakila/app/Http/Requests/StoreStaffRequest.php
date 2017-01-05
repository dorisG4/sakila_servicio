<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaffRequest extends FormRequest
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
            
       'first_name' => 'required|max:45|regex:/^[a-z]+$/i',
       'last_name' => 'required|max:45|regex:/^[a-z]+$/i',
       'picture' => 'required',
       'email' => 'required|unique:staff|max:50',
       'store_id' => 'required',
       'active' => 'required',
       'username' => 'required|unique:staff|max:16',
       'password' => 'required|max:40',

       'address' => 'required|max:50',
       'address2' => 'required|max:50',
       'district' => 'required|max:20',
       'postal_code' => 'required|numeric',
       'phone' => 'required|numeric',

       'city' => 'required|max:50',
       'country_id' => 'required'

        ];
    }
}

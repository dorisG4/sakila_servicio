<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRentalRequest extends FormRequest
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
               'rental_date'=>'required',
               'inventory_id'=>'required',
               'customer_id'=>'required',
               'return_date'=>'required',
               'staff_id'=>'required',
               'amount'=>'required|numeric|between:0,99.99', 
               'payment_date'=>'required'
        ];
    }
}

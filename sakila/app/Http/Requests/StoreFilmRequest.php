<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilmRequest extends FormRequest
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
            'title' => 'min:8|max:255|required|unique:films',
            'description' => 'required',
            'release_year' =>  'required',
            'rental_duration' => 'required',
            'rental_rate' => 'required',
            'length' => 'required',
            'replacement_cost' => 'required'
        ];
    }
}

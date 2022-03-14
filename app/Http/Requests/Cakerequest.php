<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Cakerequest extends FormRequest
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
            'name'=>'required',
            'telephone'=>'required',
            'address'=>'required',
            'type_of_cake'=>'required'
        ];
    }
}

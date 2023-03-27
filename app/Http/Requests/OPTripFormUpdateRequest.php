<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OPTripFormUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //TO ENABLE USERS TO DO REQUEST
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [


        ];

        return $rules;
    }
}

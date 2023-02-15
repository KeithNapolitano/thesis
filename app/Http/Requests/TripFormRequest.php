<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripFormRequest extends FormRequest
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
            // 'route_id' => 'required',
            'dates' => 'required',
            'van_plate' => 'required',
            'driver_name' => 'required',
            
            // 'num_pass' => 'required'
        ];

        return $rules;
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'lastname' => 'required',
            'noSSocial' =>  'required',
            'dob' =>  'required',
            'email' =>  'required',
            'phone' =>  'required',
            'diseases' => 'nullable|string',
            'allergies' => 'nullable|string',
            'antecedents' => 'nullable|string',
            'comments' => 'nullable|string',

        ];
    }
}

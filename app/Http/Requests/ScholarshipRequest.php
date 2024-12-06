<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScholarshipRequest extends FormRequest
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
            'sfield' => 'required',
            'attachment' => 'required', 
            'fname' => 'required',
            'lname' => 'required',
            'cell' => 'required',
            'address' => 'required',
            'city' => 'required',
            'municipality' => 'required',
            'school' => 'required',
            'level' => 'required',
        ];
    }
}

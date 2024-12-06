<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddmissiomRequest extends FormRequest
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
            'level' => 'required',
            'subject' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'dobad' => 'required',
            'dobbs' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'pcountry' => 'required',
            'pprovince' => 'required',
            'pdistrict' => 'required',
            'pmunciplicity' => 'required',
            'pward' => 'required',
            'pemail' => 'required',
            'pphone' => 'required',
            'ccountry' => 'required',
            'cprovince' => 'required',
            'cdistrict' => 'required',
            'cmunciplicity' => 'required',
            'cward' => 'required',
            'cemail' => 'required',
            'cphone' => 'required',
            'fathername' => 'required',
            'fprofession' => 'required',
            'fphone' => 'required',
            'mothername' => 'required',
            'mprofession' => 'required',
            'mphone' => 'required',
            'name' => 'required',
            'relationship' => 'required',
            'phone' => 'required',
            'alevel' => 'required',
            'university' => 'required',
            'passedyear' => 'required',
            'symbol' => 'required',
            'division' => 'required',
            'faculty' => 'required',
        ];
    }
}

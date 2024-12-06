<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticeRequest extends FormRequest
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
            'title'=>'required',
            // 'pdf'=>'mimes:pdf,doc',
            'image' => 'mimes:jpeg,png,jpg,web,pdf,docx|max:40000',
            'description'=>'required',
            // 'date'=>'required',
            'status'=>'required',
            'type'=>'required',
        ];
    }
}

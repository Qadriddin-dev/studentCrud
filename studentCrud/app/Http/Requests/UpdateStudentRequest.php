<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|string|min:3|max:20',
            'course'=>'required|string|unique:students,course|min:4',
            'fee'=>'required|integer|between:2,5'
        ];
    }
}

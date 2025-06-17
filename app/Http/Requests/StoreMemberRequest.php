<?php

namespace App\Http\Requests;

use App\Models\Member;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMemberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'job' => [
                'string',
                'nullable',
            ],
            'employer' => [
                'string',
                'nullable',
            ],
         
            'email' => [
                'string',
                'required',
            ],
           
            'identity_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'type_id' => [
                'required',
                'integer',
            ],
            'date_of_birth' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'residence' => [
                'string',
                'nullable',
            ],
            'neighborhood' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
              'phone_number' => [
                'required',
                'regex:/^05\d{8}$/',
            ],
            'identity_number' => [
                'required',
                'regex:/^1[0-9]{9}$/',
            ],
        ];
    }
     public function messages()
    {
        return [
            'phone_number.regex' => 'رقم الجوال يجب ان يكون 10 أرقام ويبدأ ب 05',
            'identity_number.regex' => 'رقم الهوية يجب ان يكون 10 أرقام ويبدأ ب 1',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\Contact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContactRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_edit');
    }

    public function rules()
    {
        return [
            'type' => [
                'required',
            ],
            'name' => [
                'string',
                'required',
            ],
            'subject' => [
                'string',
                'nullable',
            ],
            'phone_number' => [
                'required',
                'regex:/^05\d{8}$/',
            ],
        ];
    }
    public function messages()
    {
        return [
            'phone_number.regex' => 'رقم الجوال يجب ان يكون 10 أرقام ويبدأ ب 05',
        ];
    }
}

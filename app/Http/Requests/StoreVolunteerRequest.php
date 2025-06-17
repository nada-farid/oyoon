<?php

namespace App\Http\Requests;

use App\Models\Volunteer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVolunteerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => [
                'required',
            ],
            'name' => [
                'string',
                'required',
            ],
            'phone' => [
                'required',
                'regex:/^05\d{8}$/',
            ],
            'identity' => [
                'required',
                'regex:/^1[0-9]{9}$/',
            ],

            'skills' => [
                'required',
            ],
            'experience' => [
                'required',
            ],
            'volunteer_befor' => [
                'required',
            ],
            'initiative_name' => [
                'string',
                'required',
            ],
            'cv' => [
                'required',
            ],
        ];
    }

    public function messages()
    {
        return [
            'phone.regex' => 'رقم الجوال يجب ان يكون 10 أرقام ويبدأ ب 05',
            'identity.regex' => 'رقم الهوية يجب ان يكون 10 أرقام ويبدأ ب 1',
        ];
    }
}

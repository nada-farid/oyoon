<?php

namespace App\Http\Requests;

use App\Models\Certificate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCertificateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('certificate_create');
    }

    public function rules()
    {
        return [
            'description' => [
                'required',
            ],
            'image' => [
                'required',
            ],
        ];
    }
 public function messages()
{
    return [
        'image.required' => __('global.Please upload an image with required dimensions'),
    ];
}
}

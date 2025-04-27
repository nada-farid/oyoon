<?php

namespace App\Http\Requests;

use App\Models\Director;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDirectorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('director_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'position' => [
                'string',
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

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Gate;
use Illuminate\Http\Response;

class MassDestroyAudienceSatisfactionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('audience_satisfaction_delete');
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:audience_satisfactions,id',
        ];
    }
}


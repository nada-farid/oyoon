<?php

namespace App\Http\Requests;

use App\Models\AudienceSatisfaction;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAudienceSatisfactionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('audience_satisfaction_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
        ];
    }
}


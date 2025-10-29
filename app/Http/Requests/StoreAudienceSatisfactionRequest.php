<?php

namespace App\Http\Requests;

use App\Models\AudienceSatisfaction;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAudienceSatisfactionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('audience_satisfaction_create');
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


<?php

namespace App\Http\Requests;

use App\Models\AudienceSatisfactionItem;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAudienceSatisfactionItemRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('audience_satisfaction_item_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'audience_satisfaction_id' => [
                'required',
                'integer',
            ],
            'file' => [
                'required',
            ],
        ];
    }
}


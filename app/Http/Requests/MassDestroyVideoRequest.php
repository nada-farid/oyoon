<?php

namespace App\Http\Requests;

use App\Models\Video;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class MassDestroyVideoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('video_delete');
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:videos,id',
        ];
    }
}

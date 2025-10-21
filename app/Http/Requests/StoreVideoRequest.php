<?php

namespace App\Http\Requests;

use App\Models\Video;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVideoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('video_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'youtube_url' => [
                'string',
                'nullable',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
            'published' => [
                'boolean',
            ],
            'thumbnail' => [
                'required',
            ],
            'video_file' => [
                'nullable',
            ],
        ];
    }
}

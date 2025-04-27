<?php

namespace App\Http\Requests;

use App\Models\Article;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreArticleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('article_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'short_description' => [
                'required',
            ],
            'description' => [
                'required',
            ],
            'image' => [
                'required',
            ],
            'inner_image' => [
                'required',
            ],
            'images' => [
                'array',
            ],
            'writer_name' => [
                'string',
                'required',
            ],
        ];
    }
}

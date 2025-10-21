<?php

namespace App\Http\Requests;

use App\Models\VideoCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class MassDestroyVideoCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('video_category_delete');
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:video_categories,id',
        ];
    }
}

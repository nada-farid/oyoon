@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.article.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.id') }}
                        </th>
                        <td>
                            {{ $article->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.title') }}
                        </th>
                        <td>
                            {{ $article->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.short_description') }}
                        </th>
                        <td>
                            {!! $article->short_description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.description') }}
                        </th>
                        <td>
                            {!! $article->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.description_2') }}
                        </th>
                        <td>
                            {!! $article->description_2 !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.image') }}
                        </th>
                        <td>
                            @if($article->image)
                                <a href="{{ $article->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $article->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.inner_image') }}
                        </th>
                        <td>
                            @if($article->inner_image)
                                <a href="{{ $article->inner_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $article->inner_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.images') }}
                        </th>
                        <td>
                            @foreach($article->images as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.writer_name') }}
                        </th>
                        <td>
                            {{ $article->writer_name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.articles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
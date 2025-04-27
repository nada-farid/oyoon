@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'مبادرتنا',
        'sub_heading' => 'مبادرتنا',
    ])

    <div class="donate-section page-two">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <div class="charina-donate-single-box">
                            <!-- donate thumb -->
                            <div class="donate-thumb">
                                @if ($project->image)
                                    <img src="{{ $project->image->getUrl() }}" alt="">
                                @endif
                                <!-- thumb text -->
                                <div class="thumb-category">
                                    <span> {{ $project->beneficiar->name }}</span>
                                </div>
                            </div>
                            <!-- donate content -->
                            <div class="charina-donate-content">
                                <div class="donate-title">
                                    <h3><a href="{{ route('frontend.project', $project->id) }}">{{ $project->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

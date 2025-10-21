@extends('frontend.layouts.main')

@section('content')
@include('frontend.partial.breadcrumb', [
    'haeding' => ' فيديو ' . $category->name,
    'sub_heading' => ' فيديو ' . $category->name . ' لجمعية عيون جدة',
])
<!--==================================================-->
<!-- Start Video Category Section -->
<!--==================================================-->
<div class="video-category-section" style="padding: 80px 0; background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Page Title -->
                <div class="section-title text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <div class="video-icon me-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #94D3F3, #0c3f57); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-play" style="color: white; font-size: 24px;"></i>
                        </div>
                        <h2 class="mb-0" style="color: #0c3f57; font-size: 2.5rem; font-weight: 700;">{{ $category->name }}</h2>
                    </div>
                    @if($category->description)
                    <p class="text-muted" style="font-size: 1.1rem;">{{ $category->description }}</p>
                    @endif
                </div>                <!-- Videos Grid -->
                @if($videos->count() > 0)
                <div class="row g-4">
                    @foreach($videos as $video)
                    <div class="col-lg-4 col-md-6">
                        <div class="video-card" style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transition: all 0.3s ease; cursor: pointer; height: 100%;" 
                             onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.15)'" 
                             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
                             onclick="window.location.href='{{ route('frontend.videos.show', $video) }}'">
                            
                            <!-- Video Thumbnail -->
                            <div class="video-thumbnail position-relative" style="height: 200px; overflow: hidden;">
                                @if($video->thumbnail)
                                    <img src="{{ $video->thumbnail->url }}" alt="{{ $video->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                                @elseif($video->youtube_url)
                                    <img src="https://img.youtube.com/vi/{{ $video->youtube_embed_url ? explode('/', $video->youtube_embed_url)[4] : '' }}/maxresdefault.jpg" alt="{{ $video->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                                @else
                                    <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #94D3F3, #0c3f57); display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-play" style="color: white; font-size: 48px;"></i>
                                    </div>
                                @endif
                                
                                <!-- Play Button Overlay -->
                                <div class="play-overlay position-absolute top-50 start-50 translate-middle" style="background: rgba(0,0,0,0.7); border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-play" style="color: white; font-size: 20px; margin-left: 3px;"></i>
                                </div>
                                
                                <!-- Video Duration (if available) -->
                                <div class="video-duration position-absolute" style="bottom: 10px; right: 10px; background: rgba(0,0,0,0.8); color: white; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem;">
                                    <i class="fas fa-clock me-1"></i>فيديو
                                </div>
                            </div>
                            
                            <!-- Video Info -->
                            <div class="video-info p-4">
                                <h5 class="video-title mb-3" style="color: #333; font-weight: 600; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{ $video->title }}</h5>
                                
                                @if($video->description)
                                <p class="video-description text-muted mb-3" style="font-size: 0.9rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{ $video->description }}</p>
                                @endif
                                
                                <div class="video-meta d-flex justify-content-between align-items-center">
                                    <div class="video-views" style="color: #666; font-size: 0.8rem;">
                                        <i class="fas fa-eye me-1"></i>{{ $video->views_count }} مشاهدة
                                    </div>
                                    <div class="video-date" style="color: #666; font-size: 0.8rem;">
                                        {{ $video->created_at->format('Y/m/d') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-5">
                    {{ $videos->links() }}
                </div>
                @else
                <!-- No Videos Message -->
                <div class="text-center py-5">
                    <div class="no-videos-icon mb-4" style="width: 120px; height: 120px; background: linear-gradient(135deg, #94D3F3, #0c3f57); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-video-slash" style="color: white; font-size: 48px;"></i>
                    </div>
                    <h4 class="text-muted mb-3">لا توجد فيديوهات متاحة</h4>
                    <p class="text-muted mb-4">لم يتم إضافة أي فيديوهات في هذه الفئة بعد</p>
                    <a href="{{ route('frontend.videos.index') }}" class="btn btn-outline-primary" style="border-color: #0c3f57; color: #0c3f57;">
                        <i class="fas fa-arrow-right me-2"></i>العودة لمكتبة الفيديو
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Video Category Section -->
<!--==================================================-->
@endsection

@section('style')
<style>
.video-card:hover {
    text-decoration: none;
    color: inherit;
}

.play-overlay {
    opacity: 0;
    transition: opacity 0.3s ease;
}

.video-card:hover .play-overlay {
    opacity: 1;
}

.btn-outline-primary:hover {
    background-color: #0c3f57 !important;
    border-color: #0c3f57 !important;
    color: white !important;
}

@media (max-width: 768px) {
    .video-category-section {
        padding: 60px 0;
    }
    
    .section-title h2 {
        font-size: 2rem !important;
    }
    
    .video-thumbnail {
        height: 180px !important;
    }
}
</style>
@endsection

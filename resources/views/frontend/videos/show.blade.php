@extends('frontend.layouts.main')

@section('content')
<!--==================================================-->
<!-- Start Video Show Section -->
<!--==================================================-->
@include('frontend.partial.breadcrumb', [
    'haeding' => ' مكتبة الفيديو',
    'sub_heading' => ' مكتبة الفيديو لجمعية عيون جدة',
])
<div class="video-show-section" style="padding: 80px 0">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="row">
                    <!-- Main Video Content -->
                    <div class="col-lg-8">
                        <!-- Video Player -->
                        <div class="video-player-container mb-4" style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                            @if($video->youtube_url)
                                <!-- YouTube Video -->
                                <div class="video-wrapper" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                                    <iframe src="{{ $video->youtube_embed_url }}" 
                                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" 
                                            allowfullscreen>
                                    </iframe>
                                </div>
                                
                                <!-- YouTube Link -->
                                <div class="youtube-link p-3" style="background: #f8f9fa; border-top: 1px solid #dee2e6;">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="https://www.youtube.com/s/desktop/favicon_48x48.png" alt="YouTube" style="width: 24px; height: 24px; margin-left: 10px;">
                                            <span style="color: #666; font-size: 0.9rem;">المشاهدة على YouTube</span>
                                        </div>
                                        <a href="{{ $video->youtube_url }}" target="_blank" class="btn btn-outline-danger btn-sm">
                                            <i class="fab fa-youtube me-1"></i>فتح في YouTube
                                        </a>
                                    </div>
                                </div>
                            @elseif($video->video_file_url)
                                <!-- Local Video -->
                                <video controls style="width: 100%; height: auto; max-height: 500px;">
                                    <source src="{{ $video->video_file_url }}" type="video/mp4">
                                    متصفحك لا يدعم تشغيل الفيديو
                                </video>
                            @else
                                <!-- No Video Available -->
                                <div class="no-video text-center py-5" style="background: linear-gradient(135deg, #94D3F3, #0c3f57); color: white;">
                                    <i class="fas fa-video-slash mb-3" style="font-size: 48px;"></i>
                                    <h4>لا يتوفر فيديو</h4>
                                    <p>لم يتم رفع فيديو لهذا المحتوى بعد</p>
                                </div>
                            @endif
                        </div>

                        <!-- Video Info -->
                        <div class="video-info" style="background: white; border-radius: 16px; padding: 30px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                            <div class="d-flex align-items-center mb-3">
                                <div class="video-icon me-3" style="width: 50px; height: 50px; background: linear-gradient(135deg, #94D3F3, #0c3f57); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-play" style="color: white; font-size: 20px;"></i>
                                </div>
                                <h2 class="mb-0" style="color: #333; font-size: 1.8rem; font-weight: 700;">{{ $video->title }}</h2>
                            </div>
                            
                            @if($video->description)
                            <div class="video-description mb-4">
                                <p style="color: #666; line-height: 1.6; font-size: 1.1rem;">{{ $video->description }}</p>
                            </div>
                            @endif
                            
                            <div class="video-meta d-flex flex-wrap gap-4 mb-4">
                                <div class="meta-item d-flex align-items-center">
                                    <i class="fas fa-eye me-2" style="color: #0c3f57;"></i>
                                    <span style="color: #666;">{{ $video->views_count }} مشاهدة</span>
                                </div>
                                <div class="meta-item d-flex align-items-center">
                                    <i class="fas fa-calendar me-2" style="color: #0c3f57;"></i>
                                    <span style="color: #666;">{{ $video->created_at->format('Y/m/d') }}</span>
                                </div>
                                <div class="meta-item d-flex align-items-center">
                                    <i class="fas fa-tag me-2" style="color: #0c3f57;"></i>
                                    <span style="color: #666;">{{ $video->category->name }}</span>
                                </div>
                            </div>
                            
                            <!-- Share Buttons -->
                            <div class="share-buttons">
                                <h6 class="mb-3" style="color: #333;">شارك هذا الفيديو:</h6>
                                <div class="d-flex gap-2">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                        <i class="fab fa-facebook-f me-1"></i>فيسبوك
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($video->title) }}" target="_blank" class="btn btn-outline-info btn-sm">
                                        <i class="fab fa-twitter me-1"></i>تويتر
                                    </a>
                                    <a href="https://wa.me/?text={{ urlencode($video->title . ' - ' . request()->url()) }}" target="_blank" class="btn btn-outline-success btn-sm">
                                        <i class="fab fa-whatsapp me-1"></i>واتساب
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <!-- Related Videos -->
                        @if($relatedVideos->count() > 0)
                        <div class="related-videos" style="background: white; border-radius: 16px; padding: 30px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                            <h5 class="mb-4" style="color: #333; font-weight: 600;">
                                <i class="fas fa-play-circle me-2" style="color: #0c3f57;"></i>فيديوهات ذات صلة
                            </h5>
                            
                            <div class="related-videos-list">
                                @foreach($relatedVideos as $relatedVideo)
                                <div class="related-video-item mb-3" style="display: flex; gap: 15px; padding: 15px; border-radius: 12px; transition: all 0.3s ease; cursor: pointer;" 
                                     onmouseover="this.style.backgroundColor='#f8f9fa'" 
                                     onmouseout="this.style.backgroundColor='transparent'"
                                     onclick="window.location.href='{{ route('frontend.videos.show', $relatedVideo) }}'">
                                    
                                    <!-- Thumbnail -->
                                    <div class="related-thumbnail" style="width: 120px; height: 80px; border-radius: 8px; overflow: hidden; flex-shrink: 0; position: relative;">
                                        @if($relatedVideo->thumbnail)
                                            <img src="{{ $relatedVideo->thumbnail->url }}" alt="{{ $relatedVideo->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                                        @elseif($relatedVideo->youtube_url)
                                            <img src="https://img.youtube.com/vi/{{ $relatedVideo->youtube_embed_url ? explode('/', $relatedVideo->youtube_embed_url)[4] : '' }}/mqdefault.jpg" alt="{{ $relatedVideo->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                                        @else
                                            <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #94D3F3, #0c3f57); display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-play" style="color: white; font-size: 20px;"></i>
                                            </div>
                                        @endif
                                        
                                        <!-- Play Icon -->
                                        <div class="play-icon position-absolute top-50 start-50 translate-middle" style="background: rgba(0,0,0,0.7); border-radius: 50%; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-play" style="color: white; font-size: 12px; margin-left: 2px;"></i>
                                        </div>
                                    </div>
                                    
                                    <!-- Video Info -->
                                    <div class="related-info flex-grow-1">
                                        <h6 class="related-title mb-2" style="color: #333; font-weight: 600; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; font-size: 0.9rem;">{{ $relatedVideo->title }}</h6>
                                        <div class="related-meta d-flex justify-content-between align-items-center">
                                            <span style="color: #666; font-size: 0.8rem;">{{ $relatedVideo->views_count }} مشاهدة</span>
                                            <span style="color: #666; font-size: 0.8rem;">{{ $relatedVideo->created_at->format('m/d') }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            
                            <div class="text-center mt-4">
                                <a href="{{ route('frontend.videos.category', $video->category) }}" class="btn btn-outline-primary">
                                    <i class="fas fa-list me-2"></i>عرض جميع الفيديوهات
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Video Show Section -->
<!--==================================================-->
@endsection

@section('style')
<style>
.related-video-item:hover {
    text-decoration: none;
    color: inherit;
}

.play-icon {
    opacity: 0;
    transition: opacity 0.3s ease;
}

.related-video-item:hover .play-icon {
    opacity: 1;
}

@media (max-width: 768px) {
    .video-show-section {
        padding: 60px 0;
    }
    
    .video-wrapper {
        padding-bottom: 56.25% !important;
    }
    
    .related-video-item {
        flex-direction: column !important;
        text-align: center;
    }
    
    .related-thumbnail {
        width: 100% !important;
        height: 200px !important;
    }
}
</style>
@endsection

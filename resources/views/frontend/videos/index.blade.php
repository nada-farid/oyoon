@extends('frontend.layouts.main')

@section('content')
@include('frontend.partial.breadcrumb', [
    'haeding' => ' مكتبة الفيديو',
    'sub_heading' => ' مكتبة الفيديو لجمعية عيون جدة',
])
<!--==================================================-->
<!-- Start Video Library Section -->
<!--==================================================-->
<div class="video-library-section" style="padding: 80px 0; background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Page Title -->
                <div class="section-title text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <div class="video-icon me-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #94D3F3, #0c3f57); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-play" style="color: white; font-size: 24px;"></i>
                        </div>
                        <h2 class="mb-0" style="color: #0c3f57; font-size: 2.5rem; font-weight: 700;">مكتبة الفيديو</h2>
                    </div>
                    <p class="text-muted" style="font-size: 1.1rem;">استكشف مجموعة واسعة من الفيديوهات التعليمية والتوعوية</p>
                </div>

                <!-- Video Categories Grid -->
                <div class="row g-4">
                    @foreach($categories as $category)
                    <div class="col-lg-3 col-md-6">
                        <div class="video-category-card" style="background: linear-gradient(135deg, #94D3F3, #0c3f57); border-radius: 16px; padding: 40px 30px; text-align: center; color: white; transition: all 0.3s ease; cursor: pointer; height: 100%; display: flex; flex-direction: column; justify-content: center; box-shadow: 0 8px 25px rgba(12, 63, 87, 0.2);" 
                             onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(12, 63, 87, 0.3)'; this.style.background='linear-gradient(135deg, #0c3f57, #94D3F3)'" 
                             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(12, 63, 87, 0.2)'; this.style.background='linear-gradient(135deg, #94D3F3, #0c3f57)'"
                             onclick="window.location.href='{{ route('frontend.videos.category', $category) }}'">
                            
                            <!-- Category Icon -->
                            <div class="category-icon mb-4">
                                @if($category->icon)
                                    <img src="{{ $category->icon->url }}" alt="{{ $category->name }}" style="width: 80px; height: 80px; object-fit: contain;">
                                @else
                                    <div style="width: 80px; height: 80px; background: rgba(255,255,255,0.3); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; border: 2px solid rgba(255,255,255,0.5);">
                                        <i class="fas fa-play" style="font-size: 32px;"></i>
                                    </div>
                                @endif
                            </div>
                            
                            <!-- Category Name -->
                            <h4 class="category-name mb-3" style="font-size: 1.4rem; font-weight: 600; margin: 0;">{{ $category->name }}</h4>
                            
                            <!-- Video Count -->
                            <div class="video-count" style="font-size: 0.9rem; opacity: 0.9;">
                                {{ $category->videos->count() }} فيديو
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Call to Action -->
                <div class="text-center mt-5">
                    <p class="text-muted mb-4">هل تبحث عن محتوى معين؟</p>
                    <a href="{{ route('frontend.contact') }}" class="btn btn-outline-primary btn-lg" style="border-radius: 50px; padding: 12px 30px; border-color: #0c3f57; color: #0c3f57;">
                        <i class="fas fa-envelope me-2"></i>تواصل معنا
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Video Library Section -->
<!--==================================================-->
@endsection

@section('style')
<style>
.video-category-card:hover {
    text-decoration: none;
    color: white;
}

.btn-outline-primary:hover {
    background-color: #0c3f57 !important;
    border-color: #0c3f57 !important;
    color: white !important;
}

@media (max-width: 768px) {
    .video-library-section {
        padding: 60px 0;
    }
    
    .section-title h2 {
        font-size: 2rem !important;
    }
    
    .video-category-card {
        padding: 30px 20px !important;
    }
    
    .category-name {
        font-size: 1.2rem !important;
    }
}
</style>
@endsection

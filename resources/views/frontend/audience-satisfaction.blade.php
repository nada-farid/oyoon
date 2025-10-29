@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'قياس رضا الجمهور',
        'sub_heading' => 'قياس رضا الجمهور - ' . $satisfaction->title,
    ])
    
    <!-- Start Governance Section -->
    <!--==================================================-->
    <div class="governance-section" style="padding: 80px 0; background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Category Header -->
                    <div class="category-header text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <div class="governance-icon me-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #94D3F3, #0c3f57); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-file-contract" style="color: white; font-size: 24px;"></i>
                            </div>
                            <h2 class="mb-0" style="color: #0c3f57; font-size: 2.5rem; font-weight: 700;">{{ $satisfaction->title }}</h2>
                        </div>
                    </div>

                    <!-- Governance Documents Grid -->
                    @if($satisfaction->items->count() > 0)
                    <div class="row g-4">
                        @foreach ($satisfaction->items as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="governance-card" style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transition: all 0.3s ease; cursor: pointer; height: 100%;" 
                                 onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.15)'" 
                                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
                                 onclick="window.open('{{ $item->file ? $item->file->getUrl() : '#' }}', '_blank')">
                                
                                <!-- Document Icon/Thumbnail -->
                                <div class="document-thumbnail position-relative" style="height: 200px; background: linear-gradient(135deg, #94D3F3, #0c3f57); display: flex; align-items: center; justify-content: center;">
                                    @if($item->icon)
                                        <img src="{{ $item->icon->url }}" alt="{{ $item->title }}" style="width: 80px; height: 80px; object-fit: contain;">
                                    @else
                                        <i class="fas fa-file-pdf" style="color: white; font-size: 64px;"></i>
                                    @endif
                                    
                                    <!-- Document Type Badge -->
                                    
                                    <!-- Download Overlay -->
                                    <div class="download-overlay position-absolute top-50 start-50 translate-middle" style="background: rgba(0,0,0,0.7); border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                                        <i class="fas fa-download" style="color: white; font-size: 20px;"></i>
                                    </div>
                                </div>
                                
                                <!-- Document Info -->
                                <div class="document-info p-4">
                                    <h5 class="document-title mb-3" style="color: #333; font-weight: 600; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{ $item->title }}</h5>
                                    
                                    <!-- Download Button -->
                                    <div class="text-center">
                                        <a href="{{ $item->file ? $item->file->getUrl() : '#' }}" target="_blank" class="btn btn-outline-primary btn-sm" style="border-color: #0c3f57; color: #0c3f57;">
                                            <i class="fas fa-download me-2"></i>تحميل المستند
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <!-- No Documents Message -->
                    <div class="text-center py-5">
                        <div class="no-documents-icon mb-4" style="width: 120px; height: 120px; background: linear-gradient(135deg, #94D3F3, #0c3f57); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                            <i class="fas fa-file-slash" style="color: white; font-size: 48px;"></i>
                        </div>
                        <h4 class="text-muted mb-3">لا توجد مستندات متاحة</h4>
                        <p class="text-muted mb-4">لم يتم إضافة أي مستندات في هذه الفئة بعد</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Governance Section -->
    <!--==================================================-->
@endsection

@section('style')
<style>
.governance-card:hover {
    text-decoration: none;
    color: inherit;
}

.download-overlay {
    opacity: 0;
    transition: opacity 0.3s ease;
}

.governance-card:hover .download-overlay {
    opacity: 1;
}

.btn-outline-primary:hover {
    background-color: #0c3f57 !important;
    border-color: #0c3f57 !important;
    color: white !important;
}

@media (max-width: 768px) {
    .governance-section {
        padding: 60px 0;
    }
    
    .category-header h2 {
        font-size: 2rem !important;
    }
    
    .document-thumbnail {
        height: 180px !important;
    }
}
</style>
@endsection

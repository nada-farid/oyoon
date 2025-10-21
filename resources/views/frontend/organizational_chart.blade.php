@extends('frontend.layouts.main')

@section('content')
<!--==================================================-->
<!-- Start Breadcrumb Area -->
<!--==================================================-->
 @include('frontend.partial.breadcrumb', [
        'haeding' => ' الهيكل التنظيمي',
        'sub_heading' => ' الهيكل التنظيمي لجمعية عيون جدة',
    ])
<!--==================================================-->
<!-- End Breadcrumb Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start About Section -->
<!--==================================================-->
<div class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content">
                    <div class="section-title text-center">
                        <h2>الهيكل التنظيمي لجمعية عيون جدة</h2>
                        <p>الهيكل التنظيمي يوضح التسلسل الهرمي والعلاقات التنظيمية داخل الجمعية</p>
                    </div>
                    
                    @if($setting->organizational_chart)
                        <div class="organizational-chart-container text-center">
                            <div class="chart-wrapper">
                                @php
                                    $file = $setting->organizational_chart;
                                    $extension = pathinfo($file->file_name, PATHINFO_EXTENSION);
                                @endphp
                                
                                @if(strtolower($extension) == 'pdf')
                                    <div class="pdf-viewer">
                                        <iframe src="{{ $file->url }}" width="100%" height="800px" frameborder="0">
                                            <p>متصفحك لا يدعم عرض ملفات PDF. 
                                               <a href="{{ $file->url }}" target="_blank" class="btn btn-primary">
                                                   اضغط هنا لتحميل الملف
                                               </a>
                                            </p>
                                        </iframe>
                                        <div class="pdf-actions mt-3">
                                            <a href="{{ $file->url }}" target="_blank" class="btn btn-primary">
                                                <i class="fas fa-download"></i> تحميل الملف
                                            </a>
                                            <a href="{{ $file->url }}" target="_blank" class="btn btn-secondary">
                                                <i class="fas fa-external-link-alt"></i> فتح في نافذة جديدة
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="image-viewer">
                                        <img src="{{ $file->url }}" alt="الهيكل التنظيمي لجمعية عيون جدة" class="img-fluid">
                                        <div class="image-actions mt-3">
                                            <a href="{{ $file->url }}" target="_blank" class="btn btn-primary">
                                                <i class="fas fa-download"></i> تحميل الصورة
                                            </a>
                                            <a href="{{ $file->url }}" target="_blank" class="btn btn-secondary">
                                                <i class="fas fa-external-link-alt"></i> فتح في نافذة جديدة
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="no-chart-message text-center">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle"></i>
                                <h4>الهيكل التنظيمي غير متوفر حالياً</h4>
                                <p>سيتم رفع الهيكل التنظيمي قريباً</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End About Section -->
<!--==================================================-->

<style>
.organizational-chart-container {
    margin: 40px 0;
}

.chart-wrapper {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    padding: 20px;
    margin: 20px 0;
}

.pdf-viewer iframe {
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.image-viewer img {
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    max-width: 100%;
    height: auto;
}

.pdf-actions, .image-actions {
    display: flex;
    gap: 10px;
    justify-content: center;
    flex-wrap: wrap;
}

.pdf-actions .btn, .image-actions .btn {
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.pdf-actions .btn:hover, .image-actions .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.no-chart-message {
    margin: 60px 0;
}

.no-chart-message .alert {
    border: none;
    border-radius: 15px;
    padding: 40px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.no-chart-message .alert i {
    font-size: 3rem;
    color: #6c757d;
    margin-bottom: 20px;
}

.no-chart-message .alert h4 {
    color: #495057;
    margin-bottom: 15px;
}

.no-chart-message .alert p {
    color: #6c757d;
    margin: 0;
}

@media (max-width: 768px) {
    .pdf-viewer iframe {
        height: 500px;
    }
    
    .pdf-actions, .image-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .pdf-actions .btn, .image-actions .btn {
        width: 100%;
        max-width: 300px;
    }
}
</style>
@endsection

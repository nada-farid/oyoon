@extends('frontend.layouts.main')

@section('content')
<!--==================================================-->
<!-- Start Breadcrumb Area -->
<!--==================================================-->
    @include('frontend.partial.breadcrumb', [
        'haeding' => ' الكتيب التعريفي',
        'sub_heading' => ' الكتيب التعريفي لجمعية عيون جدة',
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
                        <h2>الكتيب التعريفي لجمعية عيون جدة</h2>
                        <p>كتيب شامل يحتوي على معلومات مفصلة عن الجمعية وأهدافها وخدماتها</p>
                    </div>
                    
                    @if($setting->brochure)
                        <div class="brochure-container text-center">
                            <div class="brochure-wrapper">
                                <div class="brochure-icon mb-4">
                                    <i class="fas fa-file-pdf fa-5x text-danger"></i>
                                </div>
                                <h4 class="brochure-title mb-3">الكتيب التعريفي</h4>
                                <p class="brochure-description mb-4">
                                    اضغط على الزر أدناه لتحميل أو عرض الكتيب التعريفي الشامل لجمعية عيون جدة
                                </p>
                                
                                <div class="brochure-actions">
                                    <a href="{{ $setting->brochure->url }}" target="_blank" class="btn btn-primary btn-lg me-3">
                                        <i class="fas fa-eye"></i> عرض الكتيب
                                    </a>
                                    <a href="{{ $setting->brochure->url }}" download class="btn btn-success btn-lg me-3">
                                        <i class="fas fa-download"></i> تحميل الكتيب
                                    </a>
                                    <a href="{{ $setting->brochure->url }}" target="_blank" class="btn btn-outline-primary btn-lg">
                                        <i class="fas fa-external-link-alt"></i> فتح في نافذة جديدة
                                    </a>
                                </div>
                                
                                <div class="brochure-info mt-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="info-item">
                                                <i class="fas fa-file-alt"></i>
                                                <span>ملف PDF</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="info-item">
                                                <i class="fas fa-info-circle"></i>
                                                <span>معلومات شاملة</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="info-item">
                                                <i class="fas fa-mobile-alt"></i>
                                                <span>متوافق مع جميع الأجهزة</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="no-brochure-message text-center">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle fa-3x mb-3"></i>
                                <h4>الكتيب التعريفي غير متوفر حالياً</h4>
                                <p>سيتم رفع الكتيب التعريفي قريباً</p>
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
.brochure-container {
    margin: 40px 0;
}

.brochure-wrapper {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    padding: 40px;
    margin: 20px 0;
    border: 2px solid #f8f9fa;
    transition: all 0.3s ease;
}

.brochure-wrapper:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.brochure-icon {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

.brochure-title {
    color: #2c3e50;
    font-weight: 600;
    margin-bottom: 15px;
}

.brochure-description {
    color: #6c757d;
    font-size: 1.1rem;
    line-height: 1.6;
}

.brochure-actions {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 30px;
}

.brochure-actions .btn {
    padding: 12px 25px;
    border-radius: 25px;
    font-weight: 500;
    transition: all 0.3s ease;
    min-width: 180px;
}

.brochure-actions .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.brochure-actions .btn-primary {
    background: linear-gradient(45deg, #007bff, #0056b3);
    border: none;
}

.brochure-actions .btn-success {
    background: linear-gradient(45deg, #28a745, #1e7e34);
    border: none;
}

.brochure-actions .btn-outline-primary {
    border: 2px solid #007bff;
    color: #007bff;
}

.brochure-actions .btn-outline-primary:hover {
    background: #007bff;
    color: white;
}

.brochure-info {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 20px;
}

.info-item {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 10px;
    color: #495057;
    font-weight: 500;
}

.info-item i {
    color: #007bff;
    font-size: 1.2rem;
}

.no-brochure-message {
    margin: 60px 0;
}

.no-brochure-message .alert {
    border: none;
    border-radius: 15px;
    padding: 40px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.no-brochure-message .alert i {
    color: #6c757d;
    margin-bottom: 20px;
}

.no-brochure-message .alert h4 {
    color: #495057;
    margin-bottom: 15px;
}

.no-brochure-message .alert p {
    color: #6c757d;
    margin: 0;
}

@media (max-width: 768px) {
    .brochure-wrapper {
        padding: 25px;
        margin: 10px 0;
    }
    
    .brochure-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .brochure-actions .btn {
        width: 100%;
        max-width: 300px;
        margin-bottom: 10px;
    }
    
    .brochure-info .row {
        flex-direction: column;
        gap: 15px;
    }
    
    .info-item {
        justify-content: flex-start;
    }
}

@media (max-width: 576px) {
    .brochure-icon i {
        font-size: 3rem !important;
    }
    
    .brochure-title {
        font-size: 1.5rem;
    }
    
    .brochure-description {
        font-size: 1rem;
    }
}
</style>
@endsection

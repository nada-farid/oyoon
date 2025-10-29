@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'الاستفسارات والشكاوي',
        'sub_heading' => 'سجل الرد على الاستفسارات والشكاوي',
    ])
    
    <!-- Start Response Log Section -->
    <!--==================================================-->
    <div class="governance-section" style="padding: 80px 0; background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Header -->
                    <div class="category-header text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <div class="governance-icon me-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #94D3F3, #0c3f57); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-file-alt" style="color: white; font-size: 24px;"></i>
                            </div>
                            <h2 class="mb-0" style="color: #0c3f57; font-size: 2.5rem; font-weight: 700;">سجل الرد على الاستفسارات والشكاوي</h2>
                        </div>
                        <p style="color: #666; font-size: 1.1rem; max-width: 800px; margin: 0 auto;">
                            يمكنك الاطلاع على سجل الرد على الاستفسارات والشكاوي من خلال الملف أدناه
                        </p>
                    </div>

                    <!-- File Download Section -->
                    @if($responseLog)
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="response-log-card" style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); text-align: center;">
                                <div class="file-icon mb-4" style="width: 120px; height: 120px; background: linear-gradient(135deg, #94D3F3, #0c3f57); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                    <i class="fas fa-file-pdf" style="color: white; font-size: 48px;"></i>
                                </div>
                                <h4 style="color: #333; margin-bottom: 20px; font-weight: 600;">
                                    سجل الرد على الاستفسارات والشكاوي
                                </h4>
                                <p style="color: #666; margin-bottom: 30px;">
                                    اضغط على الزر أدناه لتحميل الملف
                                </p>
                                <a href="{{ $responseLog->getUrl() }}" target="_blank" class="btn btn-primary btn-lg" style="background: linear-gradient(135deg, #94D3F3, #0c3f57); border: none; border-radius: 12px; padding: 15px 40px; font-size: 1.1rem; font-weight: 600; transition: transform 0.3s, box-shadow 0.3s;">
                                    <i class="fas fa-download me-2"></i>تحميل سجل الرد
                                </a>
                            </div>
                        </div>
                    </div>
                    @else
                    <!-- No File Message -->
                    <div class="text-center py-5">
                        <div class="no-documents-icon mb-4" style="width: 120px; height: 120px; background: linear-gradient(135deg, #94D3F3, #0c3f57); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                            <i class="fas fa-file-slash" style="color: white; font-size: 48px;"></i>
                        </div>
                        <h4 class="text-muted mb-3">لا يوجد ملف متاح حالياً</h4>
                        <p class="text-muted mb-4">سيتم رفع الملف قريباً</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Response Log Section -->
    <!--==================================================-->
@endsection

@section('style')
<style>
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(12, 63, 87, 0.3) !important;
}

@media (max-width: 768px) {
    .governance-section {
        padding: 60px 0;
    }
    
    .category-header h2 {
        font-size: 2rem !important;
    }
    
    .response-log-card {
        padding: 30px 20px !important;
    }
}
</style>
@endsection


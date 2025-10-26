@extends('frontend.layouts.main')

@section('content')
<!--==================================================-->
<!-- Start Breadcrumb Area -->
<!--==================================================-->
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'فريق العمل',
        'sub_heading' => 'فريق العمل ومعلومات الفريق التنفيذي ',
    ])
<!--==================================================-->
<!-- End Breadcrumb Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Team Section -->
<!--==================================================-->
<div class="team-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>فريق العمل</h2>
                </div>
            </div>
        </div>
        
        @if($teams->count() > 0)
            <div class="row">
                @foreach($teams as $team)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="team-member">
                            <div class="member-image">
                                @if($team->image)
                                    <img src="{{ $team->image->getUrl() }}" alt="{{ $team->name }}" class="img-fluid">
                                @else
                                    <img src="{{ asset('frontend/assets/images/team/default-avatar.jpg') }}" alt="{{ $team->name }}" class="img-fluid">
                                @endif
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <!-- Add social links if needed -->
                                    </div>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4 class="member-name">{{ $team->name }}</h4>
                                <p class="member-position">{{ $team->job_title }}</p>
                                <p class="member-email">{{ $team->email }}</p>
                                <p class="member-phone">{{ $team->phone }}</p>
                                @if($team->description)
                                    <p class="member-description">{{ Str::limit($team->description, 100) }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="no-team-message text-center">
                <div class="alert alert-info">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <h4>فريق العمل غير متوفر حالياً</h4>
                    <p>سيتم إضافة معلومات فريق العمل قريباً</p>
                </div>
            </div>
        @endif
    </div>
</div>
<!--==================================================-->
<!-- End Team Section -->
<!--==================================================-->

<style>
.team-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.team-member {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    overflow: hidden;
    margin-bottom: 30px;
    transition: all 0.3s ease;
    position: relative;
}

.team-member:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.member-image {
    position: relative;
    overflow: hidden;
    height: 300px;
}

.member-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.3s ease;
}

.team-member:hover .member-image img {
    transform: scale(1.1);
}

.member-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.team-member:hover .member-overlay {
    opacity: 1;
}

.member-social {
    display: flex;
    gap: 15px;
}

.member-social a {
    width: 40px;
    height: 40px;
    background: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #333;
    text-decoration: none;
    transition: all 0.3s ease;
}

.member-social a:hover {
    background: #007bff;
    color: #fff;
    transform: translateY(-3px);
}

.member-info {
    padding: 25px;
    text-align: center;
}

.member-name {
    font-size: 1.5rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 8px;
}

.member-position {
    font-size: 1.1rem;
    color: #007bff;
    font-weight: 500;
    margin-bottom: 15px;
}

.member-description {
    color: #6c757d;
    font-size: 0.95rem;
    line-height: 1.6;
    margin: 0;
}

.no-team-message {
    margin: 60px 0;
}

.no-team-message .alert {
    border: none;
    border-radius: 15px;
    padding: 40px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.no-team-message .alert i {
    color: #6c757d;
    margin-bottom: 20px;
}

.no-team-message .alert h4 {
    color: #495057;
    margin-bottom: 15px;
}

.no-team-message .alert p {
    color: #6c757d;
    margin: 0;
}

@media (max-width: 768px) {
    .team-section {
        padding: 60px 0;
    }
    
    .member-image {
        height: 250px;
    }
    
    .member-info {
        padding: 20px;
    }
    
    .member-name {
        font-size: 1.3rem;
    }
    
    .member-position {
        font-size: 1rem;
    }
}

@media (max-width: 576px) {
    .team-section {
        padding: 40px 0;
    }
    
    .member-image {
        height: 200px;
    }
    
    .member-info {
        padding: 15px;
    }
    
    .member-name {
        font-size: 1.2rem;
    }
    
    .member-position {
        font-size: 0.9rem;
    }
    
    .member-description {
        font-size: 0.85rem;
    }
}
</style>
@endsection

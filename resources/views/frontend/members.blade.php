@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => ' العضويات',
        'sub_heading' => ' الجمعية العمومية',
    ])

    <!-- Start Members Section -->
    <!--==================================================-->
    <div class="members-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="charina-section-title text-center pb-50">
                        <h1 class="members-main-title">
                            الجمعية العمومية
                            <span class="members-logo">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="18" stroke="#008080" stroke-width="2" fill="none"/>
                                    <circle cx="15" cy="15" r="3" fill="#008080"/>
                                    <circle cx="25" cy="15" r="3" fill="#008080"/>
                                    <circle cx="20" cy="25" r="3" fill="#008080"/>
                                    <path d="M15 15 L20 25 L25 15" stroke="#008080" stroke-width="2" fill="none"/>
                                </svg>
                            </span>
                        </h1>
                        <p class="members-subtitle">
                            يتم تحديث سجل أعضاء الجمعية العمومية عند التغير في العضويات
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row members-grid">
                <!-- Special Register Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="member-card register-card">
                        <div class="register-content">
                            <h3>سجل أعضاء الجمعية العمومية</h3>
                            <p class="register-date">2024/11/04 - 1446/05/02</p>
                            <div class="register-logo">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="15" cy="15" r="13" stroke="white" stroke-width="2" fill="none"/>
                                    <circle cx="11" cy="11" r="2" fill="white"/>
                                    <circle cx="19" cy="11" r="2" fill="white"/>
                                    <circle cx="15" cy="19" r="2" fill="white"/>
                                    <path d="M11 11 L15 19 L19 11" stroke="white" stroke-width="2" fill="none"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member Cards -->
                @foreach ($members as $member)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="member-card">
                            <div class="member-photo">
                                @if($member->getFirstMediaUrl('photo'))
                                    <img src="{{ $member->getFirstMediaUrl('photo') }}" alt="{{ $member->name }}">
                                @else
                                    <div class="default-photo">
                                        <i class="fas fa-user"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">{{ $member->name }}</h3>
                                <p class="member-type">
                                    @if($member->type)
                                        {{ $member->type->title }} في الجمعية العمومية
                                    @else
                                        عضوية عادية في الجمعية العمومية
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Members Section -->
@endsection

@section('style')
<style>
    .members-section {
        padding: 80px 0;
        background-color: #f8f9fa;
    }

    .members-main-title {
        color: #008080;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }

    .members-logo svg {
        width: 50px;
        height: 50px;
    }

    .members-subtitle {
        color: #666;
        font-size: 1.1rem;
        margin-bottom: 0;
    }

    .members-grid {
        margin-top: 50px;
    }

    .member-card {
        background: white;
        border: 2px solid #008080;
        border-radius: 15px;
        padding: 25px;
        height: 200px;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .member-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 128, 128, 0.2);
    }

    .register-card {
        background: linear-gradient(135deg, #008080, #00A0A0);
        color: white;
        border: none;
        position: relative;
        overflow: hidden;
    }

    .register-content {
        width: 100%;
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .register-content h3 {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 10px;
        color: white;
    }

    .register-date {
        font-size: 0.9rem;
        opacity: 0.9;
        margin-bottom: 15px;
    }

    .register-logo {
        display: flex;
        justify-content: center;
    }

    .member-photo {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        overflow: hidden;
        margin-left: 20px;
        border: 2px solid #e0e0e0;
        flex-shrink: 0;
    }

    .member-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .default-photo {
        width: 100%;
        height: 100%;
        background: #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #999;
        font-size: 2rem;
    }

    .member-info {
        flex: 1;
        text-align: right;
    }

    .member-name {
        color: #008080;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .member-type {
        color: #333;
        font-size: 0.9rem;
        margin-bottom: 0;
        line-height: 1.4;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .members-main-title {
            font-size: 2rem;
            flex-direction: column;
            gap: 10px;
        }

        .members-logo svg {
            width: 40px;
            height: 40px;
        }

        .member-card {
            height: auto;
            min-height: 180px;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .member-photo {
            margin-left: 0;
            margin-bottom: 15px;
            width: 70px;
            height: 70px;
        }

        .member-info {
            text-align: center;
        }

        .register-content h3 {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 576px) {
        .members-section {
            padding: 60px 0;
        }

        .members-main-title {
            font-size: 1.8rem;
        }

        .members-subtitle {
            font-size: 1rem;
        }

        .member-card {
            padding: 15px;
        }

        .member-name {
            font-size: 1.1rem;
        }

        .member-type {
            font-size: 0.85rem;
        }
    }
</style>
@endsection

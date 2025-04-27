<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>عيون جدة</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{asset('frontend/assets/images/fav-icon/icon.png')}}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animated-text.css')}}" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}" type="text/css" media="all" />
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/theme-default.css')}}" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.transitions.css')}}" type="text/css" media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{asset('frontend/venobox/venobox.css')}}" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}" type="text/css" media="all" />
    <!-- modernizr js -->
    <script src="{{asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/02c22aec7b.js" crossorigin="anonymous"></script>


    <!----slider---->
    <script src="https://code.jquery.com/jquery.js"></script>

    <script src="{{asset('frontend/src/skdslider.min.js')}}"></script>
    <link href="{{asset('frontend/src/skdslider.css')}}" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#demo1').skdslider({
                'delay': 5000,
                'animationSpeed': 2000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'fading'
            });
            jQuery('#demo2').skdslider({
                'delay': 5000,
                'animationSpeed': 1000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'sliding'
            });
            jQuery('#demo3').skdslider({
                'delay': 5000,
                'animationSpeed': 2000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'fading'
            });

            jQuery('#responsive').change(function() {
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>
    <!----menu---->
    @yield('style')
</head>

<body>

    <!-- loder -->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>

    <!--==================================================-->
    <!-- Start  Header Top Menu Area Css -->
    <!--==================================================-->
    <div class="header_top_menu">
        <div class="container">
            <div class="row ">

                <div class="col-md-6 ">
                    <div class="header-links">
                        <ul>
                            <li><span><i class="fa-solid fa-phone"></i></span> <a href="#">{{$setting->phone}}</a></li>
                            <li><span><i class="fa-solid fa-envelope"></i></span> <a
                                    href="#">{{$setting->email}}</a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <div class="header_top_menu_icon text-left">
                        <div class="menu-text">
                            <p> <a href="{{route('login')}}"><i class="bi bi-person-circle"></i> دخول الأدارة </a></p>
                        </div>

                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End  Header Top Menu Area Css -->
    <!--===================================================-->
    <!--==================================================-->
    <!-- Start  Main Menu Area -->
    <!--==================================================-->
    <div id="sticky-header" class="charina_nav_manu ">
        <div class="container">
            <div class="row d-flex align-items-center" style="justify-content:space-between;">


                <div class="logo">
                    <a class="logo_img" href="{{route('frontend.home')}}" title="">
                        <img src="{{$setting->getFirstMediaUrl('logo')}}" alt="" />
                    </a>

                </div>

                <div class="menu">
                    <nav class="charina_menu">
                        <ul class="nav_scroll">
                            <li>
                                <a href="#">عن الجمعية <span><i class="bi bi-chevron-down"></i></span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('frontend.about')}}">عن الجمعية</a></li>
                                    <li><a href="{{route('frontend.chairman')}}">كلمة رئيس مجلس الإدارة</a></li>
                                    <li><a href="{{route('frontend.directors')}}">مجلس الإدارة</a></li>
                                    <li><a href="{{route('frontend.partners')}}">شركاؤنا</a></li>
                                    <li><a href="{{route('frontend.scope')}}">نطاق الجمعية </a></li>
                                    <li><a href="{{route('frontend.certificates')}}">الشهادات </a></li>
                                    {{-- <li><a  href="{{route('frontend.sustainability')}}"> مساهماتنا </a></li> --}}

                                </ul>
                            </li>
                            <li>
                                <a href="#">الحوكمة <span><i class="bi bi-chevron-down"></i></span></a>
                                <ul class="sub-menu">
                                    @foreach ($hawkma_categories as $category)
                                    <li>
                                        <a href="{{ route('frontend.hawkma', $category) }}"><span>
                                                {{ $category->name }}</span></a>
                                    </li>
                                @endforeach

                                </ul>
                            </li>
                            <li>
                                <a href="#">التقارير <span><i class="bi bi-chevron-down"></i></span></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ route('frontend.reports', 'yearly') }}"><span> تقارير سنوية
                                            </span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.reports', 'money') }}"><span> تقارير مالية
                                            </span></a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">المركز الاعلامي <span><i class="bi bi-chevron-down"></i></span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('frontend.news')}}">الأخبار</a></li>
                                    <li><a href="{{route('frontend.articles')}}">المقالات</a></li>
                                    <li><a href="{{route('frontend.media')}}">الصور</a></li>

                                </ul>
                            </li>
                            <li><a href="{{route('frontend.projects')}}"> مبادرتنا </a></li>
                            <li><a href="{{route('frontend.support')}}"> لماذا تدعمنا؟ </a></li>
                            <li>
                                <a href="#"> العضويات <span><i class="bi bi-chevron-down"></i></span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('frontend.membership_types')}}">انواع العضويات</a></li>
                                    <li><a href="{{route('frontend.membership_guides')}}">دليل التسجيل في العضوية</a></li>
                                    <li><a href="{{route('frontend.membership')}}"> تسجيل العضوية</a></li>
                                </ul>
                            </li>

                            <li><a href="{{route('frontend.contact')}}">التواصل</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="header-button">
                    <a href="{{$setting->donation_url}}"> تبرع الأن  <i class="bi bi-suit-heart"></i> </a>
                </div>

            </div>
        </div>
    </div>

    <!--  Mobile Menu Area -->
    <div class="mobile-menu-area   d-lg-none ">
        <div class="logo">
            <a class="logo_img" href="{{route('frontend.home')}}" title="">
                <img src="{{asset('frontend/assets/images/logo.png')}}" alt="" height="60" />
            </a>

        </div>
        <div class="mobile-menu">


            <nav class="charina_menu">
                <ul class="nav_scroll">
                    <li>
                        <a href="#">عن الجمعية <span><i class="bi bi-chevron-down"></i></span></a>
                        <ul class="sub-menu">
                            <li><a href="{{route('frontend.about')}}">عن الجمعية</a></li>
                            <li><a href="{{route('frontend.chairman')}}">كلمة رئيس مجلس الإدارة</a></li>
                            <li><a href="{{route('frontend.directors')}}">مجلس الإدارة</a></li>
                            <li><a href="{{route('frontend.partners')}}">شركاؤنا</a></li>
                            <li><a href="{{route('frontend.scope')}}">نطاق الجمعية </a></li>
                            <li><a href="{{route('frontend.certificates')}}">الشهادات </a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">الحوكمة <span><i class="bi bi-chevron-down"></i></span></a>
                        <ul class="sub-menu">
                            @foreach ($hawkma_categories as $category)
                            <li>
                                <a href="{{ route('frontend.hawkma', $category) }}"><span>
                                        {{ $category->name }}</span></a>
                            </li>
                        @endforeach
                        </ul>
                    </li>

                    <li>
                        <a href="#">المركز الاعلامي <span><i class="bi bi-chevron-down"></i></span></a>
                        <ul class="sub-menu">
                            <li><a href="{{route('frontend.news')}}">الأخبار</a></li>
                            <li><a href="{{route('frontend.articles')}}">المقالات</a></li>
                            <li><a href="media.html">الصور</a></li>

                        </ul>
                    </li>
                    <li><a href="initiative.html"> مبادرتنا </a></li>
                    <li><a href="{{route('frontend.support')}}"> لماذا تدعمنا؟ </a></li>
                    <li>
                        <a href="#"> العضويات <span><i class="bi bi-chevron-down"></i></span></a>
                        <ul class="sub-menu">
                            <li><a href="{{route('frontend.membership_types')}}">انواع العضويات</a></li>
                            <li><a href="{{route('frontend.membership_guides')}}">دليل التسجيل في العضوية</a></li>
                            <li><a href="{{route('frontend.membership')}}"> تسجيل العضوية</a></li>
                        </ul>
                    </li>

                    <li><a href="{{route('frontend.contact')}}">التواصل</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Main Menu Area -->
    @yield('content')
   


    <!-- Start  Footer Section -->
    <!--==================================================-->

    <div class="footer-section">
        <div class="container">
            <div class="row footer-bg">
                <div class="col-lg-3 col-md-6">
                    <div class="widgets-company-info">
                        <!-- charina logo -->
                        <div class="charina-logo">
                            <a class="logo_img" href="{{route('frontend.home')}}" title="">
                                <img src="{{asset('frontend/assets/images/logo-footer.png')}}" alt="" />
                            </a>
                        </div>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="widget-nav-menu">
                        <!-- widget title -->
                        <h4 class="widget-title">روابط سريعة </h4>
                        <div class="menu-quick-link-content">
                            <ul class="footer-widget-list">
                                 <li><a href="{{route('frontend.contact')}}"> <i class="bi bi-chevron-double-left"></i>التواصل</a></li>
                                 <li><a href="{{route('frontend.directors')}}"><i class="bi bi-chevron-double-left"></i>مجلس الإدارة</a></li>
                                <li><a href="{{$setting->donation_url}}"> <i class="bi bi-chevron-double-left"></i> تبرع معنا </a></li>
                                <li><a href="{{route('frontend.membership')}}"> <i class="bi bi-chevron-double-left"></i> سجل عضويتك </a></li>
                                <li><a href="{{route('frontend.news')}}" > <i class="bi bi-chevron-double-left"></i>الأخبار</a></li>
                                <li><a href="{{route('frontend.articles')}}"><i class="bi bi-chevron-double-left"></i>المقالات</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pl-20">
                    <div class="widget-contact-info">
                        <!-- widget title -->
                        <h4 class="widget-title">تواصل معنا </h4>
                        <!-- widget content -->
                        <div class="footer-widget-content">
                            <!-- wedget title -->
                            <!-- footer info desc -->
                            <div class="footer-info-desc">
                                <div class="icon"><i class="fa-solid fa-mobile"></i></div>
                                <p> {{$setting->phone}} </p>

                            </div>

                            <!-- footer info desc -->
                            <div class="footer-info-desc">
                                <div class="icon"><i class="fa-solid fa-map"></i></div>
                                <p> {{$setting->address}}</p>

                            </div>


                            <!-- footer info desc -->
                            <div class="footer-info-desc">
                                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                                <p> {{$setting->email}}</p>

                            </div>

                            <!-- footer info desc -->
                            {{-- <div class="footer-info-desc">
                                <div class="icon"><i class="fa-solid fa-globe"></i></div>
                                <p> www.oyoonjeddah.org.sa </p>

                            </div> --}}

                        </div>
                    </div>
                </div>

                <!-- foter shape -->
                <div class="footer-shape bounce-animate">
                    <img src="{{asset('frontend/assets/images/resource/footer-arrow.png')}}" alt="">
                </div>
                <div class="footer-shape2 dance">
                    <img src="{{asset('frontend/assets/images/resource/heart-icon.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-bottom-content-copy">
                        <p> جيمع الحقوق محفوظة جمعية عيون جدة © بواسطة تكامل الرؤى </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <!--==================================================-->
    <!-- End  Footer Section -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start scrollup section Section -->
    <!--==================================================-->
    <div class="prgoress_indicator active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 270.456;">
            </path>
        </svg>
    </div>
    <!--==================================================-->
    <!-- Start scrollup section Section -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start Search Popup Area -->
    <!--==================================================-->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"><i
                    class="far fa-times-circle"></i></span></button>
        <button class="close-search"><i class="fas fa-arrow-up"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!--==================================================-->
    <!-- Start Search Popup Area -->
    <!--==================================================-->
    <!-- jquery js --
 <script src="{{asset('frontend/assets/js/vendor/jquery-3.2.1.min.js')}}"></script>
 <!-- bootstrap js -->
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <!-- carousel js -->
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <!-- counterup js -->
    <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <!-- waypoints js -->
    <script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('frontend/assets/js/wow.js')}}"></script>
    <!-- imagesloaded js -->
    <script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- venobox js -->
    <script src="{{asset('frontend/venobox/venobox.js')}}"></script>
    <!-- ajax mail js -->
    <script src="{{asset('frontend/assets/js/ajax-mail.js')}}"></script>
    <!--  animated-text js -->
    <script src="{{asset('frontend/assets/js/animated-text.js')}}"></script>
    <!-- venobox min js -->
    <script src="{{asset('frontend/venobox/venobox.min.js')}}"></script>
    <!-- isotope js -->
    <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- jquery meanmenu js -->
    <script src="{{asset('frontend/assets/js/jquery.meanmenu.js')}}"></script>
    <!-- jquery scrollup js -->
    <script src="{{asset('frontend/assets/js/jquery.scrollUp.js')}}"></script>
    <!-- barfiller js -->
    <script src="{{asset('frontend/assets/js/jquery.barfiller.js')}}"></script>
    <!-- theme js -->
    <script src="{{asset('frontend/assets/js/theme.js')}}"></script>

    <!----slider---->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-3415878-12', 'dandywebsolution.com');
        ga('send', 'pageview');
    </script>
    <!----slider---->
    @yield('scripts')
</body>

</html>

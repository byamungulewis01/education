<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/edumall/edumall/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 16:24:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Boost Consultancy & Coaching Hub LTD" />
    <meta name="keywords" content="Boost Consultancy & Coaching Hub LTD,Boost Consultancy,BCCH LTD">
    <!-- Favicon -->
    <title>@yield('title') | BCCH</title>

    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/boost.png') }}" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&amp;display=swap"
        rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/edumall-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/bootstrap.min.css') }}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/perfect-scrollbar.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/plugins/jquery.powertip.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/plugins/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/select2.min.css') }}"> --}}

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

</head>

<body>

    <main class="main-wrapper">

        <!-- Header start -->
        <div class="header-section header-sticky">

           <!-- Header Top Start -->
           <div class="header-top d-none d-sm-block">
            <div class="container">

                <!-- Header Top Bar Wrapper Start -->
                <div class="header-top-bar-wrap d-sm-flex justify-content-between">

                    <div class="header-top-bar-wrap__info">
                        <ul class="header-top-bar-wrap__info-list">
                            <li><a href="tel:+8819906886"><i class="fas fa-phone"></i> <span class="info-text">(+88) 1990 6886</span></a></li>
                            <li><a href="mailto:agency@example.com"><i class="far fa-envelope"></i> <span class="info-text">agency@example.com</span></a></li>
                        </ul>
                    </div>

                    <div class="header-top-bar-wrap__info d-sm-flex">

                        <ul class="header-top-bar-wrap__info-social">
                            <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>

                </div>
                <!-- Header Top Bar Wrapper End -->

            </div>
        </div>
        <!-- Header Top End -->

            <!-- Header Main Start -->
            <div class="header-main">
                <div class="container">
                    <!-- Header Main Wrapper Start -->
                    <div class="header-main-wrapper">

                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a class="header-logo__logo" href="{{ route('index') }}"><img
                                    src="{{ asset('frontend/logo.png') }}" width="296" height="64"
                                    alt="Logo"></a>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Category Menu Start -->
                        <div class="header-category-menu d-none d-xl-block">
                            <a href="#" class="header-category-toggle">
                                <div class="header-category-toggle__icon">
                                    <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <path
                                                d="M2,14 C3.1045695,14 4,14.8954305 4,16 C4,17.1045695 3.1045695,18 2,18 C0.8954305,18 0,17.1045695 0,16 C0,14.8954305 0.8954305,14 2,14 Z M9,14 C10.1045695,14 11,14.8954305 11,16 C11,17.1045695 10.1045695,18 9,18 C7.8954305,18 7,17.1045695 7,16 C7,14.8954305 7.8954305,14 9,14 Z M16,14 C17.1045695,14 18,14.8954305 18,16 C18,17.1045695 17.1045695,18 16,18 C14.8954305,18 14,17.1045695 14,16 C14,14.8954305 14.8954305,14 16,14 Z M2,7 C3.1045695,7 4,7.8954305 4,9 C4,10.1045695 3.1045695,11 2,11 C0.8954305,11 0,10.1045695 0,9 C0,7.8954305 0.8954305,7 2,7 Z M9,7 C10.1045695,7 11,7.8954305 11,9 C11,10.1045695 10.1045695,11 9,11 C7.8954305,11 7,10.1045695 7,9 C7,7.8954305 7.8954305,7 9,7 Z M16,7 C17.1045695,7 18,7.8954305 18,9 C18,10.1045695 17.1045695,11 16,11 C14.8954305,11 14,10.1045695 14,9 C14,7.8954305 14.8954305,7 16,7 Z M2,0 C3.1045695,0 4,0.8954305 4,2 C4,3.1045695 3.1045695,4 2,4 C0.8954305,4 0,3.1045695 0,2 C0,0.8954305 0.8954305,0 2,0 Z M9,0 C10.1045695,0 11,0.8954305 11,2 C11,3.1045695 10.1045695,4 9,4 C7.8954305,4 7,3.1045695 7,2 C7,0.8954305 7.8954305,0 9,0 Z M16,0 C17.1045695,0 18,0.8954305 18,2 C18,3.1045695 17.1045695,4 16,4 C14.8954305,4 14,3.1045695 14,2 C14,0.8954305 14.8954305,0 16,0 Z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="header-category-toggle__text">Schools</div>
                            </a>

                            <div class="header-category-dropdown-wrap">
                                <ul class="header-category-dropdown">
                                    @foreach (\App\Models\Category::orderByDesc('id')->get() as $item)
                                        <li>
                                            <a class="categories-course"
                                                href="{{ route('show_school', encrypt($item->id)) }}">
                                                <div class="categories-course__thumbnail">
                                                    <img src="{{ asset('images/trainings/category/' . $item->imageName) }}"
                                                        alt="Course" width="62" height="50">
                                                </div>
                                                <div class="categories-course__caption">
                                                    <h3 class="categories-course__title">{{ $item->title }}</h3>
                                                    <p>{{ \Illuminate\Support\Str::limit($item->description, 100, '...') }}
                                                    </p>


                                                </div>
                                            </a>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                        <!-- Header Navigation Start -->
                        <div class="header-navigation d-none d-xl-block">
                            <nav class="menu-primary">
                                <ul class="menu-primary__container">
                                    <li><a href="{{ route('trainings') }}"
                                        class="{{ Request::routeIs('trainings') ? 'active' : '' }}"><span>Courses</span></a></li>
                                    <li><a href="{{ route('about') }}"
                                            class="{{ Request::routeIs('about') ? 'active' : '' }}"><span>About
                                                Us</span></a></li>

                                    <li><a href="{{ route('consultancy') }}"><span>Consultancy</span></a>
                                        @php
                                            $consultancies = \App\Models\Consultance::orderBy('title')->get();
                                        @endphp
                                        <ul class="mega-menu">
                                            <li>
                                                <!-- Mega Menu Content Start -->
                                                @foreach ($consultancies->chunk(4) as $chunk)
                                                    <div class="mega-menu-content">
                                                        <div class="row">
                                                            @foreach ($chunk as $item)
                                                                <div class="col-xl-6">
                                                                    <div class="menu-content-list">
                                                                        <a href="{{ route('consultancyShow', $item->id) }}"
                                                                            class="menu-content-list__link">{{ $item->title }}</a>

                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                @endforeach
                                                <!-- Mega Menu Content Start -->
                                            </li>
                                        </ul>




                                    </li>

                                    <li><a  href="{{ route('accreditations') }}"
                                        class="{{ Request::routeIs('accreditations') ? 'active' : '' }}"><span>Partners &
                                                Accreditation</span></a></li>
                                    <li><a href="{{ route('contact') }}"
                                            class="{{ Request::routeIs('contact') ? 'active' : '' }}"><span>Contact
                                                Us</span></a></li>

                                </ul>
                            </nav>
                        </div>
                        <!-- Header Navigation End -->
                        <!-- Header Category Menu End -->

                        <!-- Header Inner Start -->
                        <div class="header-inner">

                            <!-- Header User Button Start -->
                            <div class="header-user d-none d-lg-flex">
                                <div class="header-user__button">
                                    <button class="header-user__signup btn btn-primary btn-hover-primary"
                                        data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>
                                </div>
                            </div>
                            <!-- Header User Button End -->

                            <!-- Header Mobile Toggle Start -->
                            <div class="header-toggle">
                                <button class="header-toggle__btn d-xl-none" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasMobileMenu">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                                <button class="header-toggle__btn search-open d-flex d-md-none">
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                </button>
                            </div>
                            <!-- Header Mobile Toggle End -->

                        </div>
                        <!-- Header Inner End -->

                    </div>
                    <!-- Header Main Wrapper End -->
                </div>
            </div>
            <!-- Header Main End -->

        </div>
        <!-- Header End -->



        @yield('body')
        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end offcanvas-mobile" id="offcanvasMobileMenu"
            style="background-image: url({{ asset('frontend/images/mobile-bg.jpg') }});">
            <div class="offcanvas-header bg-white">
                <div class="offcanvas-logo">
                    <a class="offcanvas-logo__logo" href="#"><img src="{{ asset('frontend/logo.png') }}"
                            alt="Logo"></a>
                </div>
                <button type="button" class="offcanvas-close" data-bs-dismiss="offcanvas"><i
                        class="fas fa-times"></i></button>
            </div>

            <div class="offcanvas-body">
                <nav class="canvas-menu">
                    <ul class="offcanvas-menu">
                        <li><a class="active" href="#"><span>Schools</span></a>

                            <ul class="mega-menu">
                                <li>
                                    <!-- Mega Menu Content Start -->
                                    <div class="mega-menu-content">

                                        <div class="menu-content-list">
                                            @foreach (\App\Models\Category::orderByDesc('id')->get() as $item)
                                            <a href="{{ route('show_school', encrypt($item->id)) }}" class="menu-content-list__link">{{ $item->title }}</a>
                                            @endforeach
                                        </div>

                                    </div>
                                    <!-- Mega Menu Content Start -->
                                </li>
                            </ul>




                        </li>
                        <li><a href="#"><span>About Us</span></a></li>
                        <li><a href="{{ route('consultancy') }}"><span>Consultancy</span></a></li>
                        <li><a href="#"><span>Partners &  Accreditation</span></a></li>
                        <li><a href="#"><span>Contact Us</span></a></li>
                    </ul>
                </nav>
            </div>

            <!-- Header User Button Start -->
            <div class="offcanvas-user d-lg-none">
                <div class="offcanvas-user__button">
                    <button class="offcanvas-user__login btn btn-secondary btn-hover-secondarys"
                        data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>
                </div>
                <div class="offcanvas-user__button">
                    <a class="offcanvas-user__signup btn btn-primary btn-hover-primary" href="{{ route('trainings') }}">Sign Up</a>
                </div>
            </div>
            <!-- Header User Button End -->

        </div>
        <!-- Offcanvas End -->
        <!-- Footer Start -->
        <div class="footer-section footer-bg-1">

            <!-- Footer Widget Area Start -->
            <div class="footer-widget-area section-padding-01">
                <div class="container">
                    <div class="row gy-6">
                        <div class="col-lg-4">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget text-center">
                                <a href="#" class="footer-widget__logo"><img
                                        src="{{ asset('frontend/logo.png') }}" alt="Logo"
                                        width="150" height="32"></a>
                                <div class="footer-widget__social">
                                    <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.youtube.com/" target="_blank"><i
                                            class="fab fa-youtube"></i></a>
                                </div>
                                <p class="footer-widget__copyright">&copy; {{ now()->year }} <span> BCCH </span> Made with <i
                                        class="fa fa-heart"></i> by <a
                                        href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=demo&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio&amp;u=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio">BMG</a>
                                </p>
                                <ul class="footer-widget__link flex-row gap-8 justify-content-center">
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                        <div class="col-lg-8">
                            <div class="row gy-6">

                                <div class="col-sm-4">
                                    <!-- Footer Widget Start -->
                                    <div class="footer-widget">
                                        <h4 class="footer-widget__title">About</h4>

                                        <ul class="footer-widget__link">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Courses</a></li>
                                            <li><a href="#">Instructor</a></li>
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Become A Teacher</a></li>
                                        </ul>
                                    </div>
                                    <!-- Footer Widget End -->
                                </div>
                                <div class="col-sm-4">
                                    <!-- Footer Widget Start -->
                                    <div class="footer-widget">
                                        <h4 class="footer-widget__title">Links</h4>

                                        <ul class="footer-widget__link">
                                            <li><a href="#">News & Blogs</a></li>
                                            <li><a href="#">Library</a></li>
                                            <li><a href="#">Gallery</a></li>
                                            <li><a href="#">Partners</a></li>
                                            <li><a href="#">Career</a></li>
                                        </ul>
                                    </div>
                                    <!-- Footer Widget End -->
                                </div>
                                <div class="col-sm-4">
                                    <!-- Footer Widget Start -->
                                    <div class="footer-widget">
                                        <h4 class="footer-widget__title">Support</h4>

                                        <ul class="footer-widget__link">
                                            <li><a href="#">Documentation</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Forum</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                        </ul>
                                    </div>
                                    <!-- Footer Widget End -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Footer Widget Area End -->

        </div>
        <!-- Footer End -->

        <!--Back To Start-->
        <button id="backBtn" class="back-to-top backBtn">
            <i class="arrow-top fas fa-arrow-up"></i>
            <i class="arrow-bottom fas fa-arrow-up"></i>
        </button>
        <!--Back To End-->


    </main>

    <!-- Log In Modal Start -->
    <div class="modal fade" id="loginModal">
        <div class="modal-dialog modal-dialog-centered modal-login">

            <!-- Modal Wrapper Start -->
            <div class="modal-wrapper">
                <button class="modal-close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>

                <!-- Modal Content Start -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Login</h5>
                        <p class="modal-description">Don't have an account yet? <button data-bs-toggle="modal"
                                data-bs-target="#registerModal">Sign up for free</button></p>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('login_auth') }}">
                            @csrf
                            <div class="modal-form">
                                <label class="form-label">Username or email</label>
                                <input type="text" class="form-control" name="email" placeholder="Your email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="modal-form">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="modal-form d-flex justify-content-between flex-wrap gap-2">
                                <div class="form-check">
                                    <input type="checkbox" id="rememberme">
                                    <label for="rememberme">Remember me</label>
                                </div>
                                <div class="text-end">
                                    <a class="modal-form__link" href="#">Forgot your password?</a>
                                </div>
                            </div>
                            <div class="modal-form">
                                <button type="submit" class="btn btn-primary btn-hover-secondary w-100">Log
                                    In</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- Modal Content End -->

            </div>
            <!-- Modal Wrapper End -->

        </div>
    </div>
    <!-- Log In Modal End -->



    <!-- Edumall Demo Option Start -->
    <div class="edumall-demo-option">

        <div class="edumall-demo-option__toolbar">
            <button class="toolbar-action demo-open" data-bs-tooltip="tooltip" data-bs-placement="left"
                title="Select Demo"><i class="fas fa-pencil-ruler"></i></button>
            <a class="toolbar-action" href="https://hasthemes.com/contact-us/" data-bs-tooltip="tooltip"
                data-bs-placement="left" title="Support Channel"><i class="far fa-life-ring"></i></a>
            <a class="toolbar-action" href="https://1.envato.market/qnL5nL" data-bs-tooltip="tooltip"
                data-bs-placement="left" title="Purchase EduMall"><i class="fas fa-shopping-basket"></i></a>
        </div>

        <div class="edumall-demo-option__panel">

            <div class="edumall-demo-option__header">
                <h5 class="edumall-demo-option__title">EduMall - Professional LMS Education Center HTML Template</h5>
                <a class="edumall-demo-option__btn btn btn-primary btn-hover-secondary"
                    href="https://1.envato.market/qnL5nL"><i class="fas fa-shopping-basket"></i> Buy Now</a>
            </div>

            <div class="edumall-demo-option__body">
                <!-- <div class="edumall-demo-option-item">
                <a href="" data-bs-tooltip="tooltip" data-bs-placement="top" title="Landing Page">
                    <img src="{{ asset('frontend/images/demo/landing.jpg') }}" alt="">
                </a>
            </div> -->
                <div class="edumall-demo-option-item">
                    <a href="index.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Main Demo">
                        <img src="{{ asset('frontend/images/demo/home-01.jpg') }}" alt="Home" width="130"
                            height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-course-hub.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="Course Hub">
                        <img src="{{ asset('frontend/images/demo/home-02.jpg') }}" alt="Home" width="130"
                            height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-online-academy.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="Online Academy">
                        <img src="{{ asset('frontend/images/demo/home-03.jpg') }}" alt="Home" width="130"
                            height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-education-center.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="Education Center">
                        <img src="{{ asset('frontend/images/demo/home-04.jpg') }}" alt="Home" width="130"
                            height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-university.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="University">
                        <img src="{{ asset('frontend/images/demo/home-05.jpg') }}" alt="Home" width="130"
                            height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-language-academic.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="Language Academic">
                        <img src="{{ asset('frontend/images/demo/home-06.jpg') }}" alt="Home" width="130"
                            height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-single-instructor.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="Single Instructor">
                        <img src="{{ asset('frontend/images/demo/home-07.jpg') }}" alt="Home" width="130"
                            height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-dev.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Dev">
                        <img src="{{ asset('frontend/images/demo/home-08.jpg') }}" alt="Home" width="130"
                            height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-online-art.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="Online Art">
                        <img src="{{ asset('frontend/images/demo/home-09.jpg') }}" alt="Home" width="130"
                            height="158">
                    </a>
                </div>
            </div>

        </div>

    </div>
    <!-- Edumall Demo Option End -->




    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="{{ asset('frontend/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    {{-- <script src="{{ asset('frontend/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script> --}}
    <script src="{{ asset('frontend/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('frontend/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/parallax.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.powertip.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.sticky-kit.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/flatpickr.js') }}"></script>
    {{-- <script src="{{ asset('frontend/js/plugins/range-slider.js') }}"></script> --}}
    <script src="{{ asset('frontend/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(event) {
                $(this).find("button[type=submit]").addClass('btn btn-outline-primary btn-load').html(`<span class="d-flex align-items-center">
                                            <span class="spinner-border flex-shrink-0" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </span>
                                            <span class="flex-grow-1 ms-2">
                                                Loading...
                                            </span>
                                        </span>`).prop("disabled", true);
            });
        });
    </script>
    @yield('js')

</body>

</html>

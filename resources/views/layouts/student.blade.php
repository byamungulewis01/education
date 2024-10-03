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
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/jquery.powertip.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/select2.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    @yield('css')

</head>

<body class="dashboard-page dashboard-nav-fixed">

    <!-- Dashboard Nav Start -->
    <div class="dashboard-nav offcanvas offcanvas-start" id="offcanvasDashboard">

        <!-- Dashboard Nav Wrapper Start -->
        <div class="dashboard-nav__wrapper">
            <!-- Dashboard Nav Header Start -->
            <div class="offcanvas-header dashboard-nav__header dashboard-nav-header">

                <div class="dashboard-nav__toggle d-xl-none">
                    <button class="toggle-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                </div>

                <div class="dashboard-nav__logo">
                    <a class="logo" href="{{ route('student.dashboard') }}"><img src="{{ asset('frontend/academy.png') }}"
                            alt="Logo" width="148" height="62"></a>
                </div>

            </div>
            <!-- Dashboard Nav Header End -->

            <!-- Dashboard Nav Content Start -->
            <div class="offcanvas-body dashboard-nav__content navScroll">

                <!-- Dashboard Nav Menu Start -->
                <div class="dashboard-nav__menu">
                    <ul class="dashboard-nav__menu-list">
                        <li @if (Request::routeIs('student.dashboard')) class="active" @endif>
                            <a href="{{ route('student.dashboard') }}">
                                <i class="edumi edumi-layers"></i>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>
                        <li @if (Request::routeIs('student.profile')) class="active" @endif>
                            <a href="{{ route('student.profile') }}">
                                <i class="edumi edumi-follower"></i>
                                <span class="text">My Profile</span>
                            </a>
                        </li>
                        <li @if (Request::routeIs('student.trainings')) class="active" @endif>
                            <a href="{{ route('student.trainings') }}">
                                <i class="edumi edumi-open-book"></i>
                                <span class="text">Enrolled Trainings</span>
                            </a>
                        </li>


                        <li @if (Request::routeIs('student.exams')) class="active" @endif>
                            <a href="{{ route('student.exams') }}">
                                <i class="edumi edumi-help"></i>
                                <span class="text">My Exam Attempts</span>
                            </a>
                        </li>
                        <li @if (Request::routeIs('student.purchase-history')) class="active" @endif>
                            <a href="{{ route('student.purchase-history') }}">
                                <i class="edumi edumi-shopping-cart"></i>
                                <span class="text">Purchase History</span>
                            </a>
                        </li>

                    </ul>
                    <ul class="dashboard-nav__menu-list">
                        <li @if (Request::routeIs(['student.settings', 'student.reset-password'])) class="active" @endif>
                            <a href="{{ route('student.settings') }}">
                                <i class="edumi edumi-settings"></i>
                                <span class="text">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('student.logout') }}">
                                <i class="edumi edumi-sign-out"></i>
                                <span class="text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Dashboard Nav Menu End -->

            </div>
            <!-- Dashboard Nav Content End -->

            <div class="offcanvas-footer"></div>
        </div>
        <!-- Dashboard Nav Wrapper End -->

    </div>
    <!-- Dashboard Nav End -->

    <!-- Dashboard Main Wrapper Start -->
    <main class="dashboard-main-wrapper">

        <!-- Dashboard Header Start -->
        <div class="dashboard-header">
            <div class="container">
                <!-- Dashboard Header Wrapper Start -->
                <div class="dashboard-header__wrap">

                    <div class="dashboard-header__toggle-menu d-xl-none">
                        <button class="toggle-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDashboard">
                            <svg width="20px" height="18px" viewBox="0 0 20 18" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path
                                    d="M18.7179688,2.60581293 L1.28207031,2.60581293 C0.573828125,2.60581293 0,2.02491559 0,1.30798783 C0,0.591060076 0.573828125,0.0101231939 1.28207031,0.0101231939 L18.7179688,0.0101231939 C19.4261719,0.0101231939 20,0.591020532 20,1.30798783 C20,2.02495513 19.4261719,2.60581293 18.7179688,2.60581293 Z">
                                </path>
                                <path
                                    d="M11.5384766,10.5957293 L1.28207031,10.5957293 C0.573828125,10.5957293 2.91322522e-13,10.0147924 2.91322522e-13,9.29786464 C2.91322522e-13,8.58093688 0.573828125,8 1.28207031,8 L11.5384766,8 C12.2466797,8 12.8205469,8.58089734 12.8205469,9.29786464 C12.8205469,10.0148319 12.2466797,10.5957293 11.5384766,10.5957293 Z">
                                </path>
                                <path
                                    d="M18.7179688,17.6 L1.28207031,17.6 C0.573828125,17.6 0,17.0628683 0,16.4 C0,15.7371317 0.573828125,15.2 1.28207031,15.2 L18.7179688,15.2 C19.4261719,15.2 20,15.7370952 20,16.4 C20,17.0628683 19.4261719,17.6 18.7179688,17.6 Z">
                                </path>
                            </svg>
                        </button>
                    </div>

                    <div class="dashboard-header__user">
                        <div class="dashboard-header__user-avatar">
                            <img src="{{ asset('images/students/' . auth()->guard('student')->user()->imageName) }}"
                                alt="Avatar" width="90" height="90">
                        </div>
                        <div class="dashboard-header__user-info">
                            <h4 class="dashboard-header__user-name"><span
                                    class="welcome-text">{{ auth()->guard('student')->user()->fname }} </span>{{ auth()->guard('student')->user()->lname }}
                            </h4>
                            <span>Student N<sup>0</sup>: {{ auth()->guard('student')->user()->regnumber }}</span>
                        </div>
                    </div>

                </div>
                <!-- Dashboard Header Wrapper End -->
            </div>
        </div>
        <!-- Dashboard Header End -->





        <!-- Dashboard Content Start -->
        <div class="dashboard-content">

            @yield('body')

        </div>
        <!-- Dashboard Content End -->


    </main>
    <!-- Dashboard Main Wrapper End -->

    <!-- Vendors JS -->
    <script src="{{ asset('frontend/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
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
    <script src="{{ asset('frontend/js/plugins/range-slider.js') }}"></script>
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

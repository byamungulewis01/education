<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/skillup-live/skillup/home-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 09:20:24 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Boost" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/img/light-logo.png') }}">
    <title>@yield('title') - Boost</title>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('new/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/vendors/hamburgers/hamburgers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/vendors/loaders.css/loaders.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/assets/css/theme.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('new/assets/css/user.min.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">

</head>

<body>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->

        <div class="bg-primary py-3 d-none d-sm-block text-white fw-bold">
            <div class="container">
                <div class="row align-items-center gx-4">
                    <div class="col-auto d-none d-lg-block fs--1"><span class="fas fa-map-marker-alt text-warning me-2"
                            data-fa-transform="grow-3"></span>1010 Avenue, New York, NY 10018 US. </div>
                    <div class="col-auto ms-md-auto order-md-2 d-none d-sm-flex fs--1 align-items-center"><span
                            class="fas fa-clock text-warning me-2" data-fa-transform="grow-3"></span>Mon-Sat, 8.00-18.00. Sunday
                        CLOSED</div>
                    <div class="col-auto"><span class="fas fa-phone-alt text-warning" data-fa-transform="shrink-3"></span><a
                            class="ms-2 fs--1 d-inline text-white fw-bold" href="tel:2123865575">212 386 5575, 212 386 5576</a>
                    </div>
                </div>
            </div>
        </div>


        @include('home.header')
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        @yield('body')
        <!-- ============================ Footer Start ================================== -->
        <footer class="dark-footer skin-dark-footer style-2">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-md-5">
                            <div class="footer_widget">
                                <img src="assets/img/logo-light.png" class="img-footer small mb-2" alt="" />
                                <h4 class="extream mb-3">Do you need help with<br>anything?</h4>
                                <p>Receive updates, hot deals, tutorials, discounts sent straignt in your inbox every
                                    month</p>
                                <div class="foot-news-last">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                        <div class="input-group-append">
                                            <button type="button"
                                                class="input-group-text theme-bg b-0 text-light">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-7 ml-auto">
                            <div class="row">
                                <div class="col-lg-6 col-md-4">
                                    <div class="footer_widget">
                                        <h4 class="widget_title">All Sections</h4>
                                        <ul class="footer-menu">
                                            <li><a href="{{ route('index') }}">Home</a></li>
                                            <li><a href="{{ route('instructor') }}">Instructors</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-4">
                                    <div class="footer_widget">
                                        <h4 class="widget_title">Trainings</h4>
                                        <ul class="footer-menu">
                                            @foreach (\App\Models\Category::all() as $item)
                                                <li><a
                                                        href="{{ route('training', encrypt($item->id)) }}">{{ $item->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0">© {{ date("Y") }} Boost. Designd By <a href="#">Precast Technology</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <script src="{{ asset('new/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('new/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('new/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('new/vendors/bigpicture/BigPicture.js') }}"> </script>
    <script src="{{ asset('new/vendors/countup/countUp.umd.js') }}"> </script>
    <script src="{{ asset('new/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('new/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('new/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('new/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('new/vendors/gsap/gsap.js') }}"></script>
    <script src="{{ asset('new/vendors/gsap/customEase.js') }}"></script>
    <script src="{{ asset('new/assets/js/theme.js') }}"></script>

</body>

<!-- Mirrored from themezhub.net/skillup-live/skillup/home-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 09:20:30 GMT -->

</html>

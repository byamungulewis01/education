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
                                        <h4 class="widget_title">Schools</h4>
                                        <ul class="footer-menu">
                                            @foreach (\App\Models\School::all() as $item)
                                                <li><a
                                                        href="{{ route('school', encrypt($item->id)) }}">{{ $item->title }}</a>
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

</body>

<!-- Mirrored from themezhub.net/skillup-live/skillup/home-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 09:20:30 GMT -->

</html>

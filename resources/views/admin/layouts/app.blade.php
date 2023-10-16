<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/skillup-live/skillup/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 09:20:34 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

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
        @include('admin.layouts.header')
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        <!-- ============================ Dashboard: Dashboard Start ================================== -->
        <section class="gray pt-4">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-3 col-md-3">
                        @include('admin.layouts.sidebar')
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12">

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- /Row -->

                     @yield('body')

                    </div>

                </div>

            </div>
        </section>
        <!-- ============================ Dashboard: Dashboard End ================================== -->

        <!-- ============================ Call To Action ================================== -->
        <section class="theme-bg call_action_wrap-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="call_action_wrap">
                            <div class="call_action_wrap-head">
                                <h3>Do You Have Questions ?</h3>
                                <span>We'll help you to grow your career and growth.</span>
                            </div>
                            <a href="#" class="btn btn-call_action_wrap">Contact Us Today</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ============================ Call To Action End ================================== -->


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

    <!-- Morris.js charts -->
    <script src="{{ asset('assets/js/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/js/morris.min.js') }}"></script>

    <!-- Custom Morrisjs JavaScript -->
    <script src="{{ asset('assets/js/morris.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

</body>

<!-- Mirrored from themezhub.net/skillup-live/skillup/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 09:20:45 GMT -->

</html>

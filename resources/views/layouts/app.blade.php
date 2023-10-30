<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/skillup-live/skillup/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 09:20:34 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Boost</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo.jpg') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/toast/css/jquery.toast.css') }}">
    @yield('css')
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
        @include('layouts.header')
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
                        @if (auth()->user()->role == 'instructor')
                            @include('layouts.instructor-sidebar')
                        @else
                            @include('layouts.sidebar')
                        @endif
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12">

                        @yield('body')

                    </div>

                </div>

            </div>
        </section>
        <!-- ============================ Dashboard: Dashboard End ================================== -->


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

    {{-- <script src="{{ asset('assets/toast/jquery.js') }}"></script> --}}
    <script src="{{ asset('assets/toast/js/jquery.toast.js') }}"></script>
    @yield('js')

    @if (session()->has('success'))
        <script>
            $(document).ready(function() {
                $.toast({
                    heading: 'Success',
                    text: '{{ session()->get('success') }}',
                    showHideTransition: 'fade',
                    icon: 'success',
                    position: 'top-right'
                });
            });
        </script>
    @endif
    @if (session()->has('warning'))
        <script>
            $(document).ready(function() {
                $.toast({
                    heading: 'Message',
                    text: '{{ session()->get('warning') }}',
                    showHideTransition: 'fade',
                    icon: 'warning',
                    position: 'top-right'
                });
            });
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            $(document).ready(function() {
                $.toast({
                    heading: 'Error',
                    text: '{{ session()->get('error') }}',
                    showHideTransition: 'fade',
                    icon: 'error',
                    position: 'top-right'
                });
            });
        </script>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
        @endforeach
        @php
            $data = 'Error Accurs';
        @endphp
        <script>
            $(document).ready(function() {
                $.toast({
                    heading: 'Error',
                    text: '{{ $error }}',
                    showHideTransition: 'fade',
                    icon: 'error',
                    position: 'top-right',
                    hideAfter: 5000,
                });
            });
        </script>
    @endif



    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

</body>

<!-- Mirrored from themezhub.net/skillup-live/skillup/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 09:20:45 GMT -->

</html>

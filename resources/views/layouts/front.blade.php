<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide " dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets2') }}/" data-template="front-pages">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>@yield('title') | BCCH LTD</title>

    <meta name="description" content="Boost Consultancy & Coaching Hub LTD" />
    <meta name="keywords" content="Boost Consultancy & Coaching Hub LTD,Boost Consultancy,BCCH LTD">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/boost.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets2/vendor/fonts/tabler-icons.css') }}" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets2/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets2/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/css/pages/front-page.css') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets2/vendor/libs/node-waves/node-waves.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets2/vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <!-- Page CSS -->

    <link rel="stylesheet" href="{{ asset('assets/toast/css/jquery.toast.css') }}">

    <link rel="stylesheet" href="{{ asset('assets2/vendor/css/pages/front-page-landing.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets2/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{-- <script src="{{ asset('assets2/vendor/js/template-customizer.js') }}"></script> --}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets2/js/front-config.js') }}"></script>

</head>

<body>

    <script src="{{ asset('assets2/vendor/js/dropdown-hover.js') }}"></script>
    <script src="{{ asset('assets2/vendor/js/mega-dropdown.js') }}"></script>

    <x-student.navbar />

    <!-- Sections:Start -->


    <div data-bs-spy="scroll" class="scrollspy-example">
        @yield('body')
    </div>
    <!-- Footer: Start -->
    @if (Request::routeIs('index'))
        {{-- <x-student.footer /> --}}
    @endif

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets2/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets2/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets2/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <!-- endbuild -->
    <script src="{{ asset('assets/js/modal-add-new-address.js') }}"></script>
    <script src="{{ asset('assets/toast/js/jquery.toast.js') }}"></script>

    @include('layouts.flash_message')

    <!-- Vendors JS -->
    <script src="{{ asset('assets2/vendor/libs/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset('assets2/vendor/libs/swiper/swiper.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets2/js/front-main.js') }}"></script>


    <!-- Page JS -->
    <script src="{{ asset('assets2/js/front-page-landing.js') }}"></script>
    @if(session('created'))
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('loginModel'), {
          keyboard: false
        })
        myModal.show()
    </script>
  @endif
</body>

</html>

<!-- beautify ignore:end -->

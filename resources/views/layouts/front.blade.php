<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | BCCH</title>

    <meta name="description" content="Boost Consultancy & Coaching Hub LTD" />
    <meta name="keywords" content="Boost Consultancy & Coaching Hub LTD,Boost Consultancy,BCCH LTD">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/boost.png') }}" />
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700"
        rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <!-- ALL CSS FILES -->
    <link href="{{ asset('frontend/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/toast/css/jquery.toast.css') }}">
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{ asset('frontend/css/style-mob.css') }}" rel="stylesheet" />

    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->

    @yield('css')

</head>

<body>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index-2.html"><img src="{{ asset('frontend/logo.png') }}" height="60"
                                alt="" />
                        </a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>

                            <h4>All Pages</h4>
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{ route('trainings') }}">Trainings</a></li>
                                <li><a href="{{ route('consultancy') }}">Consultancy</a></li>
                                <li><a href="#">Partners & Accreditation</a></li>
                                {{-- <li><a href="#">Journal</a></li> --}}
                                <li><a href="{{ route('contact') }}">Contact us</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                @php
                    $contact = \App\Models\ContactUs::first();

                @endphp
                <div class="row" style="padding:1%">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>

                                <li><a href="#">Head Office Contact/USA</a>
                                </li>
                                <li><a href="#">Phone: {{ $contact->head_phone }}</a>
                                </li>
                                <li><a href="#">Email: {{ $contact->head_email }}</a>
                                </li>
                            </ul>
                            <ul>
                                <li><a href="#">Branch Contact </a>
                                </li>
                                <li><a href="#">Phone: {{ $contact->branch_phone }}</a>
                                </li>
                                <li><a href="#">Email: {{ $contact->branch_email }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            @if (auth()->guard('student')->check())
                                <ul>
                                    <li><a style="background-color: #000824"
                                            href="{{ route('student.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li><a style="background-color: #c73905"
                                            href="{{ route('student.logout') }}">Logout</a>
                                    </li>
                                </ul>
                            @else
                                <ul>
                                    <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>
                                    </li>
                                    <li><a href="{{ route('trainings') }}">Sign Up</a>
                                    </li>
                                </ul>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('assets/certificate/boost.png') }}"
                                    height="50" alt="BCCH Logo" />
                            </a>

                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ route('index') }}"
                                        @if (Request::routeIs('index')) style="color: #e66030;" @endif>Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}"
                                        @if (Request::routeIs('about')) style="color: #e66030;" @endif>About Us</a>

                                </li>
                                <li class="about-menu">
                                    <a href="#" @if (Request::routeIs(['trainings', 'training'])) style="color: #e66030;" @endif
                                        class="mm-arr">Trainings</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s2">
                                                    <p>Boost Consultancy & Coaching Hub is here to coach and support you
                                                        all in various fields with our professional engineers;
                                                        accountants; project managers; external auditors; agricultural
                                                        and livestock specialists in partnership with international
                                                        experts in different domains.</p>
                                                    <a href="{{ route('trainings') }}" class="mm-r-m-btn">View All
                                                        Trainings</a>

                                                </div>
                                                @php
                                                    $trainings = \App\Models\Training::orderBy('title')->get();
                                                @endphp
                                                @foreach ($trainings->chunk(10) as $chunk)
                                                    <div class="mm1-com mm1-s1">
                                                        <ul>
                                                            @foreach ($chunk as $item)
                                                                <li><a
                                                                        href="{{ route('admission', $item->id) }}">{{ $item->title }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="admi-menu">
                                    <a href="{{ route('consultancy') }}"
                                        @if (Request::routeIs('consultancy')) style="color: #e66030;" @endif
                                        class="mm-arr">Consultancy</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="admi-mm m-menu">
                                            <div class="m-menu-inn">
                                                @php
                                                    $consultancies = \App\Models\Consultance::orderBy('title')->get();
                                                @endphp
                                                @foreach ($consultancies->chunk(10) as $chunk)
                                                    <div class="mm1-com mm1-s1">
                                                        <ul>
                                                            @foreach ($chunk as $item)
                                                                <li><a
                                                                        href="{{ route('consultancyShow', $item->id) }}">{{ $item->title }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Partners &
                                        Accreditation</a>
                                    {{-- <a href="{{ route('accreditations') }}"
                                        @if (Request::routeIs('accreditations')) style="color: #e66030;" @endif>Partners &
                                        Accreditation</a> --}}
                                </li>

                                {{-- <li><a href="#">Journal</a> --}}
                                </li>

                                <li><a href="{{ route('contact') }}"
                                        @if (Request::routeIs('contact')) style="color: #e66030;" @endif>Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="all-drop-down-menu">

                    </div>

                </div>
            </div>
        </div>
        {{-- <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box"
                                            placeholder="Search course and discount courses">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="course-details.html">Accounting/Finance</a></li>
                                            <li><a href="course-details.html">civil engineering</a></li>
                                            <li><a href="course-details.html">Art/Design</a></li>
                                            <li><a href="course-details.html">Marine Engineering</a></li>
                                            <li><a href="course-details.html">Business Management</a></li>
                                            <li><a href="course-details.html">Journalism/Writing</a></li>
                                            <li><a href="course-details.html">Physical Education</a></li>
                                            <li><a href="course-details.html">Political Science</a></li>
                                            <li><a href="course-details.html">Sciences</a></li>
                                            <li><a href="course-details.html">Statistics</a></li>
                                            <li><a href="course-details.html">Web Design/Development</a></li>
                                            <li><a href="course-details.html">SEO</a></li>
                                            <li><a href="course-details.html">Google Business</a></li>
                                            <li><a href="course-details.html">Graphics Design</a></li>
                                            <li><a href="course-details.html">Networking Courses</a></li>
                                            <li><a href="course-details.html">Information technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search Course">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <!--END HEADER SECTION-->

    @yield('body')
    <!-- FOOTER -->
    <section class="wed-hom-footer">
        <div class="container">

            <div class="row wed-foot-link-1">
                <div class="col-md-4 foot-tc-mar-t-o">
                    <h4>Get In Touch</h4>
                    <p style="color: #bebebe">Address: 28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p>
                    <p style="color: #bebebe">Phone: <a style="color: #bebebe" href="#!">+101-1231-4321</a></p>
                    <p style="color: #bebebe">Email: <a style="color: #bebebe" href="#!">info@boast.com</a></p>
                </div>
                <div class="col-md-4">
                    <h4>Top Trainings</h4>
                    <ul>
                        @foreach (\App\Models\Training::orderBy('title')->take(10)->get() as $item)
                            <li><a style="color: #bebebe"
                                    href="{{ route('training', $item->id) }}">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-4">
                    <h4>SOCIAL MEDIA</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>

                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COPY RIGHTS -->
    <section class="wed-rights">
        <div class="container">
            <div class="row">
                <div class="copy-right">
                    <a style="color: #bebebe" target="_blank" href="#">BOOST CONSULTANCY & COACHING HUB
                        (BCCH)</a>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
    <section>
        <!-- LOGIN SECTION -->
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>

                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img
                            src="{{ asset('frontend/images/cancel.png') }}" alt="" />
                    </a>
                    <h4>Login</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12" method="POST" action="{{ route('login_auth') }}">
                        @csrf
                        <div>
                            <div class="input-field s12">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" autofocus>
                                <label>Email</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                <label>Password</label>
                            </div>
                        </div>
                        {{-- <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Remember me</label>
                                </p>
                            </div>
                        </div> --}}
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Login" class="waves-effect waves-light log-in-btn">
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12"><a href="{{ route('trainings') }}">Create a new
                                    account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="successModal" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>

                </div>
            </div>
        </div>
    </section>

    <!-- SOCIAL MEDIA SHARE -->


    <!--Import jQuery before materialize.js-->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/main.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/materialize.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('assets/toast/js/jquery.toast.js') }}"></script>

    @yield('js')

    @include('layouts.flash_message')

</body>


</html>

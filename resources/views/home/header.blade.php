<div class="header theme-bg light-menu">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="{{ route('index') }}">
                    <img src="{{ asset('assets/img/light-logo.png') }}" class="logo" alt="" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#login"
                                class="crs_yuo12 w-auto text-white theme-bg">
                                <span class="embos_45"><i class="fas fa-sign-in-alt mr-1"></i>Sign In</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper">
                <ul class="nav-menu">

                    <li class="{{ Request::routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}">Home<span
                                class="submenu-indicator"></span></a>

                    </li>

                    <li><a href="#">Trainings<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            @foreach (\App\Models\Category::all() as $item)
                                <li><a href="{{ route('training', encrypt($item->id)) }}">{{ $item->title }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </li>

                    <li class="{{ Request::routeIs('consultance') ? 'active' : '' }}"><a
                            href="{{ route('consultance') }}">Consultance</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>

                </ul>
                @if (auth()->guard('student')->check())
                    <ul class="nav-menu nav-menu-social align-to-right">


                        <li class="account-drop">
                            <a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="embos_45"><i class="fas fa-bell"></i><i
                                        class="embose_count red">3</i></span>
                            </a>
                            <div class="dropdown-menu pull-right animated flipInX">
                                <div class="drp_menu_headr bg-warning">
                                    <h4>22 Notifications</h4>
                                </div>
                                <div class="ground-list ground-hover-list">
                                    <div class="ground ground-list-single">
                                        <div
                                            class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                                            <div class="position-absolute text-success h5 mb-0"><i
                                                    class="fas fa-user"></i>
                                            </div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">Maryam Amiri</a></h6>
                                            <small class="text-fade">New User Enrolled in Python</small>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>

                                    <div class="ground ground-list-single">
                                        <div
                                            class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-danger">
                                            <div class="position-absolute text-danger h5 mb-0"><i
                                                    class="fas fa-comments"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">Shilpa Rana</a></h6>
                                            <small class="text-fade">Shilpa Send a Message</small>
                                            <span class="small">02 Min Ago</span>
                                        </div>
                                    </div>

                                    <div class="ground ground-list-single">
                                        <div
                                            class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-info">
                                            <div class="position-absolute text-info h5 mb-0"><i
                                                    class="fas fa-grin-squint-tears"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">Amar Muskali</a></h6>
                                            <small class="text-fade">Need Responsive Business Tem...</small>
                                            <span class="small">10 Min Ago</span>
                                        </div>
                                    </div>

                                    <div class="ground ground-list-single">
                                        <div
                                            class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-purple">
                                            <div class="position-absolute text-purple h5 mb-0"><i
                                                    class="fas fa-briefcase"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">Maryam Amiri</a></h6>
                                            <small class="text-fade">Next Meeting on Tuesday..</small>
                                            <span class="small">15 Min Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="btn-group account-drop">
                                <a href="javascript:void(0);" class="crs_yuo12 btn btn-order-by-filt"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('images/students/'.auth()->guard('student')->user()->imageName) }}" class="avater-img" alt="">
                                </a>
                                <div class="dropdown-menu pull-right animated flipInX">
                                    <div class="drp_menu_headr">
                                        <h4>Hi, {{ auth()->guard('student')->user()->lname }}</h4>
                                    </div>
                                    <ul>
                                        <li><a href="{{ route('student.index') }}"><i
                                                    class="fa fa-tachometer-alt"></i>Dashboard </a></li>
                                        <li><a href="{{ route('student.profile') }}"><i class="fa fa-user-tie"></i>My Profile</a>
                                        </li>

                                        <li><a href="{{ route('student.logout') }}"><i
                                                    class="fa fa-unlock-alt"></i>Sign Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                @else
                    <ul class="nav-menu nav-menu-social align-to-right">

                        <li>
                            <a href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Sign In</span>
                            </a>
                        </li>
                        <li class="add-listing bg-white">
                            <a href="{{ route('register') }}" class="text-white">Get Started</a>
                        </li>
                    </ul>
                @endif

            </div>
        </nav>
    </div>
</div>

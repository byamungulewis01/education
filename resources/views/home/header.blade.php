<div class="header header-light">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="{{ route('index') }}">
                    <img src="{{ asset('assets/img/light-logo2.png') }}" class="logo" alt="" />
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
                            href="{{ route('consultance') }}">Consultancy</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>

                </ul>
                @if (auth()->guard('student')->check())
                    <ul class="nav-menu nav-menu-social align-to-right">
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

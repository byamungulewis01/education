<div class="header header-light" style="background-color: #001a4d">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="#">
                    <img src="{{ asset('assets/img/light-logo3.png') }}" class="logo" alt="" />
                </a>
                <div class="nav-toggle"></div>

            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">


                <ul class="nav-menu nav-menu-social align-to-right">


                    <li class="account-drop">
                        <a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="embos_45"><i class="fas fa-bell"></i><i class="embose_count red">3</i></span>
                        </a>
                        <div class="dropdown-menu pull-right animated flipInX">
                            <div class="drp_menu_headr bg-warning">
                                <h4>2 Notifications</h4>
                            </div>
                            <div class="ground-list ground-hover-list">
                                <div class="ground ground-list-single">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                                        <div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i>
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

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="btn-group account-drop">
                            <a href="javascript:void(0);" class="crs_yuo12 btn btn-order-by-filt" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('images/users/' .auth()->user()->imageName) }}" class="avater-img" alt="">
                            </a>
                            <div class="dropdown-menu pull-right animated flipInX">
                                <div class="drp_menu_headr">
                                    @php
                                        $name = auth()->user()->name;
                                        $fname = explode(' ',$name)[0];
                                    @endphp
                                    <h4>Hi, {{ $fname }}</h4>
                                </div>
                                <ul>
                                    <li><a href="{{ route('admin.index') }}"><i class="fa fa-tachometer-alt"></i>Dashboard<span
                                                class="notti_coun style-1">4</span></a></li>
                                    <li><a href="{{ route('admin.profile') }}"><i class="fa fa-user-tie"></i>My Profile</a></li>

                                    {{-- <li><a href="messages.html"><i class="fas fa-comments"></i>Messages</a></li> --}}
                                    <li><a href="{{ route('admin.logout') }}"><i class="fa fa-unlock-alt"></i>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

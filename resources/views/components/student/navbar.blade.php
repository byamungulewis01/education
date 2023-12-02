 <!-- Navbar: Start -->
 <nav class="layout-navbar shadow-none py-0">
     <div class="container">
         <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
             <!-- Menu logo wrapper: Start -->
             <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
                 <!-- Mobile menu toggle: Start-->
                 <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <i class="ti ti-menu-2 ti-sm align-middle"></i>
                 </button>
                 <!-- Mobile menu toggle: End-->
                 <a href="{{ route('index') }}" class="app-brand-link">
                    <img src="{{ asset('assets/logo/light-logo2.png') }}" class="mt-1" alt="BCCH Logo" width="100">
                 </a>
             </div>
             <!-- Menu logo wrapper: End -->
             <!-- Menu wrapper: Start -->
             <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                 <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
                     type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="ti ti-x ti-sm"></i>
                 </button>
                 <ul class="navbar-nav me-auto">
                     <li class="nav-item">
                         <a class="nav-link fw-medium" aria-current="page"
                             href="{{ route('index') }}#landingHero">Home</a>
                     </li>
                     <li class="nav-item">
                        <a href="javascript:void(0);"
                            class="nav-link fw-medium">
                            <span data-i18n="Training">Training</span>
                        </a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link fw-medium" href="{{ route('index') }}#landingFeatures">Consultancy</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link fw-medium" href="{{ route('index') }}#landingContact">Contact us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link fw-medium" href="{{ route('index') }}#landingContact">About us</a>
                    </li>

                     @if (auth()->guard('student')->check())
                         <li
                             class="nav-item {{ Request::routeIs(['student.trainings', 'student.trainingShow', 'student.training_exam_show']) ? 'active' : '' }}">
                             <a class="nav-link fw-medium" href="{{ route('student.trainings') }}">My Trainings</a>
                         </li>
                     @endif
                     @if (auth()->guard('client')->check())
                         <li
                             class="nav-item {{ Request::routeIs(['client.my_consultancy']) ? 'active' : '' }}">
                             <a class="nav-link fw-medium" href="{{ route('client.my_consultancy') }}">My Consultancy</a>
                         </li>
                     @endif
                 </ul>
             </div>
             <div class="landing-menu-overlay d-lg-none"></div>
             <!-- Menu wrapper: End -->
             <!-- Toolbar: Start -->
             <ul class="navbar-nav flex-row align-items-center ms-auto">
                 @if (auth()->guard('student')->check())
                     <!-- navbar button: Start -->
                     <li class="nav-item">
                         <a class="nav-link {{ Request::routeIs('student.profile') ? 'active' : '' }}"
                             href="{{ route('student.profile') }}"><i
                                 class="tf-icons navbar-icon ti ti-user ti-xs me-1"></i> Profile</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('student.logout') }}"><i
                                 class="tf-icons navbar-icon ti ti-lock-open ti-xs me-1"></i> Logout</a>
                     </li>
                 @elseif(auth()->guard('client')->check())
                     <li class="nav-item">
                         <a class="nav-link {{ Request::routeIs('client.chat') ? 'active' : '' }}"
                             href="{{ route('client.chat') }}"><i
                                 class="tf-icons navbar-icon ti ti-messages ti-xs me-1"></i> Chat</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link {{ Request::routeIs('client.profile') ? 'active' : '' }}"
                             href="{{ route('client.profile') }}"><i
                                 class="tf-icons navbar-icon ti ti-user ti-xs me-1"></i> Profile</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('client.logout') }}"><i
                                 class="tf-icons navbar-icon ti ti-lock-open ti-xs me-1"></i> Logout</a>
                     </li>
                 @else
                     <li>
                         <button data-bs-toggle="modal" data-bs-target="#loginModel" class="btn btn-primary"><span
                                 class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span><span
                                 class="d-none d-md-block">Login/Register</span></button>
                     </li>
                 @endif
                 <!-- navbar button: End -->

             </ul>
             <!-- Toolbar: End -->
         </div>
     </div>
 </nav>
 <!-- Navbar: End -->

 <x-student.signin-model />
 <x-student.signup-model />


 <!--/ Add New Address Modal -->

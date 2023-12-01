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
                     <span class="app-brand-logo demo">
                         <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                 fill="#7367F0" />
                             <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                 d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                             <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                 d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                             <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                 fill="#7367F0" />
                         </svg>
                     </span>
                     <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Vuexy</span>
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
                         <a class="nav-link fw-medium" href="{{ route('index') }}#landingFeatures">Features</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link fw-medium" href="{{ route('index') }}#landingContact">Contact us</a>
                     </li>
                     <li class="nav-item mega-dropdown">
                         <a href="javascript:void(0);"
                             class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                             aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">
                             <span data-i18n="Pages">Pages</span>
                         </a>
                         <div class="dropdown-menu p-4">
                             <div class="row gy-4">
                                 <div class="col-12 col-lg">
                                     <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                                         <div class="avatar avatar-sm flex-shrink-0 me-2">
                                             <span class="avatar-initial rounded bg-label-primary"><i
                                                     class='ti ti-layout-grid'></i></span>
                                         </div>
                                         <span class="ps-1">Other</span>
                                     </div>
                                     <ul class="nav flex-column">
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link" href="pricing-page.html">
                                                 <i class='ti ti-circle me-1'></i>
                                                 <span data-i18n="Pricing">Pricing</span>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link" href="payment-page.html">
                                                 <i class='ti ti-circle me-1'></i>
                                                 <span data-i18n="Payment">Payment</span>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link" href="checkout-page.html">
                                                 <i class='ti ti-circle me-1'></i>
                                                 <span data-i18n="Checkout">Checkout</span>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link" href="help-center-landing.html">
                                                 <i class='ti ti-circle me-1'></i>
                                                 <span data-i18n="Help Center">Help Center</span>
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                                 <div class="col-12 col-lg">
                                     <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                                         <div class="avatar avatar-sm flex-shrink-0 me-2">
                                             <span class="avatar-initial rounded bg-label-primary"><i
                                                     class='ti ti-lock-open'></i></span>
                                         </div>
                                         <span class="ps-1">Auth Demo</span>
                                     </div>
                                     <ul class="nav flex-column">
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-login-basic.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Login (Basic)
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-login-cover.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Login (Cover)
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-register-basic.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Register (Basic)
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-register-cover.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Register (Cover)
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-register-multisteps.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Register (Multi-steps)
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-forgot-password-basic.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Forgot Password (Basic)
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-forgot-password-cover.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Forgot Password (Cover)
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-reset-password-basic.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Reset Password (Basic)
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-reset-password-cover.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Reset Password (Cover)
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                                 <div class="col-12 col-lg">
                                     <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                                         <div class="avatar avatar-sm flex-shrink-0 me-2">
                                             <span class="avatar-initial rounded bg-label-primary"><i
                                                     class='ti ti-file-analytics'></i></span>
                                         </div>
                                         <span class="ps-1">Other</span>
                                     </div>
                                     <ul class="nav flex-column">
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/pages-misc-error.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Error
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/pages-misc-under-maintenance.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Under Maintenance
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/pages-misc-comingsoon.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Coming Soon
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/pages-misc-not-authorized.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Not Authorized
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-verify-email-basic.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Verify Email (Basic)
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-verify-email-cover.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Verify Email (Cover)
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-two-steps-basic.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Two Steps (Basic)
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link mega-dropdown-link"
                                                 href="../vertical-menu-template/auth-two-steps-cover.html"
                                                 target="_blank">
                                                 <i class='ti ti-circle me-1'></i>
                                                 Two Steps (Cover)
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                                 <div class="col-lg-4 d-none d-lg-block">
                                     <div class="bg-body nav-img-col p-2">
                                         <img src="assets/img/front-pages/misc/nav-item-col-img.png"
                                             alt="nav item col image" class="w-100">
                                     </div>
                                 </div>
                             </div>
                         </div>
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

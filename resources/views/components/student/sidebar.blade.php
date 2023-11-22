<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


    <div class="app-brand demo ">
        <a href="{{ route('admin.index') }}" class="app-brand-link">
            <img src="{{ asset('assets/logo/logo-simplified.png') }}" class="mt-1" alt="RBA Logo" width="170">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <!-- Dashboard -->
        <li class="menu-item {{ Request::routeIs('student.index') ? 'active' : '' }}">
            <a href="{{ route('student.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>


        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons ti ti-link"></i>
                <div data-i18n="Trainings">Trainings</div>
            </a>

        </li>
    </ul>

</aside>
<!-- / Menu -->

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
        <li class="menu-item {{ Request::routeIs('admin.index') ? 'active' : '' }}">
            <a href="{{ route('admin.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ Request::routeIs('admin.consultance.index') ? 'active' : '' }}">
            <a href="{{ route('admin.consultance.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-brand-zoom"></i>
                <div data-i18n="Consultance">Consultance</div>
            </a>
        </li>

        <li class="menu-item {{ Request::routeIs(['admin.category.index', 'admin.training.index','admin.training.show']) ? 'open' : '' }} ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-link"></i>
                <div data-i18n="Trainings">Trainings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('admin.training.index','admin.training.show') ? 'active' : '' }}">
                    <a href="{{ route('admin.training.index') }}" class="menu-link">
                        <div data-i18n="List">List</div>
                    </a>
                </li>

                <li class="menu-item {{ Request::routeIs('admin.category.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}" class="menu-link">
                        <div data-i18n="Categories">Categories</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ Request::routeIs(['admin.student.application','admin.student.approved','admin.student.rejected']) ? 'open' : '' }} ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-user"></i>
                <div data-i18n="Students">Students</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('admin.student.application') ? 'active' : '' }}">
                    <a href="{{ route('admin.student.application') }}" class="menu-link">
                        <div data-i18n="Application">Application</div>
                    </a>
                </li>

                <li class="menu-item {{ Request::routeIs('admin.student.approved') ? 'active' : '' }}">
                    <a href="{{ route('admin.student.approved') }}" class="menu-link">
                        <div data-i18n="Approved">Approved</div>
                    </a>
                </li>

                <li class="menu-item {{ Request::routeIs('admin.student.rejected') ? 'active' : '' }}">
                    <a href="{{ route('admin.student.rejected') }}" class="menu-link">
                        <div data-i18n="Rejected">Rejected</div>
                    </a>
                </li>
            </ul>
        </li>


        <li class="menu-item {{ Request::routeIs(['admin.user.index', 'admin.instructor.index']) ? 'open' : '' }} ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Users">Users</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('admin.user.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.user.index') }}" class="menu-link">
                        <div data-i18n="Admininstrators">Admininstrators</div>
                    </a>
                </li>

                <li class="menu-item {{ Request::routeIs('admin.instructor.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.instructor.index') }}" class="menu-link">
                        <div data-i18n="Instructors">Instructors</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>



</aside>
<!-- / Menu -->

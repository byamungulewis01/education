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


    <li
        class="menu-item {{ Request::routeIs('admin.training.index', 'admin.training.show','admin.training.students','admin.category.index','admin.training.category') ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-link"></i>
            <div data-i18n="Trainings">Trainings</div>
        </a>
        <ul class="menu-sub">
            <li
                class="menu-item {{ Request::routeIs('admin.training.index', 'admin.training.show','admin.training.students','admin.training.category') ? 'active' : '' }}">
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

    <li
        class="menu-item {{ Request::routeIs(['admin.consultance.index', 'admin.consultance.create', 'admin.consultance.edit']) ? 'open' : '' }} ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-components"></i>
            <div data-i18n="Consultance">Consultancy</div>
        </a>
        <ul class="menu-sub">
            <li
                class="menu-item {{ Request::routeIs('admin.consultance.index', 'admin.consultance.edit') ? 'active' : '' }}">
                <a href="{{ route('admin.consultance.index') }}" class="menu-link">
                    <div data-i18n="List">List</div>
                </a>
            </li>

            <li class="menu-item {{ Request::routeIs('admin.consultance.create') ? 'active' : '' }}">
                <a href="{{ route('admin.consultance.create') }}" class="menu-link">
                    <div data-i18n="New Consultancy">New Consultancy</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-item {{ Request::routeIs(['admin.accreditation.index','admin.accreditation.create','admin.accreditation.edit']) ? 'active' : '' }}">
        <a href="{{ route('admin.accreditation.index') }}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-forms"></i>
            <div data-i18n="Accreditation">Accreditation</div>
        </a>
    </li>


    <li
        class="menu-item {{ Request::routeIs(['admin.student.application', 'admin.student.approved', 'admin.student.rejected']) ? 'open' : '' }} ">
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

    <li
        class="menu-item {{ Request::routeIs(['admin.pages.about', 'admin.pages.contact','admin.pages.home_banners','admin.pages.structure','admin.pages.create_structure','admin.pages.edit_structure']) ? 'open' : '' }} ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-settings"></i>
            <div data-i18n="Pages">Pages</div>
        </a>
        <ul class="menu-sub">
        <li class="menu-item {{ Request::routeIs('admin.pages.about') ? 'active' : '' }}">
                <a href="{{ route('admin.pages.about') }}" class="menu-link">
                    <div data-i18n="About">About</div>
                </a>
            </li>

            <li class="menu-item {{ Request::routeIs('admin.pages.contact') ? 'active' : '' }}">
                <a href="{{ route('admin.pages.contact') }}" class="menu-link">
                    <div data-i18n="Contact Us">Contact Us</div>
                </a>
            </li>
            <li class="menu-item {{ Request::routeIs('admin.pages.home_banners') ? 'active' : '' }}">
                <a href="{{ route('admin.pages.home_banners') }}" class="menu-link">
                    <div data-i18n="Home Banner">Home Banner</div>
                </a>
            </li>
            <li class="menu-item {{ Request::routeIs(['admin.pages.structure','admin.pages.create_structure','admin.pages.edit_structure']) ? 'active' : '' }}">
                <a href="{{ route('admin.pages.structure') }}" class="menu-link">
                    <div data-i18n="Organization Structure">Organization Structure</div>
                </a>
            </li>
            <!-- <li class="menu-item {{ Request::routeIs('admin.student.rejected') ? 'active' : '' }}">
                <a href="{{ route('admin.student.rejected') }}" class="menu-link">
                    <div data-i18n="Hero Section">Hero Section</div>
                </a>
            </li> -->
        </ul>
    </li>


    <li
        class="menu-item {{ Request::routeIs(['admin.user.index', 'admin.instructor.index', 'admin.student.index', 'admin.client.index']) ? 'open' : '' }} ">
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

            {{-- <li class="menu-item {{ Request::routeIs('admin.client.index') ? 'active' : '' }}">
                <a href="{{ route('admin.client.index') }}" class="menu-link">
                    <div data-i18n="Clients">Clients</div>
                </a>
            </li> --}}

            <li class="menu-item {{ Request::routeIs('admin.student.index') ? 'active' : '' }}">
                <a href="{{ route('admin.student.index') }}" class="menu-link">
                    <div data-i18n="Students">Students</div>
                </a>
            </li>
        </ul>
    </li>
</ul>

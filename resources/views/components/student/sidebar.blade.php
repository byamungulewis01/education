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

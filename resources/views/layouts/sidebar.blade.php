<div class="dashboard-navbar">

    {{-- <div class="d-user-avater">
        <img src="{{ asset('images/users/' . auth()->user()->imageName) }}" class="img-fluid avater" alt="">
        <h4>{{ auth()->user()->name }}</h4>
        <span>
            @if (auth()->user()->role == 'admin')
                Administrator
            @elseif(auth()->user()->role == 'super_admin')
                Super Admin
            @else
                Instructor
            @endif
        </span>
    </div> --}}

    <div class="d-navigation">
        <ul id="side-menu">
            <li class="{{ Request::routeIs('admin.index') ? 'active' : '' }}"><a href="{{ route('admin.index') }}"><i
                        class="fas fa-th"></i>Dashboard</a></li>
            @if (auth()->user()->role == 'super_admin')
                <li class="{{ Request::routeIs('admin.user.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.user.index') }}"><i class="fas fa-user-shield"></i>Admins</a>
                </li>
                @endif
                <li class="{{ Request::routeIs('admin.consultance.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.consultance.index') }}"><i class="fas fa-box"></i>Consultance</a>
                </li>
                <li class="{{ Request::routeIs(['admin.training.index','admin.training.show','admin.training.students']) ? 'active' : '' }}">
                    <a href="{{ route('admin.training.index') }}"><i class="fas fa-shopping-basket"></i>Trainings</a>
                </li>
                <li class="{{ Request::routeIs('admin.category.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}"><i class="fas fa-gem"></i>Categories</a>
                </li>
                <li class="{{ Request::routeIs('admin.instructor.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.instructor.index') }}"><i class="fas fa-toolbox"></i>Instructors</a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0);"><i class="fas fa-user"></i>Students<span
                            class="ti-angle-left"></span></a>
                    <ul
                        class="nav nav-second-level {{ in_array(Route::currentRouteName(), ['admin.student.application', 'admin.student.approved', 'admin.student.rejected']) ? 'show' : '' }}">
                        <li class="{{ Request::routeIs('admin.student.application') ? 'active' : '' }}"><a
                                href="{{ route('admin.student.application') }}">Application</a></li>
                        <li class="{{ Request::routeIs('admin.student.approved') ? 'active' : '' }}"><a
                                href="{{ route('admin.student.approved') }}">Approved</a></li>
                        <li class="{{ Request::routeIs('admin.student.rejected') ? 'active' : '' }}"><a
                                href="{{ route('admin.student.rejected') }}">Rejected</a></li>
                    </ul>
                </li>
            <li class="{{ Request::routeIs('admin.profile') ? 'active' : '' }}"><a
                    href="{{ route('admin.profile') }}"><i class="fas fa-address-card"></i>My Profile</a></li>
        </ul>
    </div>

</div>

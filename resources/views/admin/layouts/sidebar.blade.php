<div class="dashboard-navbar">

    <div class="d-user-avater">
        <img src="{{ asset('assets/img/user-3.jpg') }}" class="img-fluid avater" alt="">
        <h4>Adam Harshvardhan</h4>
        <span>Senior Designer</span>
    </div>

    <div class="d-navigation">
        <ul id="side-menu">
            <li class="{{ Request::routeIs('admin.index') ? 'active' : '' }}"><a href="{{ route('admin.index') }}"><i
                        class="fas fa-th"></i>Dashboard</a></li>
            <li class="{{ Request::routeIs('admin.course.index') ? 'active' : '' }}">
                <a href="{{ route('admin.course.index') }}"><i class="fas fa-shopping-basket"></i>Courses</a>
            </li>
            <li
                class="dropdown {{ in_array(Route::currentRouteName(), ['admin.school.index', 'admin.program.index']) ? 'active' : '' }}">
                <a href="javascript:void(0);"><i class="fas fa-gem"></i>Categories<span
                        class="ti-angle-left"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('admin.school.index') }}">Schools</a></li>
                    <li><a href="{{ route('admin.program.index') }}">Programs</a></li>
                </ul>
            </li>

            <li class="{{ Request::routeIs('admin.user.index') ? 'active' : '' }}">
                <a href="{{ route('admin.user.index') }}"><i class="fas fa-user-shield"></i>Admins</a>
            </li>
            <li class="{{ Request::routeIs('admin.instructor.index') ? 'active' : '' }}">
                <a href="{{ route('admin.instructor.index') }}"><i class="fas fa-toolbox"></i>Instructors</a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);"><i class="fas fa-user"></i>Students<span class="ti-angle-left"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="manage-students.html">Manage Students</a></li>
                    <li><a href="add-students.html">Add New Student</a></li>
                </ul>
            </li>
            <li><a href="messages.html"><i class="fas fa-comments"></i>Message</a></li>
            <li><a href="my-profile.html"><i class="fas fa-address-card"></i>My Profile</a></li>

        </ul>
    </div>

</div>

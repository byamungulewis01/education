<div class="col-lg-3 col-md-3">
    <div class="dashboard-navbar">

        <div class="d-user-avater">
            <img src="{{ asset('images/students/'.auth()->guard('student')->user()->imageName) }}" class="img-fluid avater" alt="">
            <h4>{{ auth()->guard('student')->user()->fname }} {{ auth()->guard('student')->user()->lname }}</h4>
            <span>{{ auth()->guard('student')->user()->email }}</span>
        </div>

        <div class="d-navigation">
            <ul id="side-menu">
                <li class="{{ Request::routeIs('student.index') ? 'active' : '' }}"><a href="{{ route('student.index') }}"><i class="fas fa-th"></i>Dashboard</a></li>
                <li class="">
                    <a href=""><i class="fas fa-shopping-basket"></i>Courses</a>
                </li>

                <li class="{{ Request::routeIs('student.profile') ? 'active' : '' }}"><a href="{{ route('student.profile') }}"><i class="fas fa-address-card"></i>My Profile</a></li>

            </ul>
        </div>

    </div>
</div>

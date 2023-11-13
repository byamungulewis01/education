<div class="dashboard-navbar">
    {{-- <div class="d-user-avater">
        <img src="{{ asset('images/users/' . auth()->user()->imageName) }}" class="img-fluid avater" alt="">
        <h4>{{ auth()->user()->name }}</h4>
        <span> Instructor </span>
    </div> --}}
    <div class="d-navigation">
        <ul id="side-menu">
            <li class="{{ Request::routeIs('instructor.index') ? 'active' : '' }}"><a href="{{ route('instructor.index') }}"><i
                        class="fas fa-th"></i>Dashboard</a></li>

            <li class="{{ Request::routeIs(['instructor.trainings','admin.training.show']) ? 'active' : '' }}"><a href="{{ route('instructor.trainings') }}"><i class="fas fa-shopping-basket"></i>Trainings</a>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0);"><i class="fas fa-user"></i>Students</a>
            </li>
            <li class="{{ Request::routeIs('admin.profile') ? 'active' : '' }}"><a
                    href="{{ route('admin.profile') }}"><i class="fas fa-address-card"></i>My Profile</a></li>
        </ul>
    </div>
</div>

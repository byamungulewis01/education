<div class="pro-cover">
</div>
<div class="pro-menu">
    <div class="container">
        <div class="col-md-9 col-md-offset-3">
            <ul>
                <li><a href="{{ route('student.dashboard') }}" @if (Request::routeIs('student.dashboard')) class="pro-act" @endif>My Dashboard</a></li>
                <li><a href="{{ route('student.profile') }}" @if (Request::routeIs('student.profile')) class="pro-act" @endif>Profile</a></li>
                <li><a href="{{ route('student.trainings') }}" @if (Request::routeIs('student.trainings','student.training_show')) class="pro-act" @endif>Trainings</a></li>
                {{-- <li><a href="db-exams.html">Exams</a></li>
                <li><a href="db-time-line.html">Time Line</a></li> --}}
                <li><a href="{{ route('student.notifications') }}" @if (Request::routeIs('student.notifications','student.chat')) class="pro-act" @endif>Notifications</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="pro-user">
        <img src="{{ asset('images/students/'.auth()->guard('student')->user()->imageName) }}" alt="user">
    </div>
    <div class="pro-user-bio">
        <ul>
            <li>
                <h4>{{ auth()->guard('student')->user()->fname }} {{ auth()->guard('student')->user()->lname }}</h4>
            </li>
            <li>Student N<sup>0</sup>: {{ auth()->guard('student')->user()->regnumber }}</li>
            {{-- <li><a href="#!"><i class="fa fa-envilop"></i> Google: my sample</a></li> --}}
            {{-- <li><a href="#!"><i class="fa fa-twitter"></i> Twitter: my sample</a></li> --}}
            <li><a href="{{ route('student.logout') }}" class="btn btn-danger" style="color: #FFFF">Logout</a></li>
        </ul>
    </div>
</div>

<div class="col-xl-4 col-lg-5 col-md-5">
    <!-- About User -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="user-avatar-section mb-4">

                <div class="d-flex align-items-start flex-column">
                    <img src="{{ asset('images/students/' . $student->imageName) }}" alt="user image"
                        class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                </div>
            </div>
            <small class="card-text text-uppercase">About</small>
            <ul class="list-unstyled mb-4 mt-3">
                <li class="d-flex align-items-center mb-3"><i class="ti ti-user"></i><span
                        class="fw-bold mx-2">Full Name:</span> <span>{{ $student->fname }}
                        {{ $student->lname }}</span></li>
                <li class="d-flex align-items-center mb-3"><i class="ti ti-pin"></i><span
                        class="fw-bold mx-2">Reg Number :</span> <span>{{ $student->regnumber }}</span></li>


                <li class="d-flex align-items-center mb-3"><i class="ti ti-check"></i><span
                        class="fw-bold mx-2">Status:</span>
                    @if ($student->status == 'approved')
                        <span class="badge bg-label-success">Active</span>
                    @else
                        <span class="badge bg-label-danger">Inactive</span>
                    @endif
                </li>
                <li class="d-flex align-items-center mb-3"><i class="ti ti-flag"></i><span
                        class="fw-bold mx-2">Country:</span> <span>{{ $student->country }}</span></li>

            </ul>
            <small class="card-text text-uppercase">Contacts</small>
            <ul class="list-unstyled mb-4 mt-3">
                <li class="d-flex align-items-center mb-3"><i class="ti ti-phone-call"></i><span
                        class="fw-bold mx-2">Contact:</span> <span>{{ $student->phone }}</span></li>
                <li class="d-flex align-items-center mb-3"><i class="ti ti-mail"></i><span
                        class="fw-bold mx-2">Email:</span> <span>{{ $student->email }}</span></li>
            </ul>
            <small class="card-text text-uppercase"></small>

        </div>
    </div>
    <!--/ About User -->

</div>

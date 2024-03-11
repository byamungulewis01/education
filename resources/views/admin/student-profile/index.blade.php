@extends('layouts.app')

@section('title', 'Student Profile')

@section('body')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        @include('admin.student-profile.navigation')

        <div class="row">
            @include('admin.student-profile.side')

            <div class="col-xl-8 col-lg-7 col-md-7">
                @if ($student->status == 'approved')
                    <div class="row">
                        <!-- Connections -->
                        <div class="col-lg-12 col-xl-6">
                            <div class="card card-action mb-4">
                                <div class="card-header align-items-center">
                                    <h5 class="card-action-title mb-0">Admission Letter</h5>
                                </div>
                                <div class="card-body">
                                    <p class="mb-2">Admission Letter is a service provided by the University ..</p>
                                    <a href="{{ route('admin.admission', $student->id) }}"
                                        class="btn btn-primary waves-effect waves-light">Get now</a>
                                </div>
                            </div>
                        </div>
                        <!--/ Connections -->
                        <!-- Teams -->
                        <div class="col-lg-12 col-xl-6">
                            <div class="card card-action mb-4">
                                <div class="card-header align-items-center">
                                    <h5 class="card-action-title mb-0">Certificate</h5>
                                </div>
                                <div class="card-body">
                                    <p class="mb-2">Certificate provide after complete training provided by the University
                                        of
                                        Boost ...</p>
                                    @php
                                        $exam = \App\Models\ExamSetting::where(
                                            'training_id',
                                            $trainings->first()->training_id,
                                        )
                                            ->where('student_id', $student->id)
                                            ->first();
                                    @endphp
                                    @if ($exam && $exam->status == 'success')
                                        <a href="{{ route('admin.certificate', $student->id) }}"
                                            class="btn btn-primary waves-effect waves-light">Get now</a>
                                    @else
                                        <span class="badge bg-danger">Not Complete</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--/ Teams -->
                    </div>
                @endif

                <div class="card mb-4">
                    <h5 class="card-header">ALL TRAININGS</h5>
                    <div class="table-responsive">
                        <table class="table border-top">
                            <thead>
                                <tr>
                                    <th class="text-truncate">#</th>
                                    <th class="text-truncate">Training Name</th>
                                    <th class="text-truncate">Price</th>
                                    <th class="text-truncate">Join Date</th>
                                    <th class="text-truncate">Exam Scheme</th>
                                    <th class="text-truncate">Certificate</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trainings as $item)
                                    @php
                                        @$setting = App\Models\ExamSetting::withTrashed()
                                            ->where('student_id', $item->student_id)
                                            ->where('training_id', $item->training_id)
                                            ->first();
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a
                                                href="{{ route('admin.training.show', $item->training_id) }}">{{ $item->training->title }}</a>
                                        </td>
                                        <td>{{ $item->training->price }}</td>
                                        <td>{{ $item->created_at->format('Y , M d') }}</td>

                                        <td>
                                            @if ($student->status == 'pending')
                                                <span>Not Yet Approved</span>
                                            @else
                                                @if ($setting)
                                                    <a href="{{ route('admin.training.marking_scheme', $setting->id) }}"
                                                        class="text-body"><i class="menu-icon tf-icons ti ti-eye me-0"></i>
                                                        Marking</a>
                                                @else
                                                    <a href="#" class="text-body disabled"><i
                                                            class="menu-icon tf-icons ti ti-eye me-0"></i>
                                                        Marking</a>
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target="#applyCerty{{ $item->id }}">Get
                                                now
                                            </button>
                                            <div class="modal fade" id="applyCerty{{ $item->id }}" tabindex="-1"
                                                aria-hidden="true">
                                                <div
                                                    class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                            <form method="POST" class="row g-2"
                                                                enctype="multipart/form-data"
                                                                action="{{ route('admin.certificate_by_year', $student->id) }}">
                                                                @csrf
                                                                <input type="hidden" name="training_id"
                                                                    value="{{ $item->training_id }}">
                                                                <div class="text-center mb-0">
                                                                    <h3 class="mb-2">Get Certificate</h3>

                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="title" class="form-label">Year of
                                                                        Complishing</label>
                                                                    <input type="date" name="year"
                                                                        class="form-control" id="">
                                                                    {{-- <select name="year" id=""
                                                                        class="form-select">
                                                                        @for ($year = date('Y'); $year >= date('Y') - 10; $year--)
                                                                            <option value="{{ $year }}">
                                                                                {{ $year }}</option>
                                                                        @endfor
                                                                    </select> --}}
                                                                </div>

                                                                <div class="col-12 text-center">
                                                                    <button type="submit"
                                                                        class="btn btn-primary me-sm-3 me-1">Yes
                                                                        Continue</button>
                                                                    <button type="reset" class="btn btn-label-secondary"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close">Cancel</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mb-4">
                    <h5 class="card-header">Change Password</h5>
                    <div class="card-body">
                        <form id="formChangePassword"
                            action="{{ route('admin.student.profile.changePassword', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="alert alert-warning" role="alert">
                                <h5 class="alert-heading mb-2">Ensure that these requirements are met</h5>
                                <span>Minimum 6 characters long, uppercase & symbol</span>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                                    <label class="form-label" for="newPassword">New Password</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" id="newPassword" name="newPassword"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                                    <label class="form-label" for="confirmPassword">Confirm New Password</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" name="confirmPassword"
                                            id="confirmPassword"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary me-2">Change Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endsection

@section('js')
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/js/app-user-view-security.js') }}"></script>
@endsection

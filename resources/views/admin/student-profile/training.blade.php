@extends('layouts.app')

@section('title', 'Student Profile')

@section('body')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        @include('admin.student-profile.navigation')

        <div class="row">
            @include('admin.student-profile.side')

            <div class="col-xl-8 col-lg-7 col-md-7">
                <!-- Change Password -->
                <div class="card mb-4">
                    <h5 class="card-header">All Trainings</h5>
                    <div class="card-body">
                        <div class="card-datatable table-responsive">
                            <table id="datatable" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Training</th>
                                        <th scope="col">Price</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trainings as $item)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td><img src="{{ asset('images/trainings/' . $item->imageName) }}"
                                                    alt="image" class="rounded-square w-50"></td>
                                            <td class="font-weight-bold">{{ $item->title }}</td>
                                            <td>{{ $item->price }} $ </td>
                                            <td>

                                                <button class="btn btn-sm btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#approvalModal{{ $item->id }}">
                                                    <i class="fas fa-check mr-0"></i>Approve
                                                </button>
                                                <div class="modal fade" id="approvalModal{{ $item->id }}" tabindex="-1"
                                                    aria-hidden="true">
                                                    <div
                                                        class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                                <form method="POST" class="row g-2"
                                                                    enctype="multipart/form-data"
                                                                    action="{{ route('admin.student.profile.training_joining', $item->id) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                                                                    <div class="text-center mb-0">
                                                                        <h3 class="mb-2">Jioning Training </h3>
                                                                        <p class="text-muted">
                                                                            This Event will be automatically allow student
                                                                            to have access to <span class="text-warning">{{ $item->title }}</span>
                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12 text-center">
                                                                        <button type="submit"
                                                                            class="btn btn-primary me-sm-3 me-1">Yes
                                                                            Continue</button>
                                                                        <button type="reset"
                                                                            class="btn btn-label-secondary"
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
                </div>

            </div>
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection

@section('js')
    <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({});
        });
    </script>

@endsection

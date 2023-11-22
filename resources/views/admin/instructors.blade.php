@extends('layouts.app')
@section('title', 'Instructors')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-0">Instructors List
                    <a class="btn btn-dark text-white pull-left float-end" data-bs-toggle="modal"
                        data-bs-target="#addModal">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                        <span class="d-none d-sm-inline-block">Instructor</span></a>
                </h5>
                <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered1 modal-simple modal-add-new-cc">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="text-center mb-2">
                                    <h3>Add New Training</h3>
                                </div>
                                <form method="POST" class="row g-2" action="{{ route('admin.instructor.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <label for="title" class="form-label">Title</label>
                                        <input name="title" type="text" class="form-control" required
                                            placeholder="Training Title" value="{{ old('title') }}">
                                    </div>

                                    <div class="col-md-12">

                                        <label for="description" class="form-label">Description</label>
                                        <textarea id="description" name="description" rows="6" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                                    </div>
                                    <div class="col-12 mt-4 text-center">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-datatable table-responsive">
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Users</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Status</th>
                            <th scope="col">Active Trainings</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($instructors as $item)
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar me-3"><img src="{{ asset('images/users/' . $item->imageName) }}"
                                                    alt="Avatar" class="rounded-circle"></div>
                                        </div>
                                        <div class="d-flex flex-column"><a href="app-user-view-account.html"
                                                class="text-body text-truncate"><span class="fw-medium">{{ $item->name }}</span></a><small
                                                class="text-muted">{{ $item->email }}</small></div>
                                    </div>
                                </td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    @if ($item->status == 'active')
                                        <span class="badge bg-info">Active</span>
                                    @else
                                        <span class="badge bg-primary">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    @php
                                        $trainings = \App\Models\Training::where('user_id', $item->id)->count();
                                    @endphp
                                    {{ $trainings }} @if ($trainings == 1) Trainings
                                    @else
                                        Training
                                    @endif
                                </td>

                                <td>

                                    <a href="javascript:;" class="text-body" data-bs-toggle="modal"
                                        data-bs-target="#editModel{{ $item->id }}"><i
                                            class="ti ti-edit ti-sm mx-1"></i></a>

                                    <div class="modal fade" id="editModel{{ $item->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div
                                            class="modal-dialog modal-lg modal-dialog-centered1 modal-simple modal-add-new-cc">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    <div class="text-center mb-2">
                                                        <h3>Edit Training</h3>
                                                    </div>
                                                    <form method="POST" class="row g-3"
                                                        action="{{ route('admin.training.update', $item->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="col-12">
                                                            <label for="title" class="form-label">Title</label>
                                                            <input name="title" type="text" class="form-control"
                                                                required value="{{ $item->title }}">
                                                        </div>

                                                        <div class="col-md-12">

                                                            <label for="description"
                                                                class="form-label">Description</label>
                                                            <textarea id="description" name="description" rows="6" class="form-control" placeholder="Description">{{ $item->description }}</textarea>
                                                        </div>
                                                        <div class="col-12 mt-4 text-center">
                                                            <button type="submit"
                                                                class="btn btn-primary me-sm-3 me-1">Save</button>
                                                            <button type="reset" class="btn btn-label-secondary"
                                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <form id="deleteForm_{{ $item->id }}"
                                        action="{{ route('admin.training.destroy', $item->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="javascript:;" class="text-body delete-record {{ $item->id }}"
                                            data-form-id="deleteForm_{{ $item->id }}">
                                            <i class="ti ti-trash ti-sm mx-1"></i>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Find all elements with class 'delete-record'
            var deleteLinks = document.getElementsByClassName('delete-record');

            // Loop through each delete link
            for (var i = 0; i < deleteLinks.length; i++) {
                // Add click event listener to each delete link
                deleteLinks[i].addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent the default link behavior

                    // Get the form id from the 'data-form-id' attribute
                    var formId = this.getAttribute('data-form-id');

                    // Find the form with the specified id
                    var form = document.getElementById(formId);

                    // Confirm deletion
                    var confirmDelete = confirm('Are you sure to delete?');

                    // If confirmed, submit the form
                    if (confirmDelete) {
                        form.submit();
                    }
                });
            }
        });
    </script>
@endsection

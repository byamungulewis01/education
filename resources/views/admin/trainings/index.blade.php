@extends('layouts.app')
@section('title', 'Trainings')
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
                <h5 class="card-title mb-0">Trainings List
                    <a class="btn btn-dark text-white pull-left float-end" href="{{ route('admin.training.create') }}">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                        <span class="d-none d-sm-inline-block">Training</span></a>
                </h5>

            </div>

            <div class="card-datatable table-responsive">
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Training</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Instructor</th>
                            <th scope="col">Students</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trainings as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td><img src="{{ asset('images/trainings/' . $item->imageName) }}" alt="image" width="120"></td>
                                <td class="font-weight-bold">{{ $item->title }}</td>
                                <td class="font-weight-bold">{{ $item->category->title }}</td>
                                <td>{{ $item->price }} $ </td>
                                <td>{{ $item->user->name }}</td>
                                <td>
                                    @if($item->students() == 0)
                                    <a href="{{ route('admin.training.students', $item->id) }}">{{ $item->students() }} Student </a>
                                    @elseif($item->students() == 1)
                                    <a href="{{ route('admin.training.students', $item->id) }}">{{ $item->students() }} Student</a>
                                    @else
                                   <a href="{{ route('admin.training.students', $item->id) }}"> {{ $item->students() }} Students</a>
                                    @endif
                                </td>

                                {{-- <td>
                                    @if ($item->status == 'active')
                                        <span class="badge bg-primary">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td> --}}

                                <td>
                                    {{-- <a href="javascript:;" class="text-body delete-record 1"><i class="ti ti-trash ti-sm mx-2" data-id="1"></i></a> --}}
                                    <a href="{{ route('admin.training.show', $item->id) }}" class="text-body"><i
                                            class="ti ti-eye ti-sm mx-1"></i></a>
                                    <a href="{{ route('admin.training.edit',$item) }}" class="text-body" ><i
                                            class="ti ti-edit ti-sm mx-1"></i></a>
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

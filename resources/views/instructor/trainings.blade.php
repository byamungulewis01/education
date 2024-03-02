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

                </h5>
            </div>

            <div class="card-datatable table-responsive">
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th scope="col">Training</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Students</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trainings as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td class="font-weight-bold">{{ $item->title }}</td>
                                <td>{{ $item->price }} $ </td>
                                <td>
                                    @if ($item->status == 'active')
                                        <span class="badge bg-primary">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>

                                <td>{{ $item->students() }}</td>
                                <td>
                                    @if($item->students() == 0)
                                    {{ $item->students() }} Student
                                    @elseif($item->students() == 1)
                                    <a href="">{{ $item->students() }} Student</a>
                                    @else
                                   <a href=""> {{ $item->students() }} Students</a>
                                    @endif
                                </td>

                                <td>
                                    {{-- <a href="javascript:;" class="text-body delete-record 1"><i class="ti ti-trash ti-sm mx-2" data-id="1"></i></a> --}}
                                    <a href="{{ route('instructor.training.show', $item->id) }}"
                                        class="text-body"><i class="ti ti-eye ti-sm mx-1"></i></a>

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
@endsection

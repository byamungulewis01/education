@extends('layouts.app')
@section('title', 'Students')
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
                <h5 class="card-title mb-0"> Students List For Training </h5>
            </div>
            <div class="card-datatable table-responsive">
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Reg Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Marks</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                            @php
                                @$setting = App\Models\ExamSetting::withTrashed()
                                    ->where('student_id', $item->student_id)
                                    ->where('training_id', $item->training_id)
                                    ->first();
                            @endphp
                            <tr @if ($item->student->status == 'pending') class="bg-danger text-white" @endif>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->student->regnumber }}</td>
                                <td>{{ $item->student->fname }} {{ $item->student->lname }}</td>
                                <td>{{ $item->student->email }}</td>
                                <td>{{ $item->student->phone }}</td>
                                <td>
                                    @if ($setting)
                                        {{ $setting->total_marks }}
                                    @endif
                                </td>
                                <td>
                                    @if ($setting)
                                        @if ($setting->status == 'success')
                                            <span class="badge bg-success">Success</span>
                                        @else
                                            <span class="badge bg-danger">Fail</span>
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    @if ($item->student->status == 'pending')
                                        <span>Not Yet Approved</span>
                                    @else
                                        @if ($setting)
                                            <a href="{{ route('admin.training.marking_scheme', $setting->id) }}"
                                                class="btn btn-sm btn-primary"><i class="menu-icon tf-icons ti ti-eye"></i>
                                                Marking Scheme</a>
                                        @else
                                            <a href="#" class="btn btn-sm btn-primary disabled"><i
                                                    class="menu-icon tf-icons ti ti-eye"></i>
                                                Marking Scheme</a>
                                        @endif
                                    @endif
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

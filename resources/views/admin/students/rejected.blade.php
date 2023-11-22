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
                <h5 class="card-title mb-0"> Rejected List</h5>
            </div>
            <div class="card-datatable table-responsive">
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fname</th>
                            <th scope="col">Lname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Required Docs</th>
                            <th scope="col">Approval</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->fname }}</td>
                                <td>{{ $item->lname }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    <a class="text-primary" target="blank"
                                        href="{{ asset('files/' . $item->identity_doc_path) }}">ID/Passpord</a> |
                                    <a class="text-primary" target="blank"
                                        href="{{ asset('files/' . $item->academic_doc_path) }}">Academic</a>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-success" data-bs-toggle="modal"
                                        data-bs-target="#approvalModal{{ $item->id }}">
                                        <i class="fas fa-check mr-0"></i>
                                    </button>

                                    <div class="modal fade" id="approvalModal{{ $item->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    <form method="POST" class="row g-2" enctype="multipart/form-data"
                                                        action="{{ route('admin.student.approve', $item->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="text-center mb-0">
                                                            <h3 class="mb-2">Student Approval</h3>
                                                            <p class="text-muted">
                                                                This Event will be automatically approve student and make
                                                                sure you have ready all requirement
                                                            </p>
                                                        </div>

                                                        <div class="col-12 text-center">
                                                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Yes
                                                                Continue</button>
                                                            <button type="reset" class="btn btn-label-secondary"
                                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
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

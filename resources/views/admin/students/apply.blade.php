@extends('layouts.app')
@section('title', 'Students')
@section('body')
    <!-- Row -->
    <div class="row justify-content-between">
        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
            <div class="dashboard_wrap d-flex align-items-center justify-content-between">
                <div class="arion">
                    <nav class="transparent">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Application
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="dashboard_wrap">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                        <div class="table-responsive">
                            <table class="table dash_list">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Required Docs</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->fname }} {{ $item->lname }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>
                                                <a class="text-info" target="blank"
                                                    href="{{ asset('files/' . $item->identity_doc_path) }}">ID/Passpord</a> |
                                                <a class="text-info" target="blank"
                                                    href="{{ asset('files/' . $item->academic_doc_path) }}">Academic</a>
                                            </td>

                                            <td>
                                                {{-- <a href="javascript:void(0);" data-toggle="modal" data-target="#login" class="crs_yuo12 w-auto text-white theme-bg">
                                                    <span class="embos_45"><i class="fas fa-sign-in-alt mr-1"></i>Sign In</span>
                                                </a> --}}
                                                <button class="btn btn-success" data-toggle="modal" data-target="#approvalModal"><i class="fas fa-check mr-0"></i></button>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#rejectModal"><i class="fas fa-times mr-0"></i></button>
                                                <div class="modal" id="approvalModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="catModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Student Approval</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true"><i
                                                                            class="fas fa-times-circle"></i></span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="forms_block" method="post" action="{{ route('admin.student.approve',$item->id) }}">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <h5>Are you sure to Approval ?</h5>
                                                                    <div class="form-group smalls">
                                                                        <button class="btn theme-bg text-white">Yes Continue</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal" id="rejectModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="catModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title">Are you sure to Reject ?</h3>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true"><i
                                                                            class="fas fa-times-circle"></i></span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="forms_block" method="post" action="{{ route('admin.student.reject',$item->id) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group smalls">
                                                                        <label>Reason</label>
                                                                        <textarea name="reason" class="form-control" cols="30" rows="10"></textarea>
                                                                    </div>
                                                                    <div class="form-group smalls">
                                                                        <button class="btn theme-bg text-white">Yes Continue</button>
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

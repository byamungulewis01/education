@extends('layouts.app')
@section('title', 'Profile')
@section('body')
    <!-- Row -->
    <div class="row justify-content-between">
        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
            <div class="dashboard_wrap d-flex align-items-center justify-content-between">
                <div class="arion">
                    <nav class="transparent">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->

    <div class="row">
        <div class="col-xl-7 col-lg-6 col-md-12">
            <div class="dashboard_wrap">

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                        <h6 class="m-0">Basic Detail</h6>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <form method="post" action="{{ route('admin.changeProfile') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group smalls">
                                <label>Last Name</label>
                                <input name="name" type="text" class="form-control"
                                    value="{{ auth()->user()->name }}" />
                            </div>
                            <div class="form-group smalls">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control"
                                    value="{{ auth()->user()->email }}" />
                            </div>
                            <div class="form-group smalls">
                                <label>Phone</label>
                                <input name="phone" type="text" class="form-control"
                                    value="{{ auth()->user()->phone }}" />
                            </div>

                            <div class="form-group smalls">
                                <label>Profile Image</label>
                                <input name="image" type="file" class="form-control" />
                            </div>
                            <div class="form-group smalls">
                                <button class="btn theme-bg text-white">Save Change</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-5 col-lg-6 col-md-12">
            <div class="dashboard_wrap">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                        <h6 class="m-0">Security Settings</h6>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <form method="post" action="{{ route('admin.changePassword') }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group smalls">
                                <label>Current Password</label>
                                <input name="old_password" type="password" class="form-control" />
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group smalls">
                                <label>New Password</label>
                                <input name="password" type="password" class="form-control" />
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group smalls">
                                <label>Confirm Password</label>
                                <input name="password_confirmation" type="password" class="form-control" />
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group smalls">
                                <button class="btn theme-bg text-white">Save Change</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

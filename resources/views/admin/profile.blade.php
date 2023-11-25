@extends('layouts.app')
@section('title', 'Profile')
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
        <div class="row">
            <div class="col-6">
                <div class="card mb-4">
                    <h5 class="card-header">Basic Detail</h5>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.changeProfile') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12 mb-2">
                                <label>Last Name</label>
                                <input name="name" type="text" class="form-control"
                                    value="{{ auth()->user()->name }}" />
                            </div>
                            <div class="col-12 mb-2">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control"
                                    value="{{ auth()->user()->email }}" />
                            </div>
                            <div class="col-12 mb-2">
                                <label>Phone</label>
                                <input name="phone" type="text" class="form-control"
                                    value="{{ auth()->user()->phone }}" />
                            </div>
                            <div class="col-12 mb-2">
                                <label>Profile Image</label>
                                <input name="image" type="file" class="form-control" />
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary me-2 waves-effect waves-light">Save
                                    changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-4">
                    <h5 class="card-header">Security Settings</h5>
                    <div class="card-body">
                        <form action="{{ route('admin.changePassword') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-12 mb-2">
                                <label>Current Password</label>
                                <input name="old_password" type="password" class="form-control" />
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb-2">
                                <label>New Password</label>
                                <input name="password" type="password" class="form-control" />
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb-2">
                                <label>Confirm Password</label>
                                <input name="password_confirmation" type="password" class="form-control" />
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary me-2 waves-effect waves-light">Save
                                    changes</button>
                                <button type="reset" class="btn btn-label-secondary waves-effect">Cancel</button>
                            </div>
                            <input type="hidden">
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>

    </div>
@endsection

@extends('layouts.front')
@section('title', 'Profile')
@section('body')
       <!-- Fun facts: Start -->
       <section class="section-py landing-fun-facts mt-3">
        <div class="container">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="card mb-4">
                            <h5 class="card-header">Basic Detail</h5>
                            <div class="card-body">
                                <form method="post" action="{{ route('admin.changeProfile') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-12 mb-2">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ auth()->guard('client')->user()->name }}" />
                                    </div>
                                    <div class="col-12 mb-2">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ auth()->guard('client')->user()->email }}" />
                                    </div>
                                    <div class="col-12 mb-2">
                                        <label>Phone</label>
                                        <input name="phone" type="text" class="form-control"
                                            value="{{ auth()->guard('client')->user()->phone }}" />
                                    </div>
                                    <div class="col-12 mb-2">
                                        <label>Profile Image</label>
                                        <input type="file" class="form-control" />
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

            </div>
        </div>
    </section>
    <!-- Fun facts: End -->
@endsection

@extends('home.app')
@section('title', 'Profile')
@section('body')
    <section class="gray pt-4">
        <div class="container-fluid">

            <div class="row">

                @include('student.sidebar')

                <div class="col-lg-9 col-md-9 col-sm-12">

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
                                        <form>
                                            <div class="form-group smalls">
                                                <label>First Name*</label>
                                                <input type="text" class="form-control" value="{{ auth()->guard('student')->user()->fname }}" />
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" value="{{ auth()->guard('student')->user()->lname }}" />
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Email</label>
                                                <input type="email" class="form-control" value="{{ auth()->guard('student')->user()->email }}" />
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" value="{{ auth()->guard('student')->user()->phone }}" />
                                            </div>

                                            <div class="form-group smalls">
                                                <label>Profile Image</label>
                                                <input type="file" class="form-control" />
                                            </div>
                                            <div class="form-group smalls">
                                                <button class="btn theme-bg text-white" type="button">Save Change</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-5 col-lg-6 col-md-12">
                            <div class="dashboard_wrap">

                                <div class="row justify-content-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <form>
                                            <div class="form-group smalls">
                                                <label>Current Password</label>
                                                <input type="password" class="form-control" />
                                            </div>
                                            <div class="form-group smalls">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" />
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control" />
                                            </div>
                                            <div class="form-group smalls">
                                                <button class="btn theme-bg text-white" type="button">Save Change</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection

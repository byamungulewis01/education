@extends('layouts.app')
@section('title', 'Dashboard')
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- View sales -->
            <div class="col-xl-4 mb-4 col-lg-5 col-12">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-7">
                            <div class="card-body text-nowrap">
                                <h5 class="card-title mb-0">Welcome, {{ auth()->user()->name }}!</h5>
                                <p class="mb-2">Todays reminder</p>
                                <h4 class="text-primary mb-1">0</h4>
                                <a href="javascript:;" class="btn btn-primary">View Profile</a>
                            </div>
                        </div>
                        {{-- <div class="col-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                 <img src="{{ asset('assets/img/illustrations/card-advance-sale.png') }}" height="140" alt="view sales">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- View sales -->

            <div class="col-xl-8 mb-4 col-lg-7 col-12">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="card-title mb-0">Statistics</h5>
                            <small class="text-muted">Updated 1 week ago</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-primary me-4 p-2"><i class="ti ti-users ti-lg"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">{{ $statistics->students }}</h5>
                                        <small>Students</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-info me-4 p-2"><i class="ti ti-users ti-lg"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">{{ $statistics->instructors }}</h5>
                                        <small>Instructors</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-danger me-4 p-2"><i class="ti ti-link ti-lg"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">{{ $statistics->courses }}</h5>
                                        <small>Total Courses</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-success me-4 p-2"><i
                                            class="ti ti-currency-dollar ti-lg"></i></div>
                                    <div class="card-info">
                                        <h5 class="mb-0">${{ $statistics->revenue }}</h5>
                                        <small>Revenue</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->


@endsection

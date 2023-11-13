@extends('home.app')
@section('title', 'Student Dashboard')
@section('body')
    <section class="gray pt-4">
        <div class="container-fluid">

            <div class="row">

                @include('student.sidebar')

                <div class="col-lg-9 col-md-9 col-sm-12">

                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Row -->
                    {{-- <div class="row">

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div
                                    class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center theme-bg mb-2">
                                    <div class="position-absolute text-white h5 mb-0"><i class="fas fa-book"></i></div>
                                </div>
                                <div class="dashboard_stats_wrap_content">
                                    <h4>607</h4> <span>Number of Cources</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div
                                    class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-primary mb-2">
                                    <div class="position-absolute text-white h5 mb-0"><i class="fas fa-video"></i></div>
                                </div>
                                <div class="dashboard_stats_wrap_content">
                                    <h4>5.2k</h4> <span>Number of Lession</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div
                                    class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-warning mb-2">
                                    <div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div>
                                </div>
                                <div class="dashboard_stats_wrap_content">
                                    <h4>78k</h4> <span>Number of Students</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div
                                    class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-purple mb-2">
                                    <div class="position-absolute text-white h5 mb-0"><i class="fas fa-gem"></i></div>
                                </div>
                                <div class="dashboard_stats_wrap_content">
                                    <h4>32k</h4> <span>Number of Enrollment</span>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                    <!-- /Row -->

                </div>

            </div>

        </div>
    </section>
@endsection

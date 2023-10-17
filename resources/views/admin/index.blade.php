@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('body')
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
    <!-- /Row -->

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Admin Revenue This Year</h4>
                </div>
                <div class="card-body">
                    <div class="chart" id="extra-area-chart" style="height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row -->
    <div class="row">

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="dashboard_stats_wrap">
                <div
                    class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center theme-bg mb-2">
                    <div class="position-absolute text-white h5 mb-0"><i class="fas fa-book"></i>
                    </div>
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
                    <div class="position-absolute text-white h5 mb-0"><i class="fas fa-video"></i>
                    </div>
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
                    <div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i>
                    </div>
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
                    <div class="position-absolute text-white h5 mb-0"><i class="fas fa-gem"></i>
                    </div>
                </div>
                <div class="dashboard_stats_wrap_content">
                    <h4>32k</h4> <span>Number of Enrollment</span>
                </div>
            </div>
        </div>

    </div>
    <!-- /Row -->

    <!-- Row -->
    <div class="row">

        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <h5>Featured Cources</h5>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="grousp_crs">
                        <div class="grousp_crs_left">
                            <div class="grousp_crs_thumb"><img src="{{ asset('assets/img/c-7.png') }}" class="img-fluid"
                                    alt="" /></div>
                            <div class="grousp_crs_caption">
                                <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                            </div>
                        </div>
                        <div class="grousp_crs_right">
                            <div class="frt_125"><i class="fas fa-fire text-warning mr-1"></i>8.7
                            </div>
                            <div class="frt_but"><a href="#" class="btn text-white theme-bg">View Course</a></div>
                        </div>
                    </div>
                    <div class="grousp_crs">
                        <div class="grousp_crs_left">
                            <div class="grousp_crs_thumb"><img src="{{ asset('assets/img/c-6.png') }}" class="img-fluid"
                                    alt="" /></div>
                            <div class="grousp_crs_caption">
                                <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                            </div>
                        </div>
                        <div class="grousp_crs_right">
                            <div class="frt_125"><i class="fas fa-fire text-warning mr-1"></i>8.7
                            </div>
                            <div class="frt_but"><a href="#" class="btn text-white theme-bg">View Course</a></div>
                        </div>
                    </div>
                    <div class="grousp_crs">
                        <div class="grousp_crs_left">
                            <div class="grousp_crs_thumb"><img src="{{ asset('assets/img/c-5.png') }}" class="img-fluid"
                                    alt="" /></div>
                            <div class="grousp_crs_caption">
                                <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                            </div>
                        </div>
                        <div class="grousp_crs_right">
                            <div class="frt_125"><i class="fas fa-fire text-warning mr-1"></i>8.7
                            </div>
                            <div class="frt_but"><a href="#" class="btn text-white theme-bg">View Course</a></div>
                        </div>
                    </div>
                    <div class="grousp_crs">
                        <div class="grousp_crs_left">
                            <div class="grousp_crs_thumb"><img src="{{ asset('assets/img/c-4.png') }}" class="img-fluid"
                                    alt="" /></div>
                            <div class="grousp_crs_caption">
                                <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                            </div>
                        </div>
                        <div class="grousp_crs_right">
                            <div class="frt_125"><i class="fas fa-fire text-warning mr-1"></i>8.7
                            </div>
                            <div class="frt_but"><a href="#" class="btn text-white theme-bg">View Course</a></div>
                        </div>
                    </div>
                    <div class="grousp_crs">
                        <div class="grousp_crs_left">
                            <div class="grousp_crs_thumb"><img src="{{ asset('assets/img/c-3.png') }}" class="img-fluid"
                                    alt="" /></div>
                            <div class="grousp_crs_caption">
                                <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                            </div>
                        </div>
                        <div class="grousp_crs_right">
                            <div class="frt_125"><i class="fas fa-fire text-warning mr-1"></i>8.7
                            </div>
                            <div class="frt_but"><a href="#" class="btn text-white theme-bg">View Course</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h6>Notifications</h6>
                </div>
                <div class="ground-list ground-hover-list">
                    <div class="ground ground-list-single">
                        <div
                            class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                            <div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i></div>
                        </div>

                        <div class="ground-content">
                            <h6><a href="#">Maryam Amiri</a></h6>
                            <small class="text-fade">New User Enrolled in Python</small>
                            <span class="small">Just Now</span>
                        </div>
                    </div>

                    <div class="ground ground-list-single">
                        <div
                            class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-danger">
                            <div class="position-absolute text-danger h5 mb-0"><i class="fas fa-comments"></i></div>
                        </div>

                        <div class="ground-content">
                            <h6><a href="#">Shilpa Rana</a></h6>
                            <small class="text-fade">Shilpa Send a Message</small>
                            <span class="small">02 Min Ago</span>
                        </div>
                    </div>

                    <div class="ground ground-list-single">
                        <div
                            class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-info">
                            <div class="position-absolute text-info h5 mb-0"><i class="fas fa-grin-squint-tears"></i>
                            </div>
                        </div>

                        <div class="ground-content">
                            <h6><a href="#">Amar Muskali</a></h6>
                            <small class="text-fade">Need Responsive Business Tem...</small>
                            <span class="small">10 Min Ago</span>
                        </div>
                    </div>

                    <div class="ground ground-list-single">
                        <div
                            class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-purple">
                            <div class="position-absolute text-purple h5 mb-0"><i class="fas fa-briefcase"></i></div>
                        </div>

                        <div class="ground-content">
                            <h6><a href="#">Maryam Amiri</a></h6>
                            <small class="text-fade">Next Meeting on Tuesday..</small>
                            <span class="small">15 Min Ago</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- /Row -->
@endsection

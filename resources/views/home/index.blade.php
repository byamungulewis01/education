@extends('home.app')
@section('title', 'Home')
@section('body')
    <!-- ============================ Hero Banner  Start================================== -->
    <div class="hero_banner image-cover image_bottom h7_bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="simple-search-wrap text-left">
                        <div class="hero_search-2">
                            <div class="elsio_tag yellow">LISTEN TO OUR NEW ANTHEM</div>
                            <h1 class="banner_title mb-4">The Best<br>e-Learning Cources For<br><span class="light">Better
                                    Future</span></h1>
                            <p class="font-lg mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore.</p>
                            <div class="input-group simple_search">
                                <i class="fa fa-search ico"></i>
                                <input type="text" class="form-control" placeholder="Search Your Cources">
                                <div class="input-group-append">
                                    <button class="btn theme-bg" type="button">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="side_block extream_img">
                        <div class="list_crs_img">
                            <img src="{{ asset('assets/img/ic-1.png') }}" class="img-fluid cirl animate-fl-y"
                                alt="" />
                            <img src="{{ asset('assets/img/ic-2.png') }}" class="img-fluid arrow animate-fl-x"
                                alt="" />
                            <img src="{{ asset('assets/img/ic-3.png') }}" class="img-fluid moon animate-fl-x"
                                alt="" />
                        </div>
                        <img src="{{ asset('assets/img/side-2.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ============================ Cources Start ================================== -->
    <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center mb-4">
                        <h2>Explore Top <span class="theme-cl">Categories</span></h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                            deleniti atque corrupti quos dolores</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($schools as $item)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="edu_cat_2 cat-{{ $loop->iteration }}">
                            <div class="edu_cat_icons">
                                <a class="pic-main" href="{{ route('school', encrypt($item->id)) }}"><img
                                        src="{{ asset('images/' . $item->imageName) }}" class="img-fluid"
                                        alt="" /></a>
                            </div>
                            <div class="edu_cat_data">
                                <h4 class="title"><a href="{{ route('school', encrypt($item->id)) }}">{{ $item->title }}</a></h4>
                                <ul class="meta">
                                    <li class="font-weight-bold">{{ $item->courses->count() }} Courses</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Cources End ================================== -->

    <!-- ============================ Instructor Start ================================== -->
    <section class="min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>Best Cources by Top <span class="theme-cl">Instructor</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="crs_trt_grid">
                        <div class="crs_trt_thumb circle">
                            <a href="instructor-detail.html" class="crs_trt_thum_link"><img src="assets/img/t-8.png"
                                    class="img-fluid circle" alt=""></a>
                        </div>
                        <div class="crs_trt_caption">
                            <div class="instructor_tag dark"><span>Physics Teacher</span></div>
                            <div class="instructor_title">
                                <h4><a href="instructor-detail.html">Alisha P. Paradis</a></h4>
                            </div>
                            <div class="trt_rate_inf">
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star-half filled"></i>
                                <span class="alt_rates">(244 Reviews)</span>
                            </div>
                        </div>
                        <div class="crs_trt_footer">
                            <div class="crs_trt_ent"><i class="fa fa-user"></i> 2.5k Users Enrolled</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="crs_trt_grid">
                        <div class="crs_trt_thumb circle">
                            <a href="instructor-detail.html" class="crs_trt_thum_link"><img src="assets/img/t-1.png"
                                    class="img-fluid circle" alt=""></a>
                        </div>
                        <div class="crs_trt_caption">
                            <div class="instructor_tag dark"><span>History Teacher</span></div>
                            <div class="instructor_title">
                                <h4><a href="instructor-detail.html">Melissa A. Maynard</a></h4>
                            </div>
                            <div class="trt_rate_inf">
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star-half filled"></i>
                                <span class="alt_rates">(119 Reviews)</span>
                            </div>
                        </div>
                        <div class="crs_trt_footer">
                            <div class="crs_trt_ent"><i class="fa fa-user"></i> 3.2k Users Enrolled</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="crs_trt_grid">
                        <div class="crs_trt_thumb circle">
                            <a href="instructor-detail.html" class="crs_trt_thum_link"><img src="assets/img/t-2.png"
                                    class="img-fluid circle" alt=""></a>
                        </div>
                        <div class="crs_trt_caption">
                            <div class="instructor_tag dark"><span>Hindi Teacher</span></div>
                            <div class="instructor_title">
                                <h4><a href="instructor-detail.html">Isaias C. Poovey</a></h4>
                            </div>
                            <div class="trt_rate_inf">
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star-half filled"></i>
                                <span class="alt_rates">(96 Reviews)</span>
                            </div>
                        </div>
                        <div class="crs_trt_footer">
                            <div class="crs_trt_ent"><i class="fa fa-user"></i> 2.2k Users Enrolled</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="crs_trt_grid">
                        <div class="crs_trt_thumb circle">
                            <a href="instructor-detail.html" class="crs_trt_thum_link"><img src="assets/img/t-3.png"
                                    class="img-fluid circle" alt=""></a>
                        </div>
                        <div class="crs_trt_caption">
                            <div class="instructor_tag dark"><span>Math Teacher</span></div>
                            <div class="instructor_title">
                                <h4><a href="instructor-detail.html">Vivian E. Winders</a></h4>
                            </div>
                            <div class="trt_rate_inf">
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star-half filled"></i>
                                <span class="alt_rates">(149 Reviews)</span>
                            </div>
                        </div>
                        <div class="crs_trt_footer">
                            <div class="crs_trt_ent"><i class="fa fa-user"></i> 3.1k Users Enrolled</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="crs_trt_grid">
                        <div class="crs_trt_thumb circle">
                            <a href="instructor-detail.html" class="crs_trt_thum_link"><img src="assets/img/t-4.png"
                                    class="img-fluid circle" alt=""></a>
                        </div>
                        <div class="crs_trt_caption">
                            <div class="instructor_tag dark"><span>Bio Teacher</span></div>
                            <div class="instructor_title">
                                <h4><a href="instructor-detail.html">Jeffery C. Watson</a></h4>
                            </div>
                            <div class="trt_rate_inf">
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star-half filled"></i>
                                <span class="alt_rates">(204 Reviews)</span>
                            </div>
                        </div>
                        <div class="crs_trt_footer">
                            <div class="crs_trt_ent"><i class="fa fa-user"></i> 2.3k Users Enrolled</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="crs_trt_grid">
                        <div class="crs_trt_thumb circle">
                            <a href="instructor-detail.html" class="crs_trt_thum_link"><img src="assets/img/t-5.png"
                                    class="img-fluid circle" alt=""></a>
                        </div>
                        <div class="crs_trt_caption">
                            <div class="instructor_tag dark"><span>Chemistry Teacher</span></div>
                            <div class="instructor_title">
                                <h4><a href="instructor-detail.html">Sean K. Leon</a></h4>
                            </div>
                            <div class="trt_rate_inf">
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star-half filled"></i>
                                <span class="alt_rates">(74 Reviews)</span>
                            </div>
                        </div>
                        <div class="crs_trt_footer">
                            <div class="crs_trt_ent"><i class="fa fa-user"></i> 1.5k Users Enrolled</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="crs_trt_grid">
                        <div class="crs_trt_thumb circle">
                            <a href="instructor-detail.html" class="crs_trt_thum_link"><img src="assets/img/t-6.png"
                                    class="img-fluid circle" alt=""></a>
                        </div>
                        <div class="crs_trt_caption">
                            <div class="instructor_tag dark"><span>Sociology Teacher</span></div>
                            <div class="instructor_title">
                                <h4><a href="instructor-detail.html">Gertrude D. Shorter</a></h4>
                            </div>
                            <div class="trt_rate_inf">
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star-half filled"></i>
                                <span class="alt_rates">(96 Reviews)</span>
                            </div>
                        </div>
                        <div class="crs_trt_footer">
                            <div class="crs_trt_ent"><i class="fa fa-user"></i> 1.2k Users Enrolled</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="crs_trt_grid">
                        <div class="crs_trt_thumb circle">
                            <a href="instructor-detail.html" class="crs_trt_thum_link"><img src="assets/img/t-7.png"
                                    class="img-fluid circle" alt=""></a>
                        </div>
                        <div class="crs_trt_caption">
                            <div class="instructor_tag dark"><span>Regining Teacher</span></div>
                            <div class="instructor_title">
                                <h4><a href="instructor-detail.html">David L. Garza</a></h4>
                            </div>
                            <div class="trt_rate_inf">
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star filled"></i>
                                <i class="fa fa-star-half filled"></i>
                                <span class="alt_rates">(73 Reviews)</span>
                            </div>
                        </div>
                        <div class="crs_trt_footer">
                            <div class="crs_trt_ent"><i class="fa fa-user"></i> 2.1k Users Enrolled</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection

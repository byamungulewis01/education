@extends('home.app')
@section('title','Home')
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
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>Featured Cources <span class="theme-cl">For You</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="crs_grid_list">

                        <div class="crs_grid_list_thumb">
                            <a href="course-detail.html"><img src="assets/img/cr-2.jpg" class="img-fluid rounded"
                                    alt=""></a>
                        </div>

                        <div class="crs_grid_list_caption">
                            <div class="crs_lt_101">
                                <span class="est st_1">Development</span>
                                <span class="est st_2">PHP</span>
                            </div>
                            <div class="crs_lt_102">
                                <h4 class="crs_tit">Advance PHP knowledge with laravel to make smart web</h4>
                                <span class="crs_auth"><i>By</i> Adam Wilson</span>
                            </div>
                            <div class="crs_lt_103">
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                        <li><i class="fa fa-user"></i><span>10k User</span></li>
                                        <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price">
                                        <h2><span class="currency">$</span><span class="theme-cl">99</span></h2>
                                    </div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="course-detail.html"
                                            class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="crs_grid_list">

                        <div class="crs_grid_list_thumb">
                            <a href="course-detail.html"><img src="assets/img/cr-3.jpg" class="img-fluid rounded"
                                    alt=""></a>
                        </div>

                        <div class="crs_grid_list_caption">
                            <div class="crs_lt_101">
                                <span class="est st_1">Insurence</span>
                                <span class="est st_2">Banking</span>
                            </div>
                            <div class="crs_lt_102">
                                <h4 class="crs_tit">The complete accounting & bank financial course 2021</h4>
                                <span class="crs_auth"><i>By</i> Mike Hussey</span>
                            </div>
                            <div class="crs_lt_103">
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                        <li><i class="fa fa-user"></i><span>10k User</span></li>
                                        <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price">
                                        <h2><span class="currency">$</span><span class="theme-cl">139</span></h2>
                                    </div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="course-detail.html"
                                            class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="crs_grid_list">

                        <div class="crs_grid_list_thumb">
                            <a href="course-detail.html"><img src="assets/img/cr-4.jpg" class="img-fluid rounded"
                                    alt=""></a>
                        </div>

                        <div class="crs_grid_list_caption">
                            <div class="crs_lt_101">
                                <span class="est st_1">Software</span>
                                <span class="est st_2">Technology</span>
                            </div>
                            <div class="crs_lt_102">
                                <h4 class="crs_tit">The complete business plan course includes 50 templates</h4>
                                <span class="crs_auth"><i>By</i> Litha Joshi</span>
                            </div>
                            <div class="crs_lt_103">
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                        <li><i class="fa fa-user"></i><span>10k User</span></li>
                                        <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price">
                                        <h2><span class="currency">$</span><span class="theme-cl">77.99</span></h2>
                                    </div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="course-detail.html"
                                            class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="crs_grid_list">

                        <div class="crs_grid_list_thumb">
                            <a href="course-detail.html"><img src="assets/img/cr-5.jpg" class="img-fluid rounded"
                                    alt=""></a>
                        </div>

                        <div class="crs_grid_list_caption">
                            <div class="crs_lt_101">
                                <span class="est st_1">Business</span>
                                <span class="est st_2">Finance</span>
                            </div>
                            <div class="crs_lt_102">
                                <h4 class="crs_tit">Full web designing course with 20 web template designing</h4>
                                <span class="crs_auth"><i>By</i> Adam Wilson</span>
                            </div>
                            <div class="crs_lt_103">
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                        <li><i class="fa fa-user"></i><span>10k User</span></li>
                                        <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price">
                                        <h2><span class="currency">$</span><span class="theme-cl">129</span></h2>
                                    </div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="course-detail.html"
                                            class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 mt-2">
                    <div class="text-center"><a href="grid-layout-with-sidebar.html"
                            class="btn btn-md theme-bg-light theme-cl">Explore More Cources</a></div>
                </div>
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

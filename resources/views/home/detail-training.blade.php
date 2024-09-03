@extends('home.app')
@section('title', 'Coureses')
@section('body')
    <!-- ============================ Page Title Start================================== -->
    <div class="ed_detail_head">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="dlkio_452">
                        <div class="ed_detail_wrap">
                            <div class="crs_cates cl_1"><span>{{ $training->category->title }}</span></div>
                            <div class="ed_header_caption">
                                <h2 class="ed_title">{{ $training->title }}</h2>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12">
                    <ul class="row p-0">
                        <li class="col-lg-6 col-md-6 col-sm-6 pt-2 pb-2"><i
                                class="fas fa-star mr-1 text-warning"></i><span>4.9 Star (5,254)</span></li>
                        <li class="col-lg-6 col-md-6 col-sm-6 pt-2 pb-2"><i
                                class="fas fa-clock mr-1 text-success"></i><span>4 Hour 47 min</span></li>
                        <li class="col-lg-6 col-md-6 col-sm-6 pt-2 pb-2"><i
                                class="fas fa-user mr-1 text-info"></i><span>2,54,740 Enrolled</span></li>
                        <li class="col-lg-6 col-md-6 col-sm-6 pt-2 pb-2"><i
                                class="fas fa-video mr-1 text-danger"></i><span>47 Lectures</span></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Course Detail ================================== -->
    <section class="gray pt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-12 order-lg-first">
                    <!-- All Info Show in Tab -->
                    <div class="tab_box_info">
  

                        <div class="tab-content" id="pills-tabContent">

                            <!-- Overview Detail -->
                            <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                aria-labelledby="overview-tab">
                                <!-- Overview -->
                                <div class="edu_wraper">
                                    <h4 class="edu_title">Course Overview</h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                        occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                        mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                        expedita distinctio.</p>
                                    <p>Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto. Sam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <h6>Requirements</h6>
                                    <ul class="simple-list p-0">
                                        <li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
                                        <li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
                                        <li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
                                        <li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
                                        <li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
                                    </ul>
                                </div>

                                <div class="edu_wraper">
                                    <h4 class="edu_title">Certification</h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                        occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                        mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                        expedita distinctio.</p>
                                    <p>Aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto. Sam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>

                                <!-- Overview -->
                                <div class="edu_wraper">
                                    <h4 class="edu_title">What you'll learn</h4>
                                    <ul class="lists-3 row">
                                        <li class="col-xl-4 col-lg-6 col-md-6 m-0">At vero eos et accusamus</li>
                                        <li class="col-xl-4 col-lg-6 col-md-6 m-0">At vero eos et accusamus</li>
                                        <li class="col-xl-4 col-lg-6 col-md-6 m-0">At vero eos et accusamus</li>
                                        <li class="col-xl-4 col-lg-6 col-md-6 m-0">At vero eos et accusamus</li>
                                        <li class="col-xl-4 col-lg-6 col-md-6 m-0">At vero eos et accusamus</li>
                                        <li class="col-xl-4 col-lg-6 col-md-6 m-0">At vero eos et accusamus</li>
                                        <li class="col-xl-4 col-lg-6 col-md-6 m-0">At vero eos et accusamus</li>
                                        <li class="col-xl-4 col-lg-6 col-md-6 m-0">At vero eos et accusamus</li>
                                        <li class="col-xl-4 col-lg-6 col-md-6 m-0">At vero eos et accusamus</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Curriculum Detail -->
                            <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                <div class="edu_wraper">
                                    <h4 class="edu_title">Course Circullum</h4>
                                    <div id="accordionExample" class="accordion shadow circullum">

                                        <!-- Part 1 -->
                                        <div class="card">
                                            <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                                                <h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne"
                                                        class="d-block position-relative text-dark collapsible-link py-2">Part
                                                        01: How To Learn Web Designing Step by Step</a></h6>
                                            </div>
                                            <div id="collapseOne" aria-labelledby="headingOne"
                                                data-parent="#accordionExample" class="collapse show">
                                                <div class="card-body pl-3 pr-3">
                                                    <ul class="lectures_lists">
                                                        <li class="complete">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fas fa-check dios"></i></div>Web Designing
                                                            Beginner<span class="cls_timing">40:20</span>
                                                        </li>
                                                        <li class="progressing">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fas fa-play dios"></i></div>Startup Designing
                                                            with HTML5 & CSS3<span class="cls_timing">20:12</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How To Call
                                                            Google Map iFrame<span class="cls_timing">32:10</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>Create Drop Down
                                                            Navigation Using CSS3<span class="cls_timing">25:05</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How to Create
                                                            Sticky Navigation Using JS<span class="cls_timing">18:10</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Part 2 -->
                                        <div class="card">
                                            <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
                                                <h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo"
                                                        class="d-block position-relative collapsed text-dark collapsible-link py-2">Part
                                                        02: Learn Web Designing in Basic Level</a></h6>
                                            </div>
                                            <div id="collapseTwo" aria-labelledby="headingTwo"
                                                data-parent="#accordionExample" class="collapse">
                                                <div class="card-body pl-3 pr-3">
                                                    <ul class="lectures_lists">
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How To Call
                                                            Google Map iFrame<span class="cls_timing">32:10</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How To embed
                                                            video in html5 banner?<span class="cls_timing">32:10</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How to use SVG
                                                            card in html5?<span class="cls_timing">32:10</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>Create Drop Down
                                                            Navigation Using CSS3<span class="cls_timing">25:05</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How to Create
                                                            Sticky Navigation Using JS<span class="cls_timing">18:10</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Part 3 -->
                                        <div class="card">
                                            <div id="headingThree" class="card-header bg-white shadow-sm border-0">
                                                <h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree"
                                                        class="d-block position-relative collapsed text-dark collapsible-link py-2">Part
                                                        03: Learn Web Designing in Advance Level</a></h6>
                                            </div>
                                            <div id="collapseThree" aria-labelledby="headingThree"
                                                data-parent="#accordionExample" class="collapse">
                                                <div class="card-body pl-3 pr-3">
                                                    <ul class="lectures_lists">
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How To Call
                                                            Google Map iFrame<span class="cls_timing">32:10</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How To embed
                                                            video in html5 banner?<span class="cls_timing">32:10</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How to use SVG
                                                            card in html5?<span class="cls_timing">32:10</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>Create Drop Down
                                                            Navigation Using CSS3<span class="cls_timing">25:05</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How to Create
                                                            Sticky Navigation Using JS<span class="cls_timing">18:10</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Part 04 -->
                                        <div class="card">
                                            <div id="headingFour" class="card-header bg-white shadow-sm border-0">
                                                <h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse"
                                                        data-target="#collapseFour" aria-expanded="false"
                                                        aria-controls="collapseFour"
                                                        class="d-block position-relative collapsed text-dark collapsible-link py-2">Part
                                                        04: How To Become Succes in Designing & Development?</a></h6>
                                            </div>
                                            <div id="collapseFour" aria-labelledby="headingFour"
                                                data-parent="#accordionExample" class="collapse">
                                                <div class="card-body pl-3 pr-3">
                                                    <ul class="lectures_lists">
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How To Call
                                                            Google Map iFrame<span class="cls_timing">32:10</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How To embed
                                                            video in html5 banner?<span class="cls_timing">32:10</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How to use SVG
                                                            card in html5?<span class="cls_timing">32:10</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>Create Drop Down
                                                            Navigation Using CSS3<span class="cls_timing">25:05</span>
                                                        </li>
                                                        <li class="unview">
                                                            <div class="lectures_lists_title"><i
                                                                    class="fa fa-lock dios lock"></i></div>How to Create
                                                            Sticky Navigation Using JS<span class="cls_timing">18:10</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Instructor Detail -->
                            <div class="tab-pane fade" id="instructors" role="tabpanel"
                                aria-labelledby="instructors-tab">
                                <div class="single_instructor">
                                    <div class="single_instructor_thumb">
                                        <a href="#"><img src="assets/img/user-4.jpg" class="img-fluid"
                                                alt=""></a>
                                    </div>
                                    <div class="single_instructor_caption">
                                        <h4><a href="#">Jonathan Campbell</a></h4>
                                        <ul class="instructor_info">
                                            <li><i class="ti-video-camera"></i>72 Videos</li>
                                            <li><i class="ti-control-forward"></i>102 Lectures</li>
                                            <li><i class="ti-user"></i>Exp. 4 Year</li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                            excepturi.</p>
                                        <ul class="social_info">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12 order-lg-last">

                    <div class="ed_view_box style_2 border ovrlio stick_top min">
                        <div class="ed_author">
                            <h2 class="theme-cl m-0">${{ $training->price }}<span class="old_prc">$299.00</span></h2>
                        </div>
                        <div class="ed_view_link">

                            @if (session('warning'))
                                <div class="alert alert-warning mb-2"><strong>Warning</strong>
                                    {{ session('warning') }}
                                </div>
                            @endif

                            @if (auth()->guard('student')->check())
                                @if ($training->price == 0)
                                    <form action="{{ route('enroll.free_course', $training->id) }}" method="post">
                                        @csrf
                                        <button class="btn theme-bg enroll-btn">Enroll Now<i
                                                class="ti-angle-right"></i></button>
                                    </form>
                                @else
                                    <form action="{{ route('enroll.paid_course', $training->id) }}" method="post">
                                        @csrf
                                        <button class="btn theme-bg enroll-btn">Enroll Now<i
                                                class="ti-angle-right"></i></button>
                                    </form>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="btn theme-bg enroll-btn">Enroll Now<i
                                        class="ti-angle-right"></i></a>
                            @endif

                        </div>
                        <div class="ed_view_features">
                            <div class="eld mb-3">
                                <h5 class="font-medium">This Course Include:</h5>
                                <p>Aaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                    explicabo.</p>
                            </div>
                            <div class="eld mb-3">
                                <ul class="edu_list right">
                                    <li><i class="ti-user"></i>Student Enrolled:<strong>1740</strong></li>
                                    <li><i class="ti-files"></i>Topic:<strong>PHP Script</strong></li>
                                    <li><i class="ti-game"></i>Quizzes:<strong>4</strong></li>
                                    <li><i class="ti-time"></i>Class:<strong>32 Lectures</strong></li>
                                    <li><i class="ti-tag"></i>Skill Level:<strong>Beginner</strong></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection

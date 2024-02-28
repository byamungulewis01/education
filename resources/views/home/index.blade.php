@extends('layouts.front')
@section('title', 'Home')
@section('body')
    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="{{ asset('frontend/images/slider/1.jpg') }}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Welcome to <span>Boast Coaching and Consultancy Hub</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('frontend/images/slider/2.jpg') }}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Registration open <span>2024</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2">Read
                            More</a>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('frontend/images/slider/3.jpg') }}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Training <span>and</span> Consultancy</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read
                            More</a>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="wed-hom-ser">
                    <ul>
                        <li>
                            <a href="awards.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img
                                    src="{{ asset('frontend/images/icon/h-ic1.png') }}" alt=""> Training


                            </a>
                        </li>
                        <li>
                            <a href="admission.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img
                                    src="{{ asset('frontend/images/icon/h-ic2.png') }}" alt=""> Consultancy</a>
                        </li>
                        <li>
                            <a href="all-courses.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img
                                    src="{{ asset('frontend/images/icon/h-ic4.png') }}" alt="">Certificate</a>
                        </li>
                        <li>
                            <a href="seminar.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img
                                    src="{{ asset('frontend/images/icon/h-ic3.png') }}" alt="">Admission</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-sec1">
                        <div class="ed-advan">
                            <ul>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="{{ asset('frontend/images/adv/1.png') }}" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Our Mission</h4>
                                        <p>Consultants are typically specialists in their respective fields and are hired to
                                            offer insights, strategies, and recommendations to help clients improve
                                            performance, solve problems, or achieve specific goals.'</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="{{ asset('frontend/images/adv/2.png') }}" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Our Vission</h4>
                                        <p>In all areas of our business, we strive to achieve excellence and make our
                                            excellence unique in order that we remain top ranked among example in project
                                            management, HR, financial, taxation, auditing and accounting firms in Rwanda and
                                            begin conducting business beyond Rwanda’s borders by the end of 2023.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="{{ asset('frontend/images/adv/3.png') }}" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Objective</h4>
                                        <p>The objective of coaching varies depending on the context, but generally, it
                                            revolves around facilitating personal or professional development, improving
                                            performance, and achieving specific goals.</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="ed-about-sec1">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- POPULAR COURSES -->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Popular <span>Trainings </span></h2>

                    <p>Education encompasses both the teaching and learning of knowledge, proper conduct, and technical
                        competency</p>
                </div>
            </div>
            <x-frontend.trainings limits=6 />
            <div class="pg-pagina">
                    <a href="{{ route('trainings') }}" class="btn btn-primary">View All Trainings</a>

            </div>
        </div>
    </section>

    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="con-title">
                    <h2>Consultancy <span>Services</span></h2>
                    <p>Consultants are typically specialists in their respective fields and are hired to offer insights,
                        strategies, and recommendations to help clients improve performance, solve problems, or
                        achieve specific goals.</p>
                </div>
            </div>
            <x-frontend.consultance  limits=9 chunking=3/>
            <div class="pg-pagina">
                <a href="{{ route('consultancy') }}" class="btn btn-primary">View All Consultancy</a>

        </div>


        </div>
    </section>

    <!-- FOOTER COURSE BOOKING -->
    <section>
        <div class="full-bot-book">
            <div class="container">
                <div class="row">
                    <div class="bot-book">
                        <div class="col-md-2 bb-img">
                            <img src="{{ asset('frontend/images/3.png') }}" alt="">
                        </div>
                        <div class="col-md-7 bb-text">
                            <h4>Learning together, we achieve great things</h4>
                            <p>Education encompasses both the teaching and learning of knowledge, proper conduct, and
                                technical competency</p>
                        </div>
                        <div class="col-md-3 bb-link">
                            <a href="course-details.html"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

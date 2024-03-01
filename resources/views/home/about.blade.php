@extends('layouts.front')
@section('title', 'About Us')
@section('body')
    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-50">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>{{ $about->title }}</h2>
                            <p>{{ $about->header_section }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <!--POPULAR COURSES-->
                            <div class="home-top-cour">
                                <!--POPULAR COURSES IMAGE-->
                                <div class="col-md-5"> 
                                    <img src="{{ asset('images/abouts/'. $about->image) }}" alt=""> 
                                </div>
                                <!--POPULAR COURSES: CONTENT-->
                                <div class="col-md-7 home-top-cour-desc">
                                   {!! $about->description !!}
                                </div>
                            </div>
                        </div>
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
                                        <p>{{ $about->mission }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="{{ asset('frontend/images/adv/2.png') }}" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Our Vission</h4>
                                        <p>{{ $about->vission }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="{{ asset('frontend/images/adv/3.png') }}" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Objective</h4>
                                        <p>{{ $about->objective }}</p>
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
    <!--SECTION END-->

@endsection

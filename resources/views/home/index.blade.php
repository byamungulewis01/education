@extends('home.app')
@section('title', 'Home')
@section('body')

    <section class="py-0">
        <div class="swiper theme-slider min-vh-100"
            data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-zanim-timeline="{}">
                    <div class="bg-holder" style="background-image:url({{ asset('new/assets/img/header-6.jpg') }});"></div>
                    <!--/.bg-holder-->
                    <div class="container">
                        <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                            <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                                <div class="overflow-hidden">
                                    <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>Helping Leaders</h1>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>We
                                        look forward to help you in taking your company to new height.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3"
                                            href="#!">Read more<span class="fas fa-chevron-right ms-2"></span></a><a
                                            class="btn btn-warning mt-3" href="contact.html">Contact us<span
                                                class="fas fa-chevron-right ms-2"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-zanim-timeline="{}">
                    <div class="bg-holder" style="background-image:url({{ asset('new/assets/img/header-5.jpg') }});"></div>
                    <!--/.bg-holder-->
                    <div class="container">
                        <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                            <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                                <div class="overflow-hidden">
                                    <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>Expert Consultants</h1>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>Over
                                        10 years of experience in helping clients finding comprehensive solutions.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3"
                                            href="#!">Read more<span class="fas fa-chevron-right ms-2"></span></a><a
                                            class="btn btn-warning mt-3" href="contact.html">Contact us<span
                                                class="fas fa-chevron-right ms-2"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-zanim-timeline="{}">
                    <div class="bg-holder" style="background-image:url({{ asset('new/assets/img/header-1.jpg') }});"></div>
                    <!--/.bg-holder-->
                    <div class="container">
                        <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                            <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                                <div class="overflow-hidden">
                                    <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>Growth Partners</h1>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>
                                        Connect with top consultants hand-picked by Elixir consulting and finance.</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3"
                                            href="#!">Read more<span class="fas fa-chevron-right ms-2"></span></a><a
                                            class="btn btn-warning mt-3" href="contact.html">Contact us<span
                                                class="fas fa-chevron-right ms-2"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-nav">
                <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
                <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
            </div>
        </div>
    </section>
    <x-services />
    <!-- <section> begin ============================-->
    <section class="bg-light text-center">

        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-10 col-md-6">
                    <h3 class="fs-2 fs-lg-3">Our Merits</h3>
                    {{-- <p class="px-lg-4 mt-3">Get expert consultancy and support with Elixir, an advisory firm that stand by your side always.</p> --}}
                    <hr class="short"
                        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                        data-zanim-trigger="scroll" />
                </div>
            </div>
            <div class="row mt-0">
                <div class="col-sm-6 col-lg-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="card">
                        <div class="card-body text-start">

                            {{-- <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-chart-bar"></span></div> --}}
                            <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Creative Solutions</h5>
                            <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>
                                Unique and creative financial Business and management solutions that meet the client’s expectations
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    {{-- <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-bell"></span></div> --}}
                    <div class="card">
                        <div class="card-body text-start">
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Professional Team</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>High quality of Professional services provided
                        by a highly motivated team. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    {{-- <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-lightbulb"></span></div> --}}
                    <div class="card">
                        <div class="card-body text-start">
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Professional Networking</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>We have Solid network of members in Rwanda and
                        in worldwide to emphasize delivering same quality with national and international standards for each
                        client.</p>
                </div>
                </div>
                </div>
                <div class="col-sm-6 col-lg-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    {{-- <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-headset"></span></div> --}}
                    <div class="card">
                        <div class="card-body text-start">
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Quality Control</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>
                        Boost Consultancy & Coaching Hub Ltd follow & apply a latest International Standard on business
                        management, financial, project management, Auditing, and accounting.
                        {{-- All Member firms have to be
                        under Quality Control of the local competent national professional body. --}}
                    </p>
                </div>
                </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <!-- ============================ Cources Start ================================== -->
    <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center mb-4">
                        <h2>Our <span class="theme-cl">Trainings</span></h2>
                        <p>Boost Consultancy & Coaching Hub Ltd Office provides the best services for our dear customers to
                            benefit their business and get the best results. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($categories as $item)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="edu_cat_2 cat-{{ $loop->iteration }}">
                            <div class="edu_cat_icons">
                                <a class="pic-main" href="{{ route('training', encrypt($item->id)) }}"><img
                                        src="{{ asset('images/' . $item->imageName) }}" class="img-fluid"
                                        alt="" /></a>
                            </div>
                            <div class="edu_cat_data">
                                <h4 class="title"><a
                                        href="{{ route('training', encrypt($item->id)) }}">{{ $item->title }}</a></h4>
                                <ul class="meta">
                                    <li class="font-weight-bold">{{ $item->trainings->count() }} Trainings</li>
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
    <div class="container py-3 bg-light">
        <x-mission />
    </div>

@endsection

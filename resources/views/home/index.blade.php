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

@endsection

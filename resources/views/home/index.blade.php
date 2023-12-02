@extends('layouts.front')
@section('title', 'Home')
@section('body')
    <!-- Hero: Start -->
    {{-- <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
            <div class="container">
                <div class="hero-text-box text-center">
                    <h1 class="text-primary hero-title display-6 fw-bold">One dashboard to manage all your
                        businesses</h1>
                    <h2 class="hero-sub-title h6 mb-4 pb-1">
                        Production-ready & easy to use Admin Template<br class="d-none d-lg-block" />
                        for Reliability and Customizability.
                    </h2>
                    <div class="landing-hero-btn d-inline-block position-relative">
                        <span class="hero-btn-item position-absolute d-none d-md-flex text-heading">Join community
                            <img src="assets/img/front-pages/icons/Join-community-arrow.png" alt="Join community arrow"
                                class="scaleX-n1-rtl" /></span>
                        <a href="#landingPricing" class="btn btn-primary btn-lg">Get early access</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Hero: End -->

   <x-consultancy />

    <!-- Real customers reviews: Start -->

    <!-- Real customers reviews: End -->

    <!-- Our great team: Start -->
    {{-- <section id="landingTeam" class="section-py landing-team">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">Our Great Team</span>
            </div>
            <h3 class="text-center mb-1"><span class="section-title">Supported</span> by Real People</h3>
            <p class="text-center mb-md-5 pb-3">Who is behind these great-looking interfaces?</p>
            <div class="row gy-5 mt-2">
                <div class="col-lg-3 col-sm-6">
                    <div class="card mt-3 mt-lg-0 shadow-none">
                        <div class="bg-label-primary position-relative team-image-box">
                            <img src="assets/img/front-pages/landing-page/team-member-1.png"
                                class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-primary text-center">
                            <h5 class="card-title mb-0">Sophie Gilbert</h5>
                            <p class="text-muted mb-0">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card mt-3 mt-lg-0 shadow-none">
                        <div class="bg-label-info position-relative team-image-box">
                            <img src="assets/img/front-pages/landing-page/team-member-2.png"
                                class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-info text-center">
                            <h5 class="card-title mb-0">Paul Miles</h5>
                            <p class="text-muted mb-0">UI Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card mt-3 mt-lg-0 shadow-none">
                        <div class="bg-label-danger position-relative team-image-box">
                            <img src="assets/img/front-pages/landing-page/team-member-3.png"
                                class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-danger text-center">
                            <h5 class="card-title mb-0">Nannie Ford</h5>
                            <p class="text-muted mb-0">Development Lead</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card mt-3 mt-lg-0 shadow-none">
                        <div class="bg-label-success position-relative team-image-box">
                            <img src="assets/img/front-pages/landing-page/team-member-4.png"
                                class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-success text-center">
                            <h5 class="card-title mb-0">Chris Watkins</h5>
                            <p class="text-muted mb-0">Marketing Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Our great team: End -->

    <!-- Pricing plans: Start -->
    <section id="landingPricing" class="section-py bg-body landing-pricing">
        <div class="container">

            <h3 class="text-center mb-1">Trainings</h3>


            <div class="row gy-4 pt-lg-3">

                <!-- Standard Plan: Start -->
                @foreach ($categories as $item)
                    <div class="col-xl-4">
                        <div class="card border border-primary shadow-lg">
                            <div class="card-body">
                                <div class="text-center">
                                    {{-- <img src="{{ asset('images/' . $item->imageName) }}" alt="shuttle rocket icon"
                                    class="" /> --}}
                                    <h4 class="">{{ $item->title }}</h4>
                                    <p>{{ $item->trainings->count() }} Trainings</p>


                                </div>
                                <div class="d-grid">
                                    <a href="{{ route('training', encrypt($item->id)) }}"
                                        class="btn btn-label-primary">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Standard Plan: End -->
            </div>
        </div>
    </section>
    <!-- Pricing plans: End -->



@endsection

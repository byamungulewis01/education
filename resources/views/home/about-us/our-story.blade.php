@extends('layouts.front')
@section('title', 'Our Stories')
@section('body')
    <!-- page Banner Section Start -->
    <div class="page-banner">
        <div class="page-banner__wrapper about-banner"
            style="background-image: url({{ asset('frontend/images/about-us-hero-bg.jpg') }});">
            <div class="container">

                <!-- About Banner Caption Start -->
                <div class="about-banner-caption">
                    <h2 class="about-banner-caption__main-title"><strong>Our Stories</strong> </h2>
                </div>
                <!-- About Banner Caption End -->

            </div>
        </div>
    </div>
    <!-- page Banner Section End -->


    <!-- Academics Section Start -->
    <div class="academics-section bg-color-05 section-padding-01 scene">
        <div class="container custom-container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="section-title__title-03">What Make Us <mark>Spcecial?</mark></h2>
                <p class="mt-0">Lorem ipsum dolor sit amet, consectetur adipisc ing elit.</p>
            </div>
            <!-- Section Title End -->

            <div class="row g-6">
                <div class="col-lg-4 col-md-4">

                    <!-- Academics Start -->
                    <div class="academics-item text-center" data-aos="fade-up" data-aos-duration="1000">
                        <a href="#" class="academics-item__link">
                            <div class="academics-item__image">
                                <img src="{{ asset('frontend/images/academics/event-thumbnail-01.jpg') }}"
                                    alt="University" width="370" height="269">
                                <h3 class="academics-item__title">Who we are</h3>
                            </div>
                            <div class="academics-item__description">
                                <p>Lorem ipsum dolor sit amet, <strong>consectetuer adipiscing</strong> elit, sed diam
                                    nonummy ndisse suscipit sagittis leom dolor sit amet,</p>
                            </div>
                        </a>
                    </div>
                    <!-- Academics End -->

                </div>
                <div class="col-lg-4 col-md-4">

                    <!-- Academics Start -->
                    <div class="academics-item text-center" data-aos="fade-up" data-aos-duration="1000">
                        <a href="#" class="academics-item__link">
                            <div class="academics-item__image">
                                <img src="{{ asset('frontend/images/academics/event-thumbnail-02.jpg') }}"
                                    alt="University" width="370" height="269">
                                <h3 class="academics-item__title">What we do</h3>
                            </div>
                            <div class="academics-item__description">
                                <p>Lorem ipsum dolor sit amet, <strong>consectetuer adipiscing</strong> elit, sed diam
                                    nonummy ndisse suscipit sagittis leom dolor sit amet,</p>
                            </div>
                        </a>
                    </div>
                    <!-- Academics End -->

                </div>
                <div class="col-lg-4 col-md-4">

                    <!-- Academics Start -->
                    <div class="academics-item text-center" data-aos="fade-up" data-aos-duration="1000">
                        <a href="#" class="academics-item__link">
                            <div class="academics-item__image">
                                <img src="{{ asset('frontend/images/academics/event-thumbnail-03.jpg') }}"
                                    alt="University" width="370" height="269">
                                <h3 class="academics-item__title">Our mission</h3>
                            </div>
                            <div class="academics-item__description">
                                <p>Lorem ipsum dolor sit amet, <strong>consectetuer adipiscing</strong> elit, sed diam
                                    nonummy ndisse suscipit sagittis leom dolor sit amet,</p>
                            </div>
                        </a>
                    </div>
                    <!-- Academics End -->

                </div>
            </div>

        </div>

        <div class="academics-section__shape-01" data-depth="-0.4"></div>
        <div class="academics-section__shape-02" data-depth="-0.4"></div>
        <div class="academics-section__shape-03" data-depth="0.4"></div>
    </div>
    <!-- Academics Section End -->

@endsection

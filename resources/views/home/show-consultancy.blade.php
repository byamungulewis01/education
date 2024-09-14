@extends('layouts.front')
@section('title', 'Consultancy')
@section('body')

    <!-- Page Banner Section Start -->
    <div class="page-banner">
        <div class="page-banner__wrapper">
            <div class="container">


            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- event Details Start -->
    <div class="event-section section-padding-01">
        <div class="container custom-container">

            <!-- event Dtails Start -->
            <div class="event-details">

                <!-- event Dtails Header Start -->
                <div class="event-details__header">
                    <h3 class="event-details__title">{{ $consultancy->title }}</h3>

                </div>
                <!-- event Dtails Header End -->

                <!-- event Dtails Thumbnail Start -->
                <div class="event-details__thumbnail">
                    <img src="{{ asset('images/' . $consultancy->imageName) }}" alt="Consultancy" width="1170" height="550">
                </div>
                <!-- event Dtails Thumbnail End -->

                <!-- event Dtails Summary Start -->
                <div class="event-details__summary">

                    <!-- event Dtails Conent Start -->
                    <div class="event-details__content">
                        <div class="row gy-6">
                            <div class="col-lg-8">
                                <h3 class="event-details__heading mb-3">About The Consultancy</h3>

                                <p>{!! $consultancy->description !!}</p>

                            </div>
                            <div class="col-lg-4">

                                <!-- event Dtails Conent Start -->
                                <div class="event-details__booking-info">
                                    <ul class="event-details__info-meta">
                                        <li class="meta-info meta-price">
                                            <span class="meta-label">
                                                <i class="fas fa-money-bill-wave"></i>
                                                Cost:
                                            </span>
                                            <span class="meta-value">Free</span>
                                        </li>


                                    </ul>
                                    <p class="event-details__notice">Contact us for more</p>
                                    <div class="event-details__share">
                                        <a href="https://twitter.com/" target="_blank" data-bs-tooltip="tooltip"
                                            data-bs-placement="top" title="Twitter">
                                            <div class="fab fa-twitter"></div>
                                        </a>
                                        <a href="https://www.facebook.com/" target="_blank" data-bs-tooltip="tooltip"
                                            data-bs-placement="top" title="Facebook">
                                            <div class="fab fa-facebook-f"></div>
                                        </a>
                                        <a href="https://www.linkedin.com/" target="_blank" data-bs-tooltip="tooltip"
                                            data-bs-placement="top" title="Linkedin">
                                            <div class="fab fa-linkedin"></div>
                                        </a>
                                        <a href="https://www.tumblr.com/" target="_blank" data-bs-tooltip="tooltip"
                                            data-bs-placement="top" title="Tumblr">
                                            <div class="fab fa-tumblr-square"></div>
                                        </a>
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Email">
                                            <div class="fas fa-envelope"></div>
                                        </a>
                                    </div>
                                </div>
                                <!-- event Dtails Conent End -->

                            </div>
                        </div>
                    </div>
                    <!-- event Dtails Conent End -->

                </div>
                <!-- event Dtails Summary End -->

            </div>
            <!-- event Dtails End -->

        </div>
    </div>
    <!-- event Details End -->

@endsection

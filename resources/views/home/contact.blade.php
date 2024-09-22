@extends('layouts.front')
@section('title', 'Contuct Us')
@section('body')
  <!-- Page Banner Section Start -->
  <div class="page-banner bg-color-05">
    <div class="page-banner__wrapper">
        <div class="container">

            <!-- Page Banner Caption Start -->
            <div class="page-banner__caption text-center">
                <h2 class="page-banner__main-title">Contact us</h2>
            </div>
            <!-- Page Banner Caption End -->

        </div>
    </div>
</div>
<!-- Contact us Section Start -->
<div class="contact-section">
    <div class="container custom-container">

        <div class="section-padding-02">
            <div class="row gy-8 justify-content-between">
                <div class="col-lg-4">
                    <!-- Contact Info Start -->
                    <div class="contact-info">

                        <!-- Section Title Start -->
                        <div class="section-title text-center text-lg-start" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="section-title__title-02">Keep In Touch <br> With Us.</h2>
                        </div>
                        <!-- Section Title End -->

                        <div class="contact-info__wrapper" data-aos="fade-up" data-aos-duration="1000">

                            <!-- Contact Info Start -->
                            <div class="contact-info__item-02 text-center text-lg-start">
                                <div class="d-lg-flex gap-4 mb-4">
                                    <div class="contact-info__icon">
                                        <i class="fas  fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info__content">
                                        <h3 class="contact-info__title">Address</h3>
                                    </div>
                                </div>
                                <p>kigali Rwanda </p>
                            </div>
                            <!-- Contact Info End -->

                            <!-- Contact Info Start -->
                            <div class="contact-info__item-02 text-center text-lg-start">
                                <div class="d-lg-flex gap-4 mb-4">
                                    <div class="contact-info__icon">
                                        <i class="fas  fa-mobile-alt"></i>
                                    </div>
                                    <div class="contact-info__content">
                                        <h3 class="contact-info__title">Phone</h3>
                                    </div>
                                </div>
                                <p>Mobile: <strong> (+250)783 590 293</strong></p>
                             
                            </div>
                            <!-- Contact Info End -->

                            <!-- Contact Info Start -->
                            <div class="contact-info__item-02 text-center text-lg-start">
                                <div class="d-lg-flex gap-4 mb-4">
                                    <div class="contact-info__icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="contact-info__content">
                                        <h3 class="contact-info__title">Email</h3>
                                    </div>
                                </div>
                                <p>support@bcchacademy.com</p>
                                <p>info@bcchacademy.com</p>
                            </div>
                            <!-- Contact Info End -->

                        </div>

                    </div>
                    <!-- Contact Info End -->
                </div>
                <div class="col-lg-7">
                    <!-- Contact Map Start -->
                    <div class="contact-map-02" data-aos="fade-up" data-aos-duration="1000">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                    <!-- Contact Map End -->
                </div>
            </div>
        </div>

        <div class="section-padding-01">
            <div class="row justify-content-between">
                <div class="col-lg-4">

                    <!-- Section Title Start -->
                    <div class="section-title text-center text-lg-start" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="section-title__title-02">Send a Message</h2>
                    </div>
                    <!-- Section Title End -->

                </div>
                <div class="col-lg-7">
                    <!-- Contact Form Wrapper Start -->
                    <div class="contact-form__wrapper" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="contact-form__input">
                                    <input class="form-control" type="text" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-form__input">
                                    <input class="form-control" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-form__input">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-form__input text-center">
                                    <button class="btn btn-primary btn-hover-secondary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Form Wrapper End -->
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Contact us Section End -->
@endsection

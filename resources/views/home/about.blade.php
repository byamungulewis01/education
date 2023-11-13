@extends('home.app')
@section('title', 'About Us')
@section('body')
    <!-- ============================ About Detail ================================== -->
    {{-- <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="lmp_caption">
                        <span class="theme-cl">About Us</span>
                        <h2 class="mb-3">What We Do & Our Aim</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                            provident, similique</p>
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ml-3">Full lifetime access</h6>
                            </div>
                        </div>
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ml-3">20+ downloadable resources</h6>
                            </div>
                        </div>
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ml-3">Certificate of completion</h6>
                            </div>
                        </div>
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                            <div class="d-flex align-items-center">
                                <div
                                    class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h6 class="mb-0 ml-3">Free Trial 7 Days</h6>
                            </div>
                        </div>
                        <div class="text-left mt-4"><a href="#" class="btn btn-md text-light theme-bg">Enrolled
                                Today</a></div>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="lmp_thumb">
                        <img src="assets/img/lmp-2.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ============================ About Detail ================================== -->

    <!-- <section> begin ============================-->
    <section class="bg-100">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-4 py-3 py-lg-0 position-relative" style="min-height:400px; background-position: top">
                    <div class="bg-holder rounded-ts-lg rounded-lg-bs-lg rounded-te-lg rounded-lg-te-0"
                        style="background-image:url({{ asset('new/assets/img/ceo.jpg') }});"></div>
                    <!--/.bg-holder-->
                </div>
                <div
                    class="col-lg-8 px-5 py-6 my-lg-0 bg-white rounded-lg-te-lg rounded-be-lg rounded-bs-lg rounded-lg-bs-0 d-flex align-items-center">
                    <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <h5 data-zanim-xs='{"delay":0}'>Founder’s Speech</h5>
                        <p class="my-4" data-zanim-xs='{"delay":0.1}'>
                            Since its founding in 2020, Boost Consultancy & Coaching Hub Ltd has contributed to improving
                            the human resources management, financial and accounting performance of Government Institutions,
                            Non-Government (NGOs), private business and community organizations in countrywide and outside.
                            Furthermore, Boost Consultancy & Coaching Hub Ltd has always helped its client/customers to
                            overcome the challenges posed by expansions of the scope of their work and activities at the
                            local and international levels through providing training in different careers, help them in
                            quality feasibility study, business idea generation, project planning & its implementation, HR
                            management procedures, Accounting and bookkeeping, auditing services/activities; and tax
                            consultancy services and other services.
                            Boost Consultancy & Coaching Hub is here to coach and support you all in various fields with our
                            professional engineers; accountants; project managers; external auditors; agricultural and
                            livestock specialists in partnership with international experts in different domains.

                        </p>
                        <h5 class="text-uppercase mt-3 fw-medium mb-1" data-zanim-xs='{"delay":0.3}'>Dr. HATEGEKIMANA Jean
                            Paul</h5>
                        <h6 class="text-500 fw-semi-bold" data-zanim-xs='{"delay":0.4}'>Founder & CEO OF BCCH LTD</h6>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col">
                    <h3 class="text-center fs-2 fs-md-3">ABOUT US</h3>
                    <hr class="short"
                        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                        data-zanim-trigger="scroll" />
                </div>
                <div class="col-12">
                    <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
                        <h5>WHO WE ARE</h5>
                        <p class="mt-3 dropcap">Boost Consultancy & Coaching Hub Ltd is a business and personal improvement
                            consulting firm, specializing in Training, Coaching, Accounting, bookkeeping and auditing
                            services; taxation consultancy, and project Management Consulting based in Rwanda and Located in
                            Kigali City, Kicukiro District. </p>

                        <p class="mb-3">The company was founded in 2020, and it employed the best highly
                            qualified professionals in different fields like HRM, auditing, accounting, taxation, project
                            management, and financial consulting. Boost Consultancy & Coaching Hub Ltd Office was
                            established to innovate in the development of the financial and accounting system and provide
                            the best services in the field of management, finance and accounting for business owners,
                            corporations, government and non-governmental institutions. </p>
                        <p class="mb-3">Based on our true belief in the role and value of the management
                            systems and our understanding of the urgent need for our customers to provide them with
                            specialists high expertise in this area, it has been necessary to provide necessary and standard
                            services in all sectors that serve and support the regional and global economies; where our
                            office offers this service focusing on the expertise of its members who are characterized with
                            professional excellence and high confidentiality of the customer’s data.</p>
                    </div>
                </div>
            </div>

           <x-mission/>

        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
    <x-core-values/>
@endsection

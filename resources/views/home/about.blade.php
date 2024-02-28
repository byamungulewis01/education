@extends('layouts.front')
@section('title', 'About Us')
@section('body')
    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>About <span> BCCH</span></h2>
                            <p>It serves as a means for visitors or stakeholders to understand who the organization is, what it stands for, and what it aims to accomplish..</p>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <!--POPULAR COURSES-->
                            <div class="home-top-cour">
                                <!--POPULAR COURSES IMAGE-->
                                <div class="col-md-5"> <img src="{{ asset('images/about-us.jpg') }}" alt=""> </div>
                                <!--POPULAR COURSES: CONTENT-->
                                <div class="col-md-7 home-top-cour-desc">
                                    <a href="#">
                                        <h3>About Kim TallBear</h3>
                                    </a>
                                    <h4>Head of Training and Development</h4>
                                    <p>Kim TallBear is a scholar, professor, and public intellectual known for her work in
                                        the field of Indigenous Studies, particularly focusing on the intersections of
                                        science, technology, and Indigenous governance. She is a citizen of the
                                        Sisseton-Wahpeton Oyate and is also eligible for citizenship through her maternal
                                        grandfather in the Cheyenne and Arapaho Tribes. Raised on the Flandreau Santee Sioux
                                        Tribe reservation in South Dakota, TallBear later moved to Canada to become a
                                        Professor in the Faculty of Native Studies at the University of Alberta.</p>
                                    <br>
                                    <p>
                                        In 2016, she was awarded a Tier II Canada Research Chair (CRC) in Indigenous
                                        Peoples, Technoscience, and Environment, followed by a Tier I CRC in the same field
                                        in 2021. TallBear is actively involved in building a research and training program
                                        at the University of Alberta, focusing on Indigenous peoples' engagements with
                                        science and technology in support of Indigenous sovereignty. She has a background in
                                        community and environmental planning and has worked on various planning projects
                                        related to tribal government interests, nuclear waste management, and human genetic
                                        research.
                                    </p>
                                    <br>
                                    <p>
                                        TallBear's research explores how genetic science is intertwined with notions of race
                                        and Indigeneity. Her monograph, "Native American DNA: Tribal Belonging and the False
                                        Promise of Genetic Science" (2013), delves into the concept of "Native American DNA"
                                        in human population genetics research and direct-to-consumer genetic ancestry
                                        testing. She is interested in the historical and ongoing roles of science and
                                        technology in the colonization of Indigenous peoples and examines how tribes resist,
                                        regulate, collaborate in, and initiate research and technology development.
                                    </p>
                                    <br>
                                    <p>
                                        Outside academia, TallBear is a member of the Oak Lake Writers, a group of Dakotas,
                                        Lakota, and Nakota writers. She co-founded the sexy storytelling and cabaret show
                                        Tipi Confessions in 2015. TallBear is a widely-recognized public intellectual and
                                        commentator on Indigenous affairs, cultural politics, decolonization, and
                                        environmental topics, contributing to various media outlets and platforms.
                                    </p>

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
    <!--SECTION END-->

@endsection

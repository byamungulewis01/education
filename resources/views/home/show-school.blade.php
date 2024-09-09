@extends('layouts.front')
@section('title', 'School')
@section('body')
    <!-- Page Banner Section Start -->
    <div class="page-banner bg-color-04">
        <div class="page-banner__wrapper">

            <div class="page-banner__shape-01"></div>
            <div class="page-banner__shape-02"></div>
            <div class="page-banner__shape-03"></div>

            <div class="container">

                <!-- Page Banner Caption Start -->
                <div class="page-banner__caption-02">
                    <h2 class="page-banner__main-title-02 mt-4">{{ $category->title }}</h2>
                </div>
                <!-- Page Banner Caption End -->

            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Courses Category Featured Start -->
    <div class="courses-category-section section-padding-02 mb-10">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title">
                <h2 class="section-title__title"><mark>Featured</mark> Courses</h2>
            </div>
            <!-- Section Title End -->

            <div class="row gy-6">
                @foreach ($trainings as $training)
                <div class="col-xl-3 col-md-6">

                     <!-- Course Start -->
                     <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                        <div class="course-header">
                            <div class="course-header__thumbnail ">
                                <a href="{{ route('training', encrypt($training->id)) }}"><img
                                        src="{{ asset('frontend/images/courses/courses-1.jpg') }}"
                                        alt="courses" width="258" height="173"></a>
                            </div>
                        </div>
                        <div class="course-header__badge">
                            <span class="hot">${{ number_format($training->price) }}.<small
                                class="separator">00</small></span>
                        </div>
                        <div class="course-info">
                            <span class="course-info__badge-text badge-all">All Levels</span>
                            <h3 class="course-info__title"><a
                                    href="{{ route('training', encrypt($training->id)) }}">{{ $training->title }}</a>
                            </h3>
                            <a href="{{ route('training', encrypt($training->id)) }}" class="course-info__instructor">Read More</a>


                        </div>
                    </div>
                    <!-- Cours  e End -->

                </div>
                @endforeach

            </div>

        </div>
    </div>
    <!-- Courses Category Featured End -->

@endsection

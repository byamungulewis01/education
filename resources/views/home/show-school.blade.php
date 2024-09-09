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
                @foreach ($trainings as $item)
                <div class="col-xl-3 col-md-6">

                    <!-- Course Start -->
                    <div class="course-item-03">
                        <div class="course-header-03">
                            <div class="course-header-03__thumbnail ">
                                <a href="{{ route('training',  encrypt($item->id)) }}"><img src="{{ asset('images/trainings/' . $item->imageName) }}"
                                        alt="courses" width="330" height="221"></a>
                            </div>
                            <div class="course-header-03__badge">
                                <span class="hot">Featured</span>
                            </div>
                        </div>
                        <div class="course-info-03">
                            <h3 class="course-info-03__title"><a href="{{ route('training',  encrypt($item->id)) }}">{{ $item->title }}</a></h3>
                            <div class="course-info-03__meta">
                                <span>5 Lessons</span>
                                <span>2.3 hours</span>
                                <span>Intermediate</span>
                            </div>
                            <div class="course-info-03__description">
                                <p>{{ Illuminate\Support\Str::limit(strip_tags($item->description), 100) }}</p>
                            </div>
                            <div class="course-info-03__footer">

                                <div class="course-info-03__footer-left">
                                    <a class="course-info-03__instructor" href="#">Donald Logan</a>
                                </div>
                                <div class="course-info-03__footer-right">
                                    <div class="course-info-03__price">
                                        <span class="sale-price">${{ $item->price }}.<small class="separator">00</small></span>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <!-- Course End -->

                </div>
                @endforeach

            </div>

        </div>
    </div>
    <!-- Courses Category Featured End -->

@endsection

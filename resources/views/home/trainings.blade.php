@extends('layouts.front')
@section('title', 'About Us')
@section('body')
    <!-- Page Banner Section Start -->
    <div class="page-banner bg-color-05">
        <div class="page-banner__wrapper">
            <div class="container">

                <!-- Page Banner Caption Start -->
                <div class="page-banner__caption text-center">
                    <h2 class="page-banner__main-title">Courses</h2>
                </div>
                <!-- Page Banner Caption End -->

            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->
    <!-- Courses Start -->
    <div class="courses-section section-padding-01">
        <div class="container">
            <div class="row gy-10">
                <div class="col-lg-8">

                    <!-- Archive Filter Bars Start -->
                    <div class="archive-filter-bars">

                        <div class="archive-filter-bar">
                            <p>We found <span>{{ $trainings->total() }}</span> Courses available for you</p>
                        </div>



                    </div>
                    <!-- Archive Filter Bars End -->

                    <div class="tab-pane fade show active" id="list">
                        @foreach ($trainings as $item)
                            <!-- Course List Start -->
                            <div class="course-list-item">
                                <div class="course-list-header">
                                    <div class="course-list-header__thumbnail">
                                        <a href="{{ route('training', encrypt($item->id)) }}"><img
                                                src="{{ asset('images/trainings/' . $item->imageName) }}" alt="courses"
                                                width="270" height="181"></a>
                                    </div>
                                </div>
                                <div class="course-list-info">
                                    <h3 class="course-list-info__title"><a
                                            href="{{ route('training', encrypt($item->id)) }}">{{ $item->title }}</a></h3>
                                    <div class="course-list-info__meta">
                                        <span><i class="fas fa-play-circle"></i> 5 Modules</span>
                                        <span><i class="fas fa-clock"></i> 4.3 hours</span>
                                        <span><i class="fas fa-sliders-h"></i> All Levels</span>
                                    </div>
                                    <div class="course-list-info__description">
                                        <p>{{ Illuminate\Support\Str::limit(strip_tags($item->description), 100) }}</p>
                                    </div>
                                    <div class="course-list-info__action">
                                        <a href="{{ route('training', encrypt($item->id)) }}"
                                            class="btn btn-primary btn-hover-secondary">Read more</a>

                                    </div>
                                    <div class="course-list-info__footer">
                                        <div class="course-list-info__price">
                                            <span class="sale-price">${{ number_format($item->price) }}.<small
                                                    class="separator">00</small></span>
                                        </div>
                                        <div class="course-list-info__rating">

                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 100%;"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course List End -->
                        @endforeach


                    </div>


                    {{ $trainings->links('vendor.pagination.custom') }}
                    <!-- Page Pagination End -->

                </div>
                <div class="col-lg-4">
                    <!-- Sidebar Widget Start -->
                    <div class="sidebar-widget-wrapper">

                        <!-- Sidebar Widget Wrapper Start -->
                        <div class="sidebar-widget-wrap bg-color-10">
                            <h4 class="sidebar-widget-wrap__title">Filter by category</h4>

                            <!-- Widget Filter Start -->
                            <div class="widget-filter">

                                <!-- Widget Filter Wrapper Start -->
                                <div class="widget-filter__wrapper">
                                    <ul class="widget-filter__list">
                                        @foreach ($categories as $category)
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories{{ $category->id }}" name="sort-by">
                                                    <label for="categories{{ $category->id }}">{{ $category->title }} <span>({{ $category->trainings->count() }})</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <!-- Widget Filter Wrapper End -->
                            </div>
                            <!-- Widget Filter End -->

                        </div>
                        <!-- Sidebar Widget Wrapper End -->



                    </div>
                    <!-- Sidebar Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->
@endsection

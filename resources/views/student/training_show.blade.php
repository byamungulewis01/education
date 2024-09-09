@extends('layouts.student')
@section('title', 'Show Training')
@section('body')
    <div class="container">
        <div class="card mb-4 p-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">

                        <!-- Tutor Course Top Info Start -->
                        <div class="tutor-course-top-info__content">
                            <div class="tutor-course-top-info__badges">
                                <a class="badges-category" href="#">{{ $course->training->category->title }}</a>
                            </div>
                            <h1 class="tutor-course-top-info__title">{{ $course->training->title }}</h1>
                            <div class="tutor-course-top-info__meta">
                                <div class="tutor-course-top-info__meta-instructor">
                                    <div class="instructor-avatar">
                                        <img src="{{ asset('frontend/images/instructor/instructor-01.jpg') }}"
                                            alt="Instructor" width="36" height="36">
                                    </div>
                                    <div class="instructor-name">{{ $course->training->user->name }}</div>
                                </div>
                                <div class="tutor-course-top-info__meta-update">Last Update December 1, 2020</div>
                            </div>

                        </div>
                        <!-- Tutor Course Top Info End -->

                    </div>
                </div>
            </div>
        </div>
        <div class="card p-2">
            <div class="card-body">
                <div class="row gy-5">
                    <div class="col-lg-8">

                        <!-- Tutor Course Main Segment Start -->
                        <div class="tutor-course-main-segment">

                            <!-- Tutor Course Segment Start -->
                            <div class="tutor-course-segment">
                                <h4 class="tutor-course-segment__title">About This Course</h4>

                                <!-- Tutor Course Segment Content Wrapper Start -->
                                <div class="tutor-course-segment__content-wrap">
                                    {{ $course->training->description }}
                                </div>
                                <!-- Tutor Course Segment Content Wrapper End -->


                            </div>

                            <div class="tutor-course-segment">

                                <div class="tutor-course-segment__header">
                                    <h4 class="tutor-course-segment__title">Curriculum</h4>

                                    <div class="tutor-course-segment__lessons-duration">
                                        <span
                                            class="tutor-course-segment__lessons">{{ $course->training->modules->count() }}
                                            Modules</span>
                                        <span class="tutor-course-segment__duration">15h 15m</span>
                                    </div>
                                </div>

                                <div class="course-curriculum accordion">
                                    @foreach ($course->training->modules as $module)
                                        <div class="accordion-item">
                                            <button class="accordion-button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $module->id }}"> <i class="tutor-icon"></i>
                                                {{ $module->name }}</button>
                                            <div id="collapse{{ $module->id }}" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionCourse">

                                                <div class="course-curriculum__lessons">
                                                    <div class="course-curriculum__lesson">
                                                        <span class="course-curriculum__title">
                                                            {{ $module->description }}
                                                        </span>
                                                        @if ($course->is_payed)
                                                            <span class="course-curriculum__icon">
                                                                <a target="blank"
                                                                    href="{{ asset('files/components/' . $module->fileUrl) }}"><i
                                                                        class="fa fa-download"></i> Save Notes</a>
                                                            </span>
                                                        @endif
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>

                            <!-- Tutor Course Segment Start -->
                            <div class="tutor-course-segment">
                                <h4 class="tutor-course-segment__title">Your Instructors</h4>

                                <div class="tutor-course-segment__instructor">
                                    <div class="tutor-instructor">
                                        <div class="tutor-instructor__avatar">
                                            <img src="{{ asset('frontend/images/team/team-member-07.jpg') }}"
                                                alt="instructor" width="200" height="246">
                                        </div>
                                        <div class="tutor-instructor__instructor-info">
                                            <h4 class="tutor-instructor__name">Owen Christ</h4>
                                            <div class="tutor-instructor__ratings">
                                                <div class="rating-star">
                                                    <div class="rating-label" style="width: 90%;"></div>
                                                </div>

                                                <div class="rating-average">
                                                    <span class="rating-average__average">4.75</span>
                                                    <span class="rating-average__total">/5</span>
                                                </div>
                                            </div>
                                            <div class="tutor-instructor__meta">
                                                <span><i class="fas fa-play-circle"></i> 42 Courses</span>
                                                <span><i class="fas fa-comment-alt"></i> 4 Reviews</span>
                                                <span><i class="fas fa-user"></i> 73 Students</span>
                                            </div>
                                            <a class="tutor-instructor__link" href="#"><i class="fas fa-plus"></i> See
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tutor Course Segment End -->


                        </div>
                        <!-- Tutor Course Main Segment End -->

                    </div>
                    <div class="col-lg-4">
                        <div class="tutor-course-price-preview">
                            <div class="tutor-course-price-preview__thumbnail">
                                <div class="ratio ratio-16x9">
                                    <img src="{{ asset('images/trainings/' . $course->training->imageName) }}"
                                        alt="courses" width="330" height="221">
                                </div>
                            </div>
                            <div class="tutor-course-price-preview__price">
                                <div class="tutor-course-price">
                                    <span class="sale-price">${{ number_format($course->training->price) }}<span
                                            class="separator">.00</span></span>
                                </div>
                            </div>
                            <div class="tutor-course-price-preview__meta">
                                <ul class="tutor-course-meta-list">

                                    <li>
                                        <div class="label"><i class="fas fa-clock"></i> Duration </div>
                                        <div class="value">15.3 hours</div>
                                    </li>
                                    <li>
                                        <div class="label"><i class="fas fa-play-circle"></i> Lectures </div>
                                        <div class="value">4 lectures</div>
                                    </li>
                                    <li>
                                        <div class="label"><i class="fas fa-tag"></i> Subject </div>
                                        <div class="value"><a href="#">{{ $course->training->category->title }}</a></div>
                                    </li>
                                    <li>
                                        <div class="label"><i class="fas fa-globe"></i> Language </div>
                                        <div class="value">English</div>
                                    </li>
                                </ul>
                            </div>
                            @if ($course->is_payed)
                                <div class="tutor-course-price-preview__btn">
                                    <a class="btn btn-primary btn-hover-danger w-100"
                                        href="{{ route('student.training_exam_show', encrypt($course->training_id)) }}">GET
                                        CERTIFICATE</a>
                                </div>
                                <div class="tutor-course-price-preview__btn">
                                    <a class="btn btn-success btn-hover-danger w-100"
                                        href="{{ route('student.chat', $course->training_id) }}">CHAT WITH INSTRUCTOR</a>

                                </div>
                            @else
                                <form action="{{ route('student.trainingPay', $course->training_id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger btn-sm w-100">
                                        Pay Now</button>
                                </form>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

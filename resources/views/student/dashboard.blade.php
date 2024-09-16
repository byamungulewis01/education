@extends('layouts.student')
@section('title', 'Home')
@section('body')
    <div class="container">
        <h4 class="dashboard-title">Dashboard</h4>

        <!-- Dashboard Info Start -->
        <div class="dashboard-info">
            @if (auth()->guard('student')->user()->status == 'approved')
                {{-- <div class="row mb-3 gy-2 gy-sm-6">
                    <div class="col-md-4 col-sm-6">
                        <!-- Dashboard Info Card Start -->
                        <div class="dashboard-info__card">
                            <a class="dashboard-info__card-box" href="#">
                                <div class="dashboard-info__card-icon icon-color-01">
                                    <i class="edumi edumi-open-book"></i>
                                </div>
                                <div class="dashboard-info__card-content">
                                    <div class="dashboard-info__card-value">1</div>
                                    <div class="dashboard-info__card-heading">Enrolled Courses</div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Info Card End -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- Dashboard Info Card Start -->
                        <div class="dashboard-info__card">
                            <a class="dashboard-info__card-box" href="#">
                                <div class="dashboard-info__card-icon icon-color-02">
                                    <i class="edumi edumi-streaming"></i>
                                </div>
                                <div class="dashboard-info__card-content">
                                    <div class="dashboard-info__card-value">0</div>
                                    <div class="dashboard-info__card-heading">Active Courses</div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Info Card End -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- Dashboard Info Card Start -->
                        <div class="dashboard-info__card">
                            <a class="dashboard-info__card-box" href="#">
                                <div class="dashboard-info__card-icon icon-color-03">
                                    <i class="edumi edumi-correct"></i>
                                </div>
                                <div class="dashboard-info__card-content">
                                    <div class="dashboard-info__card-value">1</div>
                                    <div class="dashboard-info__card-heading">Completed Courses</div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Info Card End -->
                    </div>
                </div> --}}
                <div class="row gy-8 mb-4">
                    <div class="col-lg-6">

                        <!-- Banner Box Start -->
                        <div class="banner-box banner-bg-1 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1000">

                            <h3 class="banner-caption__title">Admission Letter</h3>
                            <p>Admission Letter is a service provided by the University ...</p>

                            <a href="{{ route('student.admission', auth()->guard('student')->user()->id) }}"
                                class="btn2 btn-primary btn-hover-secondary"><i class="fa fa-download"
                                    aria-hidden="true"></i>
                                Get
                                Now</a>

                        </div>
                        <!-- Banner Box End -->

                    </div>
                    <div class="col-lg-6">

                        <!-- Banner Box Start -->
                        <div class="banner-box banner-bg-2 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1000">

                            <h3 class="banner-caption__title">Certificate</h3>
                            <p>Certificate provide after complete training provided by the University of Boost ...</p>
                            @php
                                $exam = \App\Models\ExamSetting::where('training_id', $course->training->training_id)
                                    ->where('student_id', $course->training->student_id)
                                    ->first();
                            @endphp
                            @if ($exam && $exam->status == 'success')
                                <a href="{{ route('student.certificate', auth()->guard('student')->user()->id) }}"
                                    class="btn2 btn-info btn-hover-secondary"><i class="fa fa-download"
                                        aria-hidden="true"></i>
                                    Get Now</a>

                            @endif

                        </div>
                        <!-- Banner Box End -->

                    </div>

                </div>
            @endif
            @if (!$course->is_payed)
                <div class="container">
                    <div class="card mb-4 p-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">

                                    <!-- Tutor Course Top Info Start -->
                                    <div class="tutor-course-top-info__content">
                                        <div class="tutor-course-top-info__badges">
                                            <a class="badges-category"
                                                href="#">{{ $course->training->category->title }}</a>
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
                                            <div class="tutor-course-top-info__meta-update">Last Update December 1, 2020
                                            </div>
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
                                                {{ \Illuminate\Support\Str::limit($course->training->description, 250, '...') }}

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
                                                            data-bs-target="#collapse{{ $module->id }}"> <i
                                                                class="tutor-icon"></i>
                                                            {{ $module->name }}</button>
                                                        <div id="collapse{{ $module->id }}"
                                                            class="accordion-collapse collapse"
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
                                                                                    class="fa fa-download"></i> Save
                                                                                Notes</a>
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
                                                        <a class="tutor-instructor__link" href="#"><i
                                                                class="fas fa-plus"></i> See
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
                                                <span
                                                    class="sale-price">${{ number_format($course->training->price) }}<span
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
                                                    <div class="value"><a
                                                            href="#">{{ $course->training->category->title }}</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="label"><i class="fas fa-globe"></i> Language </div>
                                                    <div class="value">English</div>
                                                </li>
                                            </ul>
                                        </div>
                                        @if (auth()->guard('student')->user()->status == 'approved')
                                            <form action="{{ route('student.trainingPay', $course->training_id) }}"
                                                method="post">
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
            @endif

        </div>

    </div>
@endsection

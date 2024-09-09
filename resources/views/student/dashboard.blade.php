@extends('layouts.student')
@section('title', 'Home')
@section('body')
    <div class="container">
        <h4 class="dashboard-title">Dashboard</h4>

        <!-- Dashboard Info Start -->
        <div class="dashboard-info">
            @if (auth()->guard('student')->user()->status == 'approved')
                <div class="row mb-3 gy-2 gy-sm-6">
                    <div class="col-md-4 col-sm-6">
                        <!-- Dashboard Info Card Start -->
                        <div class="dashboard-info__card">
                            <a class="dashboard-info__card-box" href="#">
                                <div class="dashboard-info__card-icon icon-color-01">
                                    <i class="edumi edumi-open-book"></i>
                                </div>
                                <div class="dashboard-info__card-content">
                                    <div class="dashboard-info__card-value">19</div>
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
                                    <div class="dashboard-info__card-value">27</div>
                                    <div class="dashboard-info__card-heading">Completed Courses</div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Info Card End -->
                    </div>
                </div>
                <div class="row gy-8">
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
                                $exam = \App\Models\ExamSetting::where('training_id', $training->training_id)
                                    ->where('student_id', $training->student_id)
                                    ->first();
                            @endphp
                            @if ($exam && $exam->status == 'success')
                                <a href="{{ route('student.certificate', auth()->guard('student')->user()->id) }}"
                                    class="btn2 btn-info btn-hover-secondary"><i class="fa fa-download"
                                        aria-hidden="true"></i>
                                    Get Now</a>
                            @else
                                @if (!$training->is_payed)
                                @else
                                    <a class="btn2 btn-warning btn-hover-secondary"
                                        href="{{ route('student.training_exam_show', $training->training_id) }}">Take
                                        Exam</a>
                                @endif
                            @endif

                        </div>
                        <!-- Banner Box End -->

                    </div>

                </div>
            @endif

        </div>

    </div>
@endsection

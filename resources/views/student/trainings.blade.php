@extends('layouts.student')
@section('title', 'My Training')
@section('body')
    <div class="container">
        <h4 class="dashboard-title">Enrolled Training</h4>

        <!-- Dashboard Course Start -->
        <div class="dashboard-course">

            <!-- Dashboard Tabs Start -->
            <div class="dashboard-tabs-menu">
                <ul>
                    <li><a class="active" href="#">All Training</a></li>
                    <li><a href="#">Active Training</a></li>
                    <li><a href="#">Completed Training</a></li>
                </ul>
            </div>
            <!-- Dashboard Tabs End -->

            <!-- Dashboard Course List Start -->
            <div class="dashboard-course-list">
                @foreach ($trainings as $item)
                    <div class="dashboard-course-item">
                        <a class="dashboard-course-item__link" href="{{ route('student.training_show', encrypt($item->training_id)) }}">
                            <div class="dashboard-course-item__thumbnail">
                                <img src="{{ asset('images/trainings/' . $item->training->imageName) }}" alt="Training"
                                    width="260" height="160">
                            </div>
                            <div class="dashboard-course-item__content">
                                <div class="dashboard-course-item__rating">
                                    <div class="rating-star">
                                        <div class="rating-label" style="width: 70%;"></div>
                                    </div>
                                </div>
                                <h3 class="dashboard-course-item__title">{{ $item->training->title }}</h3>
                                <div class="dashboard-course-item__meta">
                                    <ul class="dashboard-course-item__meta-list">
                                        <li>
                                            <span class="meta-label">Total Modules:</span>
                                            <span class="meta-value">{{ $item->training->modules->count() }}</span>
                                        </li>
                                        <li>
                                            <span class="meta-label">Completed Lessons:</span>
                                            <span class="meta-value">{{ $item->training->modules->count() }}/{{ $item->training->modules->count() }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dashboard-course-item__progress-bar-wrap">
                                    <div class="dashboard-course-item__progress-bar">
                                        <div class="dashboard-course-item__progress-bar-line" style="width: 100%;"></div>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-text">100% Complete</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
            <!-- Dashboard Course List End -->

        </div>
        <!-- Dashboard Course End -->
    </div>
@endsection

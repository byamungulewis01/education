@extends('layouts.student')
@section('title', 'My Training')
@section('body')
    <div class="container">
        <h4 class="dashboard-title">My Quiz Attempts</h4>

        <!-- Dashboard My Quiz Attempts Start -->
        <div class="col-lg-10">
            <div class="dashboard-my-quiz-attempts">
                <div class="dashboard-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="course-info">Course Info</th>
                                <th class="earned">Earned Marks</th>
                                <th class="result">Result</th>
                                <th class="action"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($exams as $item)
                                <tr>
                                    <td class="course-info">
                                        <h3 class="dashboard-table__title"><a
                                                href="#">{{ $item->training->title }}</a>
                                        </h3>
                                        <div class="dashboard-table__meta">
                                            <div class="dashboard-table__meta-item">
                                                {{ $item->created_at->format('F d, Y h:i:s a') }}</div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Question: </span>
                                                <span class="value">{{ $item->training->quetions->count() }}</span>
                                            </div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Total Marks: </span>
                                                <span class="value">{{ $item->training->quetions->sum('marks') }}</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Earned Marks</div>
                                        <div class="dashboard-table__text">{{ $item->total_marks }}
                                            ({{ number_format(($item->total_marks * 100) / $item->training->quetions->sum('marks'), 1) }}%)
                                        </div>
                                    </td>
                                    <td class="result">
                                        <div class="dashboard-table__mobile-heading">Result</div>
                                        @if ($item->status == 'success')
                                            <div class="dashboard-table__result pass">Pass</div>
                                        @else
                                            <div class="dashboard-table__result fail">Fail</div>
                                        @endif
                                    </td>
                                    <td class="action">
                                        <a class="dashboard-table__link" href="{{ route('student.training_exam_show', encrypt($item->training_id)) }}">Details</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Dashboard My Quiz Attempts End -->
        </div>
    </div>
@endsection

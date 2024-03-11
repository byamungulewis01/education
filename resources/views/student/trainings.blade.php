@extends('layouts.front')
@section('title', 'My Training')
@section('body')
    <!--SECTION START-->
    <section>
        @include('student.navbar')
        <div class="stu-db">
            <div class="container pg-inn">
                @include('student.sidebar')

                <div class="col-md-9">
                    <div class="udb">

                        <div class="udb-sec udb-cour-stat">
                            <h4>All Trainings</h4>
                            <p>All Trainings you have enroll</p>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Training Name</th>
                                            <th>Price</th>
                                            <th>Join Date</th>
                                            <th>Status</th>
                                            <th>Exam Scheme</th>
                                            <th>View</th>
                                            <th>Certficate</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($trainings as $item)
                                            @php
                                                @$setting = App\Models\ExamSetting::withTrashed()
                                                    ->where('student_id', $item->student_id)
                                                    ->where('training_id', $item->training_id)
                                                    ->first();
                                            @endphp
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->training->title }}</td>
                                                <td>{{ $item->training->price }}</td>
                                                <td>{{ $item->created_at->format('Y , M d') }}</td>
                                                <td>
                                                    @if ($item->is_payed)
                                                        <span class="pro-user-act">Paid</span>
                                                    @else
                                                        <span class="pro-bg-act">Not Paid</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($setting)
                                                        <a href="{{ route('student.marking_scheme', $setting->id) }}">
                                                            Check Here</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (auth()->guard('student')->user()->status == 'approved')
                                                        <a href="{{ route('student.training_show', $item->training_id) }}"
                                                            class="pro-edit">view</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="#!" data-toggle="modal"
                                                        data-target="#modal{{ $item->id }}" class="pro-edit">Get now</a>
                                                    <div id="modal{{ $item->id }}" class="modal modal-mine fade"
                                                        role="dialog">
                                                        <div class="log-in-pop" style="padding: 20px;">

                                                            <a href="#" class="pop-close" data-dismiss="modal"><img
                                                                    src="{{ asset('frontend/images/cancel.png') }}"
                                                                    alt="" />
                                                            </a>
                                                            <h4>Get Certificate</h4>
                                                            <form class="s12" method="POST"
                                                                action="{{ route('student.certificate_by_year', auth()->guard('student')->user()->id) }}">
                                                                @csrf
                                                                <div class="mt-3">
                                                                    <label for="title" class="form-label">Year of
                                                                        Complishing</label>
                                                                    <input type="date" name="year"
                                                                        class="form-control" id="">
                                                                </div>

                                                                <div style="padding-bottom: 12%">
                                                                    <div class="input-field s4">
                                                                        <input type="submit" value="Submit"
                                                                            class="waves-effect waves-light log-in-btn">
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection

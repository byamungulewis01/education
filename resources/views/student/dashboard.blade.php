@extends('layouts.front')
@section('title', 'Profile')
@section('body')
    <!--SECTION START-->
    <section>
        @include('student.navbar')
        <div class="stu-db">
            <div class="container pg-inn">
                @include('student.sidebar')

                <div class="col-md-9">
                    <div class="udb">
                        @if (auth()->guard('student')->user()->status == 'approved')
                            <div class="udb-sec udb-cour">
                                <h4>Your Academic Documents</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="home-top-cour" style="background-color: rgb(255, 255, 255)">
                                            <!--POPULAR COURSES IMAGE-->

                                            <div class="col-md-12 home-top-cour-desc">
                                                <a href="">
                                                    <h3>Admission Letter</h3>
                                                </a>
                                                {{-- <h4>Technology / Space / Aerospace</h4> --}}
                                                <p>
                                                    Admission Letter is a service provided by the University ...
                                                </p>
                                                <div class="hom-list-share">
                                                    <ul>
                                                        <li><a
                                                                href="{{ route('student.admission',auth()->guard('student')->user()->id) }}"><i
                                                                    class="fa fa-download" aria-hidden="true"></i> Get
                                                                Now</a> </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="home-top-cour" style="background-color: rgb(255, 255, 255)">
                                            <!--POPULAR COURSES IMAGE-->

                                            <div class="col-md-12 home-top-cour-desc">
                                                <a href="#">
                                                    <h3>Certificate</h3>
                                                </a>
                                                {{-- <h4>Technology / Space / Aerospace</h4> --}}
                                                <p>
                                                    Certificate provide after complete training provided by the University
                                                    of
                                                    Boost ...
                                                    @php
                                                        $exam = \App\Models\ExamSetting::where('training_id',$training->training_id)->where('student_id',$training->student_id)->first();
                                                    @endphp

                                                </p>
                                                <div class="hom-list-share">
                                                    <ul>
                                                        <li>
                                                            @if ($exam && $exam->status == 'success')

                                                            <a
                                                                href="{{ route('student.certificate',auth()->guard('student')->user()->id) }}"><i
                                                                    class="fa fa-download" aria-hidden="true"></i> Get
                                                                Now</a> </li>

                                                            @else
                                                            @if (!$training->is_payed)
                                                            <li>
                                                                <form
                                                                    action="{{ route('student.trainingPay', $training->training_id) }}"
                                                                    method="post">
                                                                    @csrf
                                                               
                                                                </form>
                                                            </li>
                                                            @else
                                                            <a href="{{ route('student.training_exam_show', $training->training_id) }}">Take Exam</a> </li>
                                                            @endif
                                                            @endif

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="udb-sec udb-cour-stat">
                                <h3>{{ $training->training->title }} <span class="badge"
                                        style="background-color: #ec563f;color:aliceblue;">{{ $training->training->price }}</span>
                                </h3>
                                <div class="cor-p5">
                                    <p>{{ $training->training->description }}</p>

                                    <div class="hom-list-share">
                                        <ul>
                                            @if ($training->is_payed)
                                                <li><a
                                                        href="{{ route('student.training_exam_show', $training->training_id) }}">GET
                                                        CERTIFICATE</a> </li>
                                                <li><a href="{{ route('student.chat', $training->training_id) }}">CHAT WITH
                                                        INSTRUCTOR</a> </li>
                                            @else
                                                <li>
                                                    <form
                                                        action="{{ route('student.trainingPay', $training->training_id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm">
                                                            Pay Now</button>
                                                    </form>
                                                </li>
                                                <li><a href="#" style="cursor: none;"><i class="fa fa-money"
                                                            aria-hidden="true"></i>
                                                        {{ $training->training->price }}</a>
                                                </li>
                                            @endif

                                        </ul>
                                    </div>

                                </div>
                                <div class="cor-p6">
                                    <h3>Training Modules</h3>
                                    @foreach ($modules as $item)
                                        <div class="cor-p6-revi">
                                            <div class="cor-p6-revi-left">
                                                <img src="{{ asset('frontend/images/module.png') }}" alt="">
                                            </div>
                                            <div class="cor-p6-revi-right">
                                                <h4>{{ $item->name }}</h4>
                                                <p>{{ $item->description }}</p>

                                                <a target="blank" href="{{ asset('files/components/' . $item->fileUrl) }}"
                                                    {{ $training->is_payed ? '' : 'disabled' }}
                                                    class="btn btn-sm btn-primary"><i class="fa fa-download"></i> &nbsp;
                                                    Save Notes</a>

                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @else
                            <div class="udb-sec udb-cour-stat">
                                <h3>{{ $training->training->title }} <span class="badge"
                                        style="background-color: #ec563f;color:aliceblue;">{{ $training->training->price4 }}</span>
                                </h3>
                                <div class="cor-p5">
                                    <p>{{ $training->training->description }}</p>

                                    <div class="hom-list-share">
                                        <ul>
                                            <li><a href="#" style="cursor: none;"><i class="fa fa-money"
                                                        aria-hidden="true"></i>
                                                    {{ $training->training->price }}</a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                                <div class="cor-p6">
                                    <h3>Training Modules</h3>
                                    @foreach ($modules as $item)
                                        <div class="cor-p6-revi">
                                            <div class="cor-p6-revi-left">
                                                <img src="{{ asset('frontend/images/module.png') }}" alt="">
                                            </div>
                                            <div class="cor-p6-revi-right">
                                                <h4>{{ $item->name }}</h4>
                                                <p>{{ $item->description }}</p>

                                                <a target="blank" href="{{ asset('files/components/' . $item->fileUrl) }}"
                                                    {{ $training->is_payed ? '' : 'disabled' }}
                                                    class="btn btn-sm btn-primary"><i class="fa fa-download"></i> &nbsp;
                                                    Save Notes</a>

                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection

@extends('layouts.student')
@section('title', 'Show Training')
@section('body')
    <!--SECTION START-->
    <section>
        <div class="col-md-9">
            <div class="udb">
                <div class="udb-sec udb-cour-stat">
                    <h3>{{ $training->training->title }} <span class="badge"
                            style="background-color: #ec563f;color:aliceblue;">{{ $training->training->price }}</span>
                    </h3>
                    <div class="cor-p5">
                        <p>{{ $training->training->description }}</p>

                        <div class="hom-list-share">
                            <ul>
                                @if ($training->is_payed)
                                    <li><a href="{{ route('student.training_exam_show', $training->training_id) }}">GET
                                            CERTIFICATE</a> </li>
                                    <li><a href="{{ route('student.chat', $training->training_id) }}">CHAT WITH INSTRUCTOR</a> </li>
                                @else
                                    <li>
                                        <form action="{{ route('student.trainingPay', $training->training_id) }}"
                                            method="post">
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                Pay Now</button>
                                        </form>
                                    </li>
                                    <li><a href="#" style="cursor: none;"><i class="fa fa-money" aria-hidden="true"></i>
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
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection

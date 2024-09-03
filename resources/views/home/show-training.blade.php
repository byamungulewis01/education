@extends('layouts.front')
@section('title', 'Training Details')
@section('body')
    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="cor">
                    <div class="col-md-4">
                        <div class="cor-top-deta cor-side-com">
                            <div class="cor-top-deta">
                                <div class="ho-st-login cor-apply field-com">
                                    <div class="col s12">
                                        <form class="col s12">
                                            <div class="cor-left-app-tit">
                                                <h4>Apply This Training</h4>
                                                <p>Nulla at velit convallis lectus.</p>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <a href="{{ route('admission', $training->id) }}"
                                                        class="waves-effect waves-light light-btn">APPLY NOW</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cor-side-com">
                            <div class="">
                                <div class="de-left-tit">
                                    <h4>Differents Modules</h4>
                                </div>
                            </div>
                            <div class="ho-event">
                                <ul>
                                    @foreach ($modules as $item)
                                        <li>
                                            <div class="ho-ev-link ho-ev-link-full">
                                                <a href="#">
                                                    <h4>{{ $item->name }}</h4>
                                                </a>
                                                <p> {{ Illuminate\Support\Str::limit(strip_tags($item->description), 40) }}
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="cor-mid-img">
                            <img src="{{ asset('images/trainings/' . $training->imageName) }}" style="height: 300px;"
                                alt="">
                        </div>
                        <div class="cor-con-mid">
                            <div class="cor-p1">
                                <h2>{{ $training->title }}</h2>
                                {{-- <span>Category: Software Testing</span> --}}
                                <div class="hom-list-share">
                                    <ul>
                                        <li>

                                            @if (auth()->guard('student')->check())
                                                <a href="#!" data-toggle="modal"
                                                    data-target="#bookTraining{{ $training->id }}"><i
                                                        class="fa fa-bar-chart" aria-hidden="true"></i> Book
                                                    Now</a>
                                            @else
                                                <a href="{{ route('admission', $training->id) }}"><i class="fa fa-bar-chart"
                                                        aria-hidden="true"></i> Book
                                                    Now</a>
                                            @endif

                                        </li>
                                        <li><a href="#"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>{{ $training->modules->count() }}
                                                Modules </a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>
                                                {{ $training->price }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cor-p4">
                                <h3>Course Details:</h3>
                                <p>{{ $training->description }}</p>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="bookTraining{{ $training->id }}" class="modal fade" role="dialog">
            <div class="log-in-pop" style="padding: 4%">
                <a href="#" class="pop-close" data-dismiss="modal"><img
                        src="{{ asset('frontend/images/cancel.png') }}" alt="" />
                </a>
                <h4>{{ $training->title }}</h4>
                <br>
                <p>{{ $training->description }}</p>
                <br>
                <form class="s12" method="POST" action="{{ route('student.bookTraining', $training->id) }}">
                    @csrf
                    <div class="input-field s4">
                        <input type="submit" value="Book Now" class="waves-effect waves-light log-in-btn">
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection

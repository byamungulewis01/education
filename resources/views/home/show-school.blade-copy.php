@extends('layouts.front')
@section('title', 'School Details')
@section('body')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1>{{ $category->title }}</h1>
                    <p>{{ $category->description }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="pop-cour">
        <div class="container com-sp">
            <div class="row">
                @foreach ($trainings as $item)
                    <div class="col-md-6">
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{ asset('images/trainings/' . $item->imageName) }}"
                                    alt="">
                            </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="{{ route('training', $item->id) }}">
                                    <h3>{{ $item->title }}</h3>
                                </a>
                                {{-- <h4>Technology / Space / Aerospace</h4> --}}

                                {{ Illuminate\Support\Str::limit(strip_tags($item->description), 100) }}

                                <div class="hom-list-share">
                                    <ul>
                                        <li>
                                            @if (auth()->guard('student')->check())
                                                <a href="#!" data-toggle="modal"
                                                    data-target="#bookTraining{{ $item->id }}"><i
                                                        class="fa fa-bar-chart" aria-hidden="true"></i> Book
                                                    Now</a>
                                            @else
                                                <a href="{{ route('admission', $item->id) }}"><i class="fa fa-bar-chart"
                                                        aria-hidden="true"></i> Book
                                                    Now</a>
                                            @endif
                                        </li>
                                        <li><a href="#"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>{{ $item->modules->count() }}
                                                Modules</a> </li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>
                                                {{ $item->price }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="bookTraining{{ $item->id }}" class="modal fade" role="dialog">
                        <div class="log-in-pop" style="padding: 4%">
                            <a href="#" class="pop-close" data-dismiss="modal"><img
                                    src="{{ asset('frontend/images/cancel.png') }}" alt="" />
                            </a>
                            <h4>{{ $item->title }}</h4>
                            <br>
                            <p>{{ $item->description }}</p>
                            <br>
                            <form class="s12" method="POST" action="{{ route('student.bookTraining', $item->id) }}">
                                @csrf
                                <div class="input-field s4">
                                    <input type="submit" value="Book Now" class="waves-effect waves-light log-in-btn">
                                </div>

                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

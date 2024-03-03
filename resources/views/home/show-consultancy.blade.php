@extends('layouts.front')
@section('title', 'Consultance')
@section('body')

    <!--SECTION START-->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div>
                            <div class="ho-event pg-eve-main pg-blog">
                                <ul>
                                    <li>

                                        <div class="pg-eve-desc pg-blog-desc">
                                            <a href="event-register.html">
                                                <h4>{{ $consultancy->title }}
                                                    {{-- <button style="float: right;"
                                                        class="btn btn-danger">Apply Now</button> --}}
                                                    </h4>
                                            </a>

                                            <img src="{{ asset('images/' . $consultancy->imageName) }}" alt="">
                                            <p>{!! $consultancy->description !!}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection

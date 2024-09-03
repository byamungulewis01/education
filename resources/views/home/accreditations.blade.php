@extends('layouts.front')
@section('title', 'Accreditations ')
@section('body')

    <!--SECTION START-->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Accreditations </h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus,
                                nec pharetra augue.</p>
                        </div>
                        <div>
                            <div class="ho-event pg-eve-main">
                                <ul>
                                    @foreach ($accreditations as $item)
                                        <li>
                                            <div class="ho-ev-img"><img
                                                    src="{{ asset('images/accreditation/' . $item->imageName) }}"
                                                    alt="">
                                            </div>
                                            <div class="ho-ev-link pg-eve-desc">
                                                <a href="event-register.html">
                                                    <h4>{{ $item->title }}</h4>
                                                </a>
                                                <p>{!! Illuminate\Support\Str::limit(strip_tags($item->description), 150) !!}</p>
                                                {{-- <span>9:15 am – 5:00 pm</span> --}}
                                            </div>
                                            <div class="pg-eve-reg">
                                                <a href="{{ route('show_accreditation', encrypt($item->id)) }}">Read
                                                    more</a>
                                            </div>
                                        </li>
                                    @endforeach

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

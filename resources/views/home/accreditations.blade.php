@extends('layouts.front')
@section('title', 'Accreditations ')
@section('body')
    <!-- Page Banner Section Start -->
    <div class="page-banner bg-color-05">
        <div class="page-banner__wrapper">
            <div class="container">


                <!-- Page Banner Caption Start -->
                <div class="page-banner__caption text-center">
                    <h2 class="page-banner__main-title">Accreditations</h2>
                </div>
                <!-- Page Banner Caption End -->

            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->
    <!-- Event Start -->
    <div class="event-section overflow-visible section-padding-01 pt-0">
        <div class="container custom-container">


            <!-- Archive Filter Bars Start -->
            <div class="archive-filter-bars mt-2">

                <div class="archive-filter-bar">
                    <p>We found <span>{{ $accreditations->count() }}</span> accreditations available for you</p>
                </div>

            </div>
            <!-- Archive Filter Bars End -->

            <!-- Events list Wrapper Start -->
            <div class="events-list-wrapper">
                @foreach ($accreditations as $item)
                    <div class="event-list-item" data-aos="fade-up" data-aos-duration="1000">
                        <div class="event-list-item__image">
                            <a href="{{ route('show_accreditation', encrypt($item->id)) }}"><img src="{{ asset('images/accreditation/' . $item->imageName) }}"
                                    alt="Event" width="400" height="270"></a>
                        </div>
                        <div class="event-list-item__content">
                            <div class="event-list-item__content-wrapper">
                                <h3 class="event-list-item__title"><a href="{{ route('show_accreditation', encrypt($item->id)) }}">{{ $item->title }}</a></h3>
                                <div class="event-list-item__excerpt">
                                    <p>{!! Illuminate\Support\Str::limit(strip_tags($item->description), 300) !!}</p>
                                </div>
                            </div>
                            <div class="event-list-item__content-meta">

                                <div class="event-list-item__btn">
                                    <a class="btn btn-primary btn-hover-secondary" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Events list Wrapper End -->
        </div>
    </div>
    <!-- Event End -->

@endsection

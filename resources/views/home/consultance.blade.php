@extends('home.app')
@section('title', 'Consultance')
@section('body')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title bg-cover" style="background:url({{ asset('assets/img/banner-3.jpg') }})no-repeat;"
        data-overlay="8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title text-light">Consultance</h1>
                        <nav class="transparent">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-light">Home</a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">Consultance</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ article Start ================================== -->
    <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>Consultance & <span class="theme-cl">Services</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach ($consultances as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="blg_grid_box">
                            <div class="blg_grid_thumb">
                                <a href="#"><img src="{{ asset('images/' . $item->imageName) }}" class="img-fluid"
                                        alt="" /></a>
                            </div>
                            <div class="blg_grid_caption">
                                {{-- <div class="blg_tag"><span>Marketing</span></div> --}}
                                <div class="blg_title">
                                    <h4><a href="#">{{ $item->title }}</a></h4>
                                </div>
                                <div class="blg_desc">
                                    <p>{{ implode(' ', array_slice(str_word_count($item->description, 2), 0, 14)) }}...
                                        <a href="" class="text-info">read more</a>
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
@endsection

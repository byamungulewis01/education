@extends('home.app')
@section('title', 'Student Dashboard')
@section('body')
    <section class="gray pt-4">
        <div class="container-fluid">

            <div class="row">

                @include('student.sidebar')

                <div class="col-lg-9 col-md-9 col-sm-12">

                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">My Courses</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    @foreach ($courses as $item)
                                        <div class="grousp_crs">
                                            <div class="grousp_crs_left">
                                                <div class="grousp_crs_thumb"><img
                                                        src="{{ asset('images/' . $item->course->school->imageName) }}"
                                                        class="img-fluid" alt=""></div>
                                                <div class="grousp_crs_caption">
                                                    <h4>{{ $item->course->title }} </h4>
                                                    <h6>{{ $item->course->school->title }}</h6>
                                                </div>
                                                {{-- <div class="grousp_crs_caption">
                                                <h4>Instructor</h4>
                                                <h6>Instructor Name</h6>
                                            </div> --}}
                                            </div>
                                            <div class="grousp_crs_right">
                                                <div class="frt_125">
                                                    @if ($item->course->price == 0)
                                                        Free
                                                    @else
                                                        ${{ $item->course->price }}
                                                    @endif
                                                </div>
                                                <div class="frt_but"><a href="#" class="btn text-white theme-bg">View
                                                        Course</a></div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection

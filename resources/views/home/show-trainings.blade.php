@extends('layouts.front')
@section('title', 'Home')
@section('body')
    <section class="section-py bg-body first-section-pt">
        <div class="container mt-2">
            <div class="card px-3">
                <div class="row">
                    <div class="col-lg-6 card-body border-end">
                        <h4 class="mb-2">{{ $category->title }}</h4>
                        <p class="mb-0">{{ $category->description }}</p>
                    </div>
                    <div class="col-lg-6 card-body">
                        <h4 class="mb-2">Order Summary</h4>
                        @if (session('warning'))
                            <div class="alert alert-warning mb-2"><strong>Warning</strong>
                                {{ session('warning') }}
                            </div>
                        @endif
                        <ul class="list-group mb-3">
                            @foreach ($trainings as $training)
                                <li class="list-group-item p-4">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="me-3"><a href="javascript:void(0)"
                                                    class="text-body">{{ $training->title }}</a></h5>
                                            <p class="mb-0"><span
                                                    class="text-body">{{ implode(' ', array_slice(str_word_count($training->description, 2), 0, 9)) }}...</span>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-md-end">
                                                <div class="my-2 my-md-4"><span
                                                        class="text-primary">${{ $training->price }}</span></div>
                                                @if (auth()->guard('student')->check())
                                                    @if ($training->price == 0)
                                                        <form action="{{ route('enroll.free_course', $training->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <button class="btn btn-sm btn-label-primary mt-md-3 waves-effect">Get
                                                                training</button>
                                                        </form>
                                                    @else
                                                        <form action="{{ route('enroll.paid_course', $training->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <button class="btn btn-sm btn-label-primary mt-md-3 waves-effect">Get
                                                                training</button>
                                                        </form>
                                                    @endif
                                                @else
                                                    <button data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-sm btn-label-primary mt-md-3 waves-effect">Get
                                                        training</button>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

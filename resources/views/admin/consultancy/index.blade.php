@extends('layouts.app')
@section('title', 'Consultance')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css">
@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-0">Consultancy
                    <a class="btn btn-dark text-white pull-left float-end" href="{{ route('admin.consultance.create') }}">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                        <span class="d-none d-sm-inline-block">Service</span></a>
                </h5>


            </div>

            <div class="card-body mt-3">
                <div class="row mb-5">
                    @foreach ($consultances as $item)
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('images/' . $item->imageName) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{!! Illuminate\Support\Str::limit(strip_tags($item->description), 130) !!}</p>
                                <a href="{{ route('admin.consultance.edit',$item->id) }}" class="btn btn-outline-primary waves-effect">Edit</a>
                                <a href="javascript:void(0)" class="btn btn-outline-danger waves-effect">Delete</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 600, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: true // set focus to editable area after initializing summernote
            });
        });
    </script>
@endsection

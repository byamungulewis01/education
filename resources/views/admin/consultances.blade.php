@extends('layouts.app')
@section('title', 'Consultance')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css">
@endsection
@section('body')
    <!-- Row -->
    <div class="row justify-content-between">
        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
            <div class="dashboard_wrap d-flex align-items-center justify-content-between">
                <div class="arion">
                    <nav class="transparent">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Consultancy</li>
                        </ol>
                    </nav>
                </div>
                <div class="elkios">
                    <a href="#" class="add_new_btn" data-toggle="modal" data-target="#addModel"><i
                            class="fas fa-plus-circle mr-1"></i>Add Service</a>
                    <!-- Modal -->
                    <div class="modal" id="addModel" tabindex="-1" role="dialog" aria-labelledby="catModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Service</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms_block" method="post" action="{{ route('admin.consultance.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group smalls">
                                            <label>Title</label>
                                            <input name="title" type="text" class="form-control" placeholder="Title">
                                        </div>
                                        <div class="form-group smalls">
                                            <label>Image</label>
                                            <input name="image" type="file" class="form-control">
                                        </div>
                                        <div class="form-group smalls">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control summernote" placeholder="Description"></textarea>
                                        </div>

                                        <div class="form-group smalls">
                                            <button class="btn full-width theme-bg text-white">Submit</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->

    <div class="row">
        @foreach ($consultances as $item)
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="dash_crs_cat">
                    {{-- <a href="#" class="remove_tools"><i class="fas fa-trash-alt"></i></a> --}}
                    <div class="dash_crs_cat_thumb">
                        <img src="{{ asset('images/' . $item->imageName) }}" alt="" class="img-fluid" />
                    </div>
                    <div class="dash_crs_cat_caption">
                        <div class="dash_crs_cat_head">
                            <h4>{{ $item->title }}</h4>
                            <span>{!! Illuminate\Support\Str::limit(strip_tags($item->description), 130) !!}</span>
                            {{-- <span>{!! $item->description !!}</span> --}}
                            {{-- <span>{!! implode(' ', array_slice(str_word_count($item->description, 2), 0, 7)) !!}...</span> --}}
                        </div>
                        <div class="dash_crs_cat_bottom d-flex align-items-center justify-content-center gap-3">
                            <a href="#" data-toggle="modal" data-target="#editModel{{ $item->id }}"
                                class="btn theme-bg-light theme-cl">Edit Service</a>
                            &nbsp;&nbsp;
                            <form action="{{ route('admin.consultance.destroy', $item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button href="#" onclick="return confirm('Are you Sure to Delete ?')"
                                    class="btn btn-danger text-light">Delete Service</button>
                            </form>
                        </div>
                        <div class="modal" id="editModel{{ $item->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="catModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Service</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="forms_block" method="post" enctype="multipart/form-data"
                                            action="{{ route('admin.consultance.update', $item->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group smalls">
                                                <label>Title</label>
                                                <input name="title" type="text" class="form-control"
                                                    value="{{ $item->title }}">
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Image</label>
                                                <input name="image" type="file" class="form-control">
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control summernote">{{ $item->description }}</textarea>
                                            </div>

                                            <div class="form-group smalls">
                                                <button class="btn full-width theme-bg text-white">Save</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 600, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    });
</script>
@endsection

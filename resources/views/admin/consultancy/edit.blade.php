@extends('layouts.app')
@section('title', 'Consultance')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />
@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Full Editor -->
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Edit Consultancy</h5>
                <div class="card-body">
                    <form method="POST" class="row g-2" action="{{ route('admin.consultance.update', $item->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-6">
                            <label for="title"  class="form-label">Title</label>
                            <input name="title" autofocus type="text" class="form-control" required placeholder="Title"
                            value="{{ $item->title }}">
                        </div>
                        <div class="col-6">
                            <label for="title" class="form-label">Image</label>
                            <input name="image" type="file" class="form-control">
                        </div>
                        <div class="col-12 mt-3">
                            <label for="title" class="form-label">Description</label>
                            <div id="full-editor">{!! $item->description !!}</div>
                        </div>
                        <div class="col-12 mt-4 text-end">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Full Editor -->
    </div>

@endsection

@section('js')
    <script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('assets/js/forms-editors.js') }}"></script>
@endsection

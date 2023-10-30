@extends('layouts.app')
@section('title', 'Categories')
@section('body')
    <!-- Row -->
    <div class="row justify-content-between">
        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
            <div class="dashboard_wrap d-flex align-items-center justify-content-between">
                <div class="arion">
                    <nav class="transparent">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Categories</li>
                        </ol>
                    </nav>
                </div>
                <div class="elkios">
                    <a href="#" class="add_new_btn" data-toggle="modal" data-target="#addModel"><i
                            class="fas fa-plus-circle mr-1"></i>Add Category</a>
                    <!-- Modal -->
                    <div class="modal" id="addModel" tabindex="-1" role="dialog" aria-labelledby="catModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms_block" method="post" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
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
                                            <textarea name="description" class="form-control" placeholder="Description"></textarea>
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
    <!-- /Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="dashboard_wrap">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                        <div class="table-responsive">
                            <table class="table dash_list">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td><img src="{{ asset('images/'.$item->imageName) }}" class="img-fluid circle"
                                                    width="40" alt=""></td>
                                            <td class="font-weight-bold">{{ $item->title }}</td>
                                            <td>{{ implode(' ', array_slice(str_word_count($item->description, 2), 0, 7)) }}...
                                            </td>

                                            <td>
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#editModel{{ $item->id }}">Edit</button>
                                                <!-- Modal -->
                                                <div class="modal" id="editModel{{ $item->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="catModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Category</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true"><i
                                                                            class="fas fa-times-circle"></i></span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="forms_block" method="post" enctype="multipart/form-data"
                                                                    action="{{ route('admin.category.update', $item->id) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group smalls">
                                                                        <label>Title</label>
                                                                        <input name="title" type="text"
                                                                            class="form-control"
                                                                            value="{{ $item->title }}">
                                                                    </div>
                                                                    <div class="form-group smalls">
                                                                        <label>Image</label>
                                                                        <input name="image" type="file"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="form-group smalls">
                                                                        <label>Description</label>
                                                                        <textarea name="description" class="form-control">{{ $item->description }}</textarea>
                                                                    </div>

                                                                    <div class="form-group smalls">
                                                                        <button
                                                                            class="btn full-width theme-bg text-white">Save</button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="{{ route('admin.category.destroy', $item->id) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger"
                                                        onclick="return confirm('Are you Sure to Delete ?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

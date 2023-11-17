@extends('layouts.app')
@section('title', 'Trainings')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css">
@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-0">Trainings List
                    <a class="btn btn-dark text-white pull-left float-end" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                        <span class="d-none d-sm-inline-block">Training</span></a>
                </h5>
                <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered1 modal-simple modal-add-new-cc">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="text-center mb-2">
                                    <h3>Add New Training</h3>
                                </div>
                                <form method="POST" class="row g-2" action="{{ route('admin.training.store') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="title" class="form-label">Title</label>
                                        <input name="title" type="text" class="form-control" required
                                            placeholder="Training Title" value="{{ old('title') }}">
                                    </div>
                                    <div class="col-md-7">

                                        <label for="category_id" class="form-label">Category</label>
                                        <select name="category_id" id="category_id" class="form-select">
                                            <option value="" selected disabled>Select</option>
                                            @foreach ($categories as $category)
                                                <option {{ old('category_id') == $category->id ? 'selected' : '' }}
                                                    value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-5">
                                        <label for="price" class="form-label">Price</label>
                                        <input name="price" type="number" id="price" value="{{ old('price') }}"
                                            min="0" class="form-control" placeholder="Training Price">
                                    </div>

                                    <div class="col-md-12">

                                        <label for="instructor" class="form-label">Instructor</label>
                                        <select name="user_id" id="instructor" class="form-select">
                                            <option value="" selected disabled>Select</option>
                                            @foreach ($instructors as $instructor)
                                                <option {{ old('user_id') == $instructor->id ? 'selected' : '' }}
                                                    value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">

                                        <label for="description" class="form-label">Description</label>
                                        <textarea id="description" name="description" rows="6" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                                    </div>
                                    <div class="col-12 mt-4 text-center">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th scope="col">Training</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Instructor</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trainings as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td class="font-weight-bold">{{ $item->title }}</td>
                                <td>{{ $item->category->title }}</td>
                                <td>{{ $item->price }} $ </td>
                                <td>{{ $item->user->name }}</td>
                                <td>
                                    @if ($item->status == 'active')
                                        <span class="badge bg-primary">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.training.show', $item->id) }}" class="btn btn-sm btn-info"><i
                                            class="fas fa-eye mr-0"></i></a>
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editModel{{ $item->id }}"><i
                                            class="fas fa-edit mr-0"></i></button>

                                    <div class="modal fade" id="editModel{{ $item->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div
                                            class="modal-dialog modal-lg modal-dialog-centered1 modal-simple modal-add-new-cc">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    <div class="text-center mb-2">
                                                        <h3>Edit Training</h3>
                                                    </div>
                                                    <form method="POST" class="row g-3"
                                                        action="{{ route('admin.training.update', $item->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="col-12">
                                                            <label for="title" class="form-label">Title</label>
                                                            <input name="title" type="text" class="form-control"
                                                                required value="{{ $item->title }}">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <label for="category_id" class="form-label">Category</label>
                                                            <select name="category_id" id="category_id"
                                                                class="form-select">
                                                                <option value="" selected disabled>Select</option>
                                                                @foreach ($categories as $category)
                                                                    <option
                                                                        {{ $item->category_id == $category->id ? 'selected' : '' }}
                                                                        value="{{ $category->id }}">
                                                                        {{ $category->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="col-md-5">
                                                            <label for="price" class="form-label">Price</label>
                                                            <input name="price" type="number" id="price"
                                                                value="{{ $item->price }}" min="0"
                                                                class="form-control">
                                                        </div>

                                                        <div class="col-md-7">

                                                            <label for="instructor" class="form-label">Instructor</label>
                                                            <select name="user_id" id="instructor" class="form-select">
                                                                <option value="" selected disabled>Select</option>
                                                                @foreach ($instructors as $instructor)
                                                                    <option
                                                                        {{ $item->user_id == $instructor->id ? 'selected' : '' }}
                                                                        value="{{ $instructor->id }}">
                                                                        {{ $instructor->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select name="status" id="status" class="form-select">
                                                                <option {{ $item->status == 'active' ? 'selected' : '' }}
                                                                    value="active">Active</option>
                                                                <option {{ $item->status == 'inactive' ? 'selected' : '' }}
                                                                    value="inactive">Inactive</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">

                                                            <label for="description"
                                                                class="form-label">Description</label>
                                                            <textarea id="description" name="description" rows="6" class="form-control" placeholder="Description">{{ $item->description }}</textarea>
                                                        </div>
                                                        <div class="col-12 mt-4 text-center">
                                                            <button type="submit"
                                                                class="btn btn-primary me-sm-3 me-1">Save</button>
                                                            <button type="reset" class="btn btn-label-secondary"
                                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <form action="{{ route('admin.training.destroy', $item->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you Sure to Delete ?')"><i
                                                class="fas fa-trash mr-0"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 300, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: true // set focus to editable area after initializing summernote
            });
        });
    </script>
@endsection

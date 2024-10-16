@extends('layouts.app')
@section('title', 'Create Course')
@section('css')

@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Full Editor -->
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Create Course</h5>
                <div class="card-body">
                    <form method="POST" class="row g-2" action="{{ route('admin.training.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="title" class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" required
                                placeholder="Training Title" value="{{ old('title') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="category" class="form-label">Category</label>
                            <select name="category_id" id="category" class="form-select" required>
                                @foreach ($categories as $category)
                                    <option {{ old('category_id') == $category->id ? 'selected' : '' }}
                                        value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="instructor" class="form-label">Instructor</label>
                            <select name="user_id" id="instructor" class="form-select" required>
                                <option value="" selected disabled>Select</option>
                                @foreach ($instructors as $instructor)
                                    <option {{ old('user_id') == $instructor->id ? 'selected' : '' }}
                                        value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="price" class="form-label">Price</label>
                            <input name="price" type="number" id="price" value="{{ old('price') }}"
                                min="0" class="form-control" placeholder="Training Price">
                        </div>
                        <div class="col-md-3">
                            <label for="exam_duration" class="form-label">Exam Duration <span class="text-danger">(Minutes)</span></label>
                            <input name="exam_duration" type="number" min="1" id="exam_duration" value="{{ old('exam_duration') }}"
                                min="0" class="form-control" placeholder="Exam Duration">
                        </div>

                        <div class="col-md-5">
                            <label>Image</label>
                            <input name="image" type="file" class="form-control">
                        </div>
                        <div class="col-12 mt-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" rows="20" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                        </div>
                        <div class="col-12 mt-4 text-end">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Full Editor -->
    </div>

@endsection

@section('js')

@endsection

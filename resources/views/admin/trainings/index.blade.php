@extends('layouts.app')
@section('title', 'Trainings')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
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
                            <li class="breadcrumb-item active" aria-current="page">Trainings</li>
                        </ol>
                    </nav>
                </div>
                <div class="elkios">
                    <a href="#" class="add_new_btn" data-toggle="modal" data-target="#addModel"><i
                            class="fas fa-plus-circle mr-1"></i>Add Training</a>
                    <!-- Modal -->
                    <div class="modal" id="addModel" tabindex="-1" role="dialog" aria-labelledby="catModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Training</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms_block" method="post" action="{{ route('admin.training.store') }}">
                                        @csrf
                                        <div class="form-group smalls">
                                            <label>Title</label>
                                            <input name="title" type="text" class="form-control"
                                                placeholder="Training Title" value="{{ old('title') }}">
                                        </div>
                                        <div class="row">
                                            <div class="form-group smalls col-md-6">
                                                <label>Category</label>
                                                <select name="category_id" class="form-control">
                                                    <option value="" selected disabled>Select</option>
                                                    @foreach ($categories as $category)
                                                        <option {{ old('category_id') == $category->id ? 'selected' : '' }}
                                                            value="{{ $category->id }}">{{ $category->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group smalls col-md-6">
                                                <label>Price</label>
                                                <input name="price" type="number" value="{{ old('price') }}"
                                                    min="0" class="form-control" placeholder="Training Price">
                                            </div>
                                        </div>
                                        <div class="form-group smalls">
                                            <label>Instructor</label>
                                            <select name="user_id" class="form-control">
                                                <option value="" selected disabled>Select</option>
                                                @foreach ($instructors as $instructor)
                                                    <option {{ old('user_id') == $instructor->id ? 'selected' : '' }}
                                                        value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group smalls">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
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
                            <table class="table dash_list" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
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
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td class="font-weight-bold">{{ $item->title }}</td>
                                            <td>{{ $item->category->title }}</td>
                                            <td>{{ $item->price }} $ </td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>
                                                @if ($item->status == 'active')
                                                    <span class="badge bg-info">Active</span>
                                                @else
                                                    <span class="badge bg-primary">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.training.show',$item->id) }}" class="btn btn-info"><i class="fas fa-eye mr-0"></i></a>
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#editModel{{ $item->id }}"><i class="fas fa-edit mr-0"></i></button>



                                                <form action="{{ route('admin.training.destroy', $item->id) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger"
                                                        onclick="return confirm('Are you Sure to Delete ?')"><i class="fas fa-trash mr-0"></i></button>
                                                </form>


                                                <div class="modal" id="editModel{{ $item->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="catModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Training</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true"><i
                                                                            class="fas fa-times-circle"></i></span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="forms_block" method="post"
                                                                    action="{{ route('admin.training.update', $item->id) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group smalls">
                                                                        <label>Title</label>
                                                                        <input name="title" type="text" class="form-control" value="{{ $item->title }}">
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group smalls col-md-6">
                                                                            <label>Category</label>
                                                                            <select name="category_id"
                                                                                class="form-control">
                                                                                <option value="" selected disabled>
                                                                                    Select</option>
                                                                                @foreach ($categories as $category)
                                                                                    <option
                                                                                        {{ $item->category_id == $category->id ? 'selected' : '' }}
                                                                                        value="{{ $category->id }}">
                                                                                        {{ $category->title }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group smalls col-md-6">
                                                                            <label>Price</label>
                                                                            <input name="price" type="number"
                                                                                value="{{ $item->price }}"
                                                                                min="0" class="form-control"
                                                                                placeholder="Training Price">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group smalls">
                                                                        <label>Instructor</label>
                                                                        <select name="user_id" class="form-control">
                                                                            <option value="" selected disabled>Select
                                                                            </option>
                                                                            @foreach ($instructors as $instructor)
                                                                                <option
                                                                                    {{ $item->user_id == $instructor->id ? 'selected' : '' }}
                                                                                    value="{{ $instructor->id }}">
                                                                                    {{ $instructor->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group smalls">
                                                                        <label>Description</label>
                                                                        <textarea name="description" class="form-control" placeholder="Description">{{ $item->description }}</textarea>
                                                                    </div>

                                                                    <div class="form-group smalls">
                                                                        <button
                                                                            class="btn full-width theme-bg text-white">Submit</button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
@section('js')
    <script src="{{ asset('assets/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(function() {
            $("#datatable").DataTable({
                scrollX: true,
            });
        });
    </script>
@endsection

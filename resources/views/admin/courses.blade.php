@extends('admin.layouts.app')
@section('title', 'Courses')
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
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
                <div class="elkios">
                    <a href="#" class="add_new_btn" data-toggle="modal" data-target="#addModel"><i
                            class="fas fa-plus-circle mr-1"></i>Add Course</a>
                    <!-- Modal -->
                    <div class="modal" id="addModel" tabindex="-1" role="dialog" aria-labelledby="catModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Course</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms_block" method="post" action="{{ route('admin.course.store') }}">
                                        @csrf
                                        <div class="form-group smalls">
                                            <label>Course Name</label>
                                            <input name="title" type="text" class="form-control"
                                                placeholder="Course Name" value="{{ old('title') }}">
                                        </div>
                                        <div class="row">
                                            <div class="form-group smalls col-md-6">
                                                <label>School</label>
                                                <select name="school_id" class="form-control">
                                                    <option value="" selected disabled>Select</option>
                                                    @foreach ($schools as $school)
                                                        <option {{ old('school_id') == $school->id ? 'selected' : '' }}
                                                            value="{{ $school->id }}">{{ $school->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group smalls col-md-6">
                                                <label>Program</label>
                                                <select name="program_id" class="form-control">
                                                    <option value="" selected disabled>Select</option>
                                                    @foreach ($programs as $program)
                                                        <option {{ old('program_id') == $program->id ? 'selected' : '' }}
                                                            value="{{ $program->id }}">{{ $program->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group smalls">
                                            <label>Price</label>
                                            <input name="price" type="number" value="{{ old('price') }}" min="0"
                                                class="form-control" placeholder="Course Price">
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
                            <table id="datatable" class="table dash_list">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">School</th>
                                        <th scope="col">Program</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td class="font-weight-bold">{{ $item->title }}</td>
                                            <td>{{ $item->school->title }}</td>
                                            <td>{{ $item->program->title }}</td>
                                            <td>{{ $item->price }} $ </td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="drp-select dropdown-menu">
                                                        <a class="dropdown-item" href="JavaScript:Void(0);" data-toggle="modal"
                                                        data-target="#editModel{{ $item->id }}">Edit</a>
                                                        <form action="{{ route('admin.course.destroy', $item->id) }}"
                                                            method="post" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                        <a class="dropdown-item" onclick="return confirm('Are you Sure to Delete ?')" href="JavaScript:Void(0);">Delete</a>
                                                    </form>
                                                    </div>
                                                </div>
                                                <div class="modal" id="editModel{{ $item->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="catModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Program</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true"><i
                                                                            class="fas fa-times-circle"></i></span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="forms_block" method="post"
                                                                    action="{{ route('admin.course.update', $item->id) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group smalls">
                                                                        <label>Course Name</label>
                                                                        <input name="title" type="text"
                                                                            class="form-control"
                                                                            value="{{ $item->title }}">
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group smalls col-md-6">
                                                                            <label>School</label>
                                                                            <select name="school_id" class="form-control">
                                                                                <option value="" selected disabled>
                                                                                    Select</option>
                                                                                @foreach ($schools as $school)
                                                                                    <option
                                                                                        {{ $item->school_id == $school->id ? 'selected' : '' }}
                                                                                        value="{{ $school->id }}">
                                                                                        {{ $school->title }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group smalls col-md-6">
                                                                            <label>Program</label>
                                                                            <select name="program_id"
                                                                                class="form-control">
                                                                                <option value="" selected disabled>
                                                                                    Select</option>
                                                                                @foreach ($programs as $program)
                                                                                    <option
                                                                                        {{ $item->program_id == $program->id ? 'selected' : '' }}
                                                                                        value="{{ $program->id }}">
                                                                                        {{ $program->title }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group smalls">
                                                                        <label>Price</label>
                                                                        <input name="price" type="number"
                                                                            value="{{ $item->price }}" min="0"
                                                                            class="form-control"
                                                                            placeholder="Course Price">
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
                                            </td>
                                            {{-- <td>

                                                <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#editModel{{ $item->id }}">Edit</button>
                                                <!-- Modal -->
                                                <form action="{{ route('admin.course.destroy', $item->id) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger"
                                                        onclick="return confirm('Are you Sure to Delete ?')">Delete</button>
                                                </form>
                                            </td> --}}
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
    $(function () {
        $("#datatable").DataTable({
            scrollX: true,
        });
    });
</script>
@endsection

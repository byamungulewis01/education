@extends('admin.layouts.app')
@section('title', 'Users')
@section('body')
    <!-- Row -->
    <div class="row justify-content-between">
        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
            <div class="dashboard_wrap d-flex align-items-center justify-content-between">
                <div class="arion">
                    <nav class="transparent">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Admins</li>
                        </ol>
                    </nav>
                </div>
                <div class="elkios">
                    <a href="#" class="add_new_btn" data-toggle="modal" data-target="#addModel"><i
                            class="fas fa-plus-circle mr-1"></i>Add User</a>
                    <!-- Modal -->
                    <div class="modal" id="addModel" tabindex="-1" role="dialog" aria-labelledby="catModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms_block" method="post" action="{{ route('admin.user.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group smalls">
                                            <label>User Name</label>
                                            <input name="name" type="text" value="{{ old('name') }}"
                                                class="form-control" placeholder="User Name">
                                        </div>
                                        <div class="form-group smalls">
                                            <label>User Email</label>
                                            <input name="email" type="email" value="{{ old('email') }}"
                                                class="form-control" placeholder="User Email">
                                        </div>
                                        <div class="form-group smalls">
                                            <label>User Phone</label>
                                            <input name="phone" type="text" value="{{ old('phone') }}"
                                                class="form-control" placeholder="User Phone">
                                        </div>
                                        <div class="form-group smalls">
                                            <label>Image</label>
                                            <input name="image" type="file" class="form-control">
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
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td><img src="{{ asset('images/users/' . $item->imageName) }}"
                                                    class="img-fluid circle" width="40" alt=""></td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>
                                                @if ($item->status == 'active')
                                                    <span class="badge bg-info">Active</span>
                                                @else
                                                    <span class="badge bg-primary">Inactive</span>
                                                @endif
                                            </td>

                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-action" href="#" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="drp-select dropdown-menu">
                                                        <button class="dropdown-item" data-toggle="modal"
                                                            data-target="#editModel{{ $item->id }}">Edit</button>
                                                        <form action="{{ route('admin.user.destroy', $item->id) }}"
                                                            method="post" class="d-inline">
                                                            <div>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item"
                                                                    onclick="return confirm('Are you Sure to Delete ?')">Delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal" id="editModel{{ $item->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="catModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit User</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true"><i
                                                                            class="fas fa-times-circle"></i></span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="forms_block" method="post"
                                                                    action="{{ route('admin.user.update', $item->id) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group smalls">
                                                                        <label>User Name</label>
                                                                        <input name="name" type="text"
                                                                            value="{{ $item->name }}"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="form-group smalls">
                                                                        <label>User Email</label>
                                                                        <input name="email" type="email"
                                                                            value="{{ $item->email }}"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="form-group smalls">
                                                                        <label>User Phone</label>
                                                                        <input name="phone" type="text"
                                                                            value="{{ $item->phone }}"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group smalls col-md-7">
                                                                            <label>Image</label>
                                                                            <input name="image" type="file"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="form-group smalls col-md-5">
                                                                            <label>Status</label>
                                                                            <select name="status" class="form-control">
                                                                                <option
                                                                                    {{ $item->status == 'active' ? 'selected' : '' }}
                                                                                    value="active">Active</option>
                                                                                <option
                                                                                    {{ $item->status == 'inactive' ? 'selected' : '' }}
                                                                                    value="inactive">Inactive</option>
                                                                            </select>
                                                                        </div>
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

@extends('layouts.app')
@section('title', 'Clients')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-0">Clients List
                    <a class="btn btn-dark text-white pull-left float-end" data-bs-toggle="modal"
                        data-bs-target="#addModal">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                        <span class="d-none d-sm-inline-block">Client</span></a>
                </h5>
                <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="w-px-400 mx-auto">
                                    <!-- /Logo -->
                                    <h3 class="mb-1">Welcome to Vuexy! 👋</h3>
                                    @if (session('error'))
                                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                                            <span class="alert-icon text-danger me-2">
                                                <i class="ti ti-ban ti-xs"></i>
                                            </span>
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                                            <span class="alert-icon text-danger me-2">
                                                <i class="ti ti-ban ti-xs"></i>
                                            </span>
                                            @foreach ($errors->all() as $error)
                                                {{ $error }}
                                            @endforeach
                                        </div>
                                    @endif
                                    <form id="formAuthentication" class="mb-3" action="{{ route('admin.client.store') }}"
                                        method="POST">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" value="{{ old('name') }}"
                                                id="name" name="name" placeholder="Enter your name" autofocus>
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" class="form-control" value="{{ old('phone') }}"
                                                id="phone" name="phone" placeholder="Enter your phone" autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="modalAddressCountry">Country</label>
                                            <select id="modalAddressCountry" name="country" class="select2 form-select"
                                                data-allow-clear="true">
                                                <option value="">Select</option>
                                                @foreach ($countries as $country)
                                                    <option {{ old('country') == $country->name ? 'selected' : '' }}
                                                        value="{{ $country->name }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" class="form-control" value="{{ old('email') }}"
                                                id="email" name="email" placeholder="Enter your email" autofocus>
                                        </div>
                                        <div class="mb-3 form-password-toggle">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label" for="password">Password</label>
                                            </div>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password" class="form-control" name="password"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="password" />
                                                <span class="input-group-text cursor-pointer"><i
                                                        class="ti ti-eye-off"></i></span>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Country</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->country }}</td>
                                <td>
                                    @if ($item->status == 'active')
                                        <span class="badge bg-primary">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>

                                    <a href="javascript:;" class="text-body" data-bs-toggle="modal"
                                        data-bs-target="#editModel{{ $item->id }}"><i
                                            class="ti ti-edit ti-sm mx-1"></i></a>
                                    <div class="modal fade" id="editModel{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    <div class="w-px-400 mx-auto">
                                                        <!-- /Logo -->
                                                        <h3 class="mb-1">Welcome to Vuexy! 👋</h3>
                                                        @if (session('error'))
                                                            <div class="alert alert-danger d-flex align-items-center"
                                                                role="alert">
                                                                <span class="alert-icon text-danger me-2">
                                                                    <i class="ti ti-ban ti-xs"></i>
                                                                </span>
                                                                {{ session('error') }}
                                                            </div>
                                                        @endif
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger d-flex align-items-center"
                                                                role="alert">
                                                                <span class="alert-icon text-danger me-2">
                                                                    <i class="ti ti-ban ti-xs"></i>
                                                                </span>
                                                                @foreach ($errors->all() as $error)
                                                                    {{ $error }}
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                        <form id="formAuthentication" class="mb-3"
                                                            action="{{ route('admin.client.update', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Full Name</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" value="{{ $item->name }}" autofocus>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="phone" class="form-label">Phone</label>
                                                                <input type="text" class="form-control" id="phone"
                                                                    name="phone" value="{{ $item->phone }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="modalAddressCountry">Country</label>
                                                                <select id="modalAddressCountry" name="country"
                                                                    class="select2 form-select" data-allow-clear="true">
                                                                    <option value="">Select</option>
                                                                    @foreach ($countries as $country)
                                                                        <option
                                                                            {{ $item->country == $country->name ? 'selected' : '' }}
                                                                            value="{{ $country->name }}">
                                                                            {{ $country->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="text" class="form-control" id="email"
                                                                    name="email" value="{{ $item->email }}">
                                                            </div>
                                                            <div class="mb-3 form-password-toggle">
                                                                <div class="d-flex justify-content-between">
                                                                    <label class="form-label"
                                                                        for="password">Password</label>
                                                                </div>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="password" id="password"
                                                                        class="form-control" name="password"
                                                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                                        aria-describedby="password" />
                                                                    <span class="input-group-text cursor-pointer"><i
                                                                            class="ti ti-eye-off"></i></span>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary">
                                                                Save
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <form id="deleteForm_{{ $item->id }}"
                                        action="{{ route('admin.client.destroy', $item->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="javascript:;" class="text-body delete-record {{ $item->id }}"
                                            data-form-id="deleteForm_{{ $item->id }}">
                                            <i class="ti ti-trash ti-sm mx-1"></i>
                                        </a>
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
    <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({});
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Find all elements with class 'delete-record'
            var deleteLinks = document.getElementsByClassName('delete-record');

            // Loop through each delete link
            for (var i = 0; i < deleteLinks.length; i++) {
                // Add click event listener to each delete link
                deleteLinks[i].addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent the default link behavior

                    // Get the form id from the 'data-form-id' attribute
                    var formId = this.getAttribute('data-form-id');

                    // Find the form with the specified id
                    var form = document.getElementById(formId);

                    // Confirm deletion
                    var confirmDelete = confirm('Are you sure to delete?');

                    // If confirmed, submit the form
                    if (confirmDelete) {
                        form.submit();
                    }
                });
            }
        });
    </script>
@endsection

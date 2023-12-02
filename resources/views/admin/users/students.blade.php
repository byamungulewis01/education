@extends('layouts.app')
@section('title', 'Students')
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
                <h5 class="card-title mb-0">Students List
                    <a class="btn btn-dark text-white pull-left float-end" data-bs-toggle="modal"
                        data-bs-target="#addModal">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                        <span class="d-none d-sm-inline-block">Student</span></a>
                </h5>
                <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
                        <div class="modal-content p-3 p-md-5">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="text-center mb-4">
                                    <h3 class="address-title mb-2">Add New Address</h3>
                                    <p class="text-muted address-subtitle">Add new address for express delivery</p>
                                </div>
                                <form id="addNewAddressForm" method="post" class="row g-3"
                                    action="{{ route('admin.student.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalAddressFirstName">First Name</label>
                                        <input type="text" name="fname" id="modalAddressFirstName"
                                            value="{{ old('fname') }}" class="form-control" placeholder="First Name"
                                            required />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalAddressLastName">Last Name</label>
                                        <input type="text" name="lname" id="modalAddressLastName"
                                            value="{{ old('lname') }}" class="form-control" placeholder="Last Name"
                                            required />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="modalEmailAddress">Email Address </label>
                                        <input type="text" name="email" id="modalEmailAddress"
                                            value="{{ old('email') }}" class="form-control" placeholder="email@domain.com"
                                            required />
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label" for="modalAddressCountry">Country</label>
                                        <select id="modalAddressCountry" name="country" class="select2 form-select"
                                            data-allow-clear="true">
                                            <option value="">Select</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="modalPhone">Phone Number</label>
                                        <input type="text" name="phone" id="modalPhone" value="{{ old('phone') }}"
                                            class="form-control" placeholder="Phone Number" required />
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalGender">Gender</label>
                                        <select name="gender" class="form-select" id="modalGender" required>
                                            <option {{ old('gender') == 'male' ? 'selected' : '' }} value="male">Male
                                            </option>
                                            <option {{ old('gender') == 'female' ? 'selected' : '' }} value="female">
                                                Female</option>
                                        </select>
                                        @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalDoB">Date Of Bith</label>
                                        <input type="date" name="dob" id="modalDoB" value="{{ old('dob') }}"
                                            class="form-control" max="{{ now()->toDateString() }}" required />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalPassport">ID/Passport Doc</label>
                                        <input type="file" id="modalPassport" accept=".pdf,.png,.jpg"
                                            name="identity_doc" class="form-control" required />
                                        @error('identity_doc')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalAcademic">Academic Doc</label>
                                        <input type="file" id="modalAcademic" accept=".pdf,.png,.jpg"
                                            name="academic_doc" class="form-control" required />
                                        @error('academic_doc')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12 text-center">
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
            <div class="card-datatable table-responsive">
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Reg Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Required Docs</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->regnumber }}</td>
                                <td>{{ $item->fname }} {{ $item->lname }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    <a class="text-primary" target="blank"
                                        href="{{ asset('files/' . $item->identity_doc_path) }}">ID/Passpord</a> |
                                    <a class="text-primary" target="blank"
                                        href="{{ asset('files/' . $item->academic_doc_path) }}">Academic</a>
                                </td>
                                <td>
                                    @if ($item->status == 'pending')
                                        <span class="badge bg-primary">Pending</span>
                                    @elseif($item->status == 'approved')
                                        <span class="badge bg-success">Approved</span>
                                    @else
                                        <span class="badge bg-danger">Rejected</span>
                                    @endif
                                </td>

                                <td>

                                    <a href="javascript:;" class="text-body" data-bs-toggle="modal"
                                        data-bs-target="#editModel{{ $item->id }}"><i
                                            class="ti ti-edit ti-sm mx-1"></i></a>

                                    <div class="modal fade" id="editModel{{ $item->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
                                            <div class="modal-content p-3 p-md-5">
                                                <div class="modal-body">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    <div class="text-center mb-4">
                                                        <h3 class="address-title mb-2">Edit Student</h3>
                                                        <p class="text-muted address-subtitle">Add new address for express
                                                            delivery</p>
                                                    </div>
                                                    <form id="addNewAddressForm" method="post" class="row g-3"
                                                        action="{{ route('admin.student.update', $item->id) }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="col-6">
                                                            <label class="form-label" for="modalAddressFirstName">First
                                                                Name</label>
                                                            <input type="text" name="fname"
                                                                id="modalAddressFirstName" value="{{ $item->fname }}"
                                                                class="form-control" required />
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="form-label" for="modalAddressLastName">Last
                                                                Name</label>
                                                            <input type="text" name="lname"
                                                                id="modalAddressLastName" value="{{ $item->lname }}"
                                                                class="form-control" required />
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label" for="modalEmailAddress">Email
                                                                Address </label>
                                                            <input type="text" name="email" id="modalEmailAddress"
                                                                value="{{ $item->email }}" class="form-control"
                                                                required />
                                                            @error('email')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-6">
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
                                                        <div class="col-6">
                                                            <label class="form-label" for="modalPhone">Phone
                                                                Number</label>
                                                            <input type="text" name="phone" id="modalPhone"
                                                                value="{{ $item->phone }}" class="form-control"
                                                                placeholder="Phone Number" required />
                                                            @error('phone')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="form-label" for="modalGender">Gender</label>
                                                            <select name="gender" class="form-select" id="modalGender"
                                                                required>
                                                                <option {{ $item->gender == 'male' ? 'selected' : '' }}
                                                                    value="male">Male
                                                                </option>
                                                                <option {{ $item->gender == 'female' ? 'selected' : '' }}
                                                                    value="female">
                                                                    Female</option>
                                                            </select>
                                                            @error('gender')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="form-label" for="modalDoB">Date Of Bith</label>
                                                            <input type="date" name="dob" id="modalDoB"
                                                                class="form-control" value="{{ $item->dob }}" max="{{ now()->toDateString() }}"
                                                                required />
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="form-label" for="modalPassport">ID/Passport
                                                                Doc</label>
                                                            <input type="file" id="modalPassport"
                                                                accept=".pdf,.png,.jpg" name="identity_doc"
                                                                class="form-control" />
                                                            @error('identity_doc')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="form-label" for="modalAcademic">Academic
                                                                Doc</label>
                                                            <input type="file" id="modalAcademic"
                                                                accept=".pdf,.png,.jpg" name="academic_doc"
                                                                class="form-control"/>
                                                            @error('academic_doc')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-12 text-center">
                                                            <button type="submit"
                                                                class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                            <button type="reset" class="btn btn-label-secondary"
                                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <form id="deleteForm_{{ $item->id }}"
                                        action="{{ route('admin.student.destroy', $item->id) }}" method="post"
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

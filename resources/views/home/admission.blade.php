@extends('layouts.front')
@section('title', 'Admission')
@section('body')
    <!--SECTION START-->
    <section class="c-all h-quote">
        {{-- <div class="container"> --}}
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="all-title quote-title qu-new">
                <h2>Request an Admission TraIning In</h2>
                <p class="help-line">{{ $training->title }}</p>
                <p>{{ $training->description }}</p>

            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="n-form-com admiss-form">
                <div class="col s12">
                    <form id="addNewAddressForm" method="post" class="row g-3"
                        action="{{ route('register_auth', $training->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label class="form-label" for="modalAddressFirstName">First Name</label>
                            <input type="text" name="fname" id="modalAddressFirstName" value="{{ old('fname') }}"
                                class="form-control" placeholder="First Name" required />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="modalAddressLastName">Last Name</label>
                            <input type="text" name="lname" id="modalAddressLastName" value="{{ old('lname') }}"
                                class="form-control" placeholder="Last Name" required />
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="modalEmailAddress">Email Address </label>
                            <input type="text" name="email" id="modalEmailAddress" value="{{ old('email') }}"
                                class="form-control" placeholder="email@domain.com" required />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="modalPassword">Password </label>
                            <input type="password" id="modalPassword" name="password" class="form-control"
                                placeholder="*******" required />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="modalAddressCountry">Country</label>
                            <select id="modalAddressCountry" name="country" class="select2 form-select"
                                data-allow-clear="true">
                                <option value="">Select</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
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
                            <input type="file" id="modalPassport" accept=".pdf,.png,.jpg" name="identity_doc"
                                class="form-control" required />
                            @error('identity_doc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalAcademic">Academic Doc</label>
                            <input type="file" id="modalAcademic" accept=".pdf,.png,.jpg" name="academic_doc"
                                class="form-control" required />
                            @error('academic_doc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 text-center" style="padding-top: 40px;">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </section>
    <!--SECTION END-->

@endsection

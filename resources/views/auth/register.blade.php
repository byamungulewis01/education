@extends('home.app')
@section('title', 'Register')
@section('body')
    <section>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
                    <form method="post" action="{{ route('register_auth') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="crs_log_wrap">
                            <div class="crs_log__caption">
                                <div class="rcs_log_124">
                                    <div class="Lpo09">
                                        <h4>Create Your Account</h4>
                                    </div>
                                    @if (session('success'))
                                        <div class="alert alert-success mb-2"><strong>Success</strong>
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger mb-2"><strong>Danger</strong>
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <div class="form-group row mb-0">
                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group smalls">
                                                <label>First Name</label>
                                                <input type="text" name="fname" value="{{ old('fname') }}"
                                                    class="form-control" placeholder="First Name" required />
                                            </div>
                                            @error('fname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group smalls">
                                                <label>Last Name</label>
                                                <input type="text" name="lname" value="{{ old('lname') }}"
                                                    class="form-control" placeholder="Last Name" required />
                                            </div>
                                            @error('lname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <label>Gender</label>
                                            <select name="gender" class="form-select" required>
                                                <option {{ old('gender') == 'male' ? 'selected' : '' }} value="male">Male
                                                </option>
                                                <option {{ old('gender') == 'female' ? 'selected' : '' }} value="female">
                                                    Female</option>
                                            </select>
                                            @error('gender')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group smalls">
                                                <label>Date Of Birth</label>
                                                <input type="date" name="dob" value="{{ old('dob') }}"
                                                    class="form-control" max="{{ now()->toDateString() }}" required />
                                            </div>
                                            @error('date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group smalls">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}"
                                            class="form-control" placeholder="Phone Number" required />
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group smalls">
                                        <label>Email</label>
                                        <input type="text" name="email" value="{{ old('email') }}"
                                            class="form-control" placeholder="email@domain.com" required />
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group smalls">

                                                <label>ID / Passport Doc</label>
                                                <input type="file" accept=".pdf,.png,.jpg" name="identity_doc"
                                                    class="form-control" required />
                                                @error('identity_doc')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group smalls">
                                                <label>Academic Doc</label>
                                                <input type="file" accept=".pdf,.png,.jpg" name="academic_doc"
                                                    class="form-control" required />
                                                @error('academic_doc')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            @error('date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group smalls">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="*******"
                                            required />
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn full-width btn-sm theme-bg text-white">Sign
                                            Up</button>
                                    </div>
                                </div>
                            </div>
                            <div class="crs_log__footer d-flex justify-content-between">
                                <div class="fhg_45">
                                    <p class="musrt">Already have account? <a href="{{ route('login') }}"
                                            class="theme-cl">Login</a></p>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

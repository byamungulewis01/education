@extends('layouts.student')
@section('title', 'My Profile')
@section('body')
    <div class="container">
        <h4 class="dashboard-title">Settings</h4>

        <!-- Dashboard Settings Start -->
        <div class="dashboard-settings">

            <!-- Dashboard Tabs Start -->
            <div class="dashboard-tabs-menu">
                <ul>
                    <li><a @if (Request::routeIs('student.settings')) class="active" @endif href="{{ route('student.settings') }}">Profile</a></li>
                    <li><a @if (Request::routeIs('student.reset-password')) class="active" @endif href="{{ route('student.reset-password') }}">Reset Password</a></li>
                </ul>
            </div>
            <!-- Dashboard Tabs End -->

            <form method="post" action="{{ route('student.changeProfile') }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row gy-6">
                    <div class="col-lg-6">

                        <!-- Dashboard Settings Info Start -->
                        <div class="dashboard-content-box">

                            <h4 class="dashboard-content-box__title">Contact information</h4>
                            <p>Provide your details below to create your account profile</p>

                            <div class="row gy-2">
                                <div class="col-md-6">
                                    <label class="form-label">First Name <span class="text-danger">*</span></label>
                                    <input type="text" name="fname" value="{{ old('fname', $student->fname) }}"
                                        class="form-control" placeholder="First Name" required />
                                    @error('fname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">

                                    <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" name="lname" value="{{ old('lname', $student->lname) }}"
                                        class="form-control" placeholder="Last Name" required />
                                    @error('lname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Your valid email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" value="{{ old('email', $student->email) }}"
                                        class="form-control" placeholder="email@domain.com" required />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Gender <span class="text-danger">*</span></label>
                                    <div class="form-check mt-4">
                                        <input class="form-check-input"
                                            {{ old('gender', $student->gender) == 'male' ? 'checked' : '' }} type="radio"
                                            name="gender" id="male" value="male">
                                        <label class="form-check-label" for="male">Male</label> &nbsp;

                                        <input class="form-check-input"
                                            {{ old('gender', $student->gender) == 'female' ? 'checked' : '' }} type="radio"
                                            name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Date Of Birth</label>
                                    <input type="date" name="dob" id="modalDoB"
                                        value="{{ old('dob', $student->dob) }}" class="form-control"
                                        max="{{ now()->toDateString() }}" required />
                                    @error('dob')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">

                                    <label class="form-label">Country</label>
                                    <select name="country" class="form-select" required>
                                        <option value="">Select</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('country', $student->country) == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" name="phone" value="{{ old('phone', $student->phone) }}"
                                        class="form-control" placeholder="Phone Number" required />
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>


                            </div>

                        </div>
                        <!-- Dashboard Settings Info End -->

                    </div>
                    <div class="col-lg-6">

                        <!-- Dashboard Settings Info Start -->
                        <div class="dashboard-content-box">

                            <h4 class="dashboard-content-box__title">Photo</h4>
                            <p>Upload your profile photo.</p>

                            <div id="dashboard-profile-cover-photo-editor" class="dashboard-settings-profile">
                                <input name="image" id="dashboard-photo-dialogue-box"
                                    class="dashboard-settings-profile__input" type="file" accept=".png,.jpg,.jpeg" />

                                <div id="profile-photo" class="dashboard-settings-profile__photo"
                                    data-faslback="{{ asset('images/students/' . $student->imageName) }}"
                                    style="background-image:url({{ asset('images/students/' . $student->imageName) }}">
                                    <div class="overlay">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                </div>
                                <div id="photo-meta-area" class="dashboard-settings-profile__photo-meta">
                                    <img src="{{ asset('frontend/images/info-icon.svg') }}" alt="icon" />
                                    <span>Profile Photo Size: <strong>200x200</strong> pixels,</span>

                                </div>

                                <div id="profile-photo-option" class="dashboard-settings-profile__photo-option">
                                    <span class="profile-photo-uploader"><i class="fas fa-upload"></i> Upload Photo</span>
                                    <span class="profile-photo-deleter"><i class="fas fa-trash-alt"></i> Delete</span>
                                </div>
                            </div>



                        </div>
                        <!-- Dashboard Settings Info End -->

                    </div>
                </div>

                <div class="dashboard-settings__btn">
                    <button type="submit" class="btn btn-primary btn-hover-secondary">Update Profile</button>
                </div>
            </form>

        </div>
        <!-- Dashboard Settings End -->
    </div>
@endsection

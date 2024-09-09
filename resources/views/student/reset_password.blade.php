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
                    <li><a @if (Request::routeIs('student.settings')) class="active" @endif
                            href="{{ route('student.settings') }}">Profile</a></li>
                    <li><a @if (Request::routeIs('student.reset-password')) class="active" @endif
                            href="{{ route('student.reset-password') }}">Reset Password</a></li>
                </ul>
            </div>
            <!-- Dashboard Tabs End -->

            <form method="post" action="{{ route('student.password.update') }}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-6">

                        <!-- Dashboard Settings Info Start -->
                        <div class="dashboard-content-box dashboard-settings__info">

                            <h4 class="dashboard-settings__title">Reset Password</h4>

                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <!-- Account Account details Start -->
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Current Password</label>
                                        <input type="password" class="form-control" name="current_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                                    </div>
                                    @error('current_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!-- Account Account details End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Account Account details Start -->
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">New Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                                    </div>
                                    <!-- Account Account details End -->
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <!-- Account Account details Start -->
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Confirm New Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                                    </div>
                                    <!-- Account Account details End -->
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <!-- Dashboard Settings Info End -->

                    </div>
                </div>

                <div class="dashboard-settings__btn">
                    <button type="submit" class="btn btn-primary btn-hover-secondary">Reset Password</button>
                </div>
            </form>

        </div>
        <!-- Dashboard Settings End -->
    </div>
@endsection

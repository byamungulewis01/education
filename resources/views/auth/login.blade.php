@extends('layouts.guest-auth')
@section('title', 'Login')
@section('body')
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 p-0">
        <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
            <img src="{{ asset('assets/img/illustrations/auth-login-illustration-light.png') }}" alt="auth-login-cover"
                class="img-fluid my-5 auth-illustration" data-app-light-img="illustrations/auth-login-illustration-light.png"
                data-app-dark-img="illustrations/auth-login-illustration-dark.png">

            <img src="{{ asset('assets/img/illustrations/bg-shape-image-light.png') }}" alt="auth-login-cover"
                class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png"
                data-app-dark-img="illustrations/bg-shape-image-dark.png">
        </div>
    </div>
    <!-- /Left Text -->
    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
        <div class="w-px-400 mx-auto">

            <!-- /Logo -->
            <h3 class="mb-1">Welcome to Vuexy! 👋</h3>
            <p class="mb-4">Please sign-in to your account and start the adventure</p>
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
            <form id="formAuthentication" class="mb-3" action="{{ route('login_auth') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email or Username</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email"
                        autofocus>
                </div>
                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Password</label>
                        <a href="#">
                            <small>Forgot Password?</small>
                        </a>
                    </div>
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control" name="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password" />
                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember-me">
                        <label class="form-check-label" for="remember-me">
                            Remember Me
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary d-grid w-100">
                    Sign in
                </button>
            </form>

            <p class="text-center">
                <span>New on our platform?</span>
                <a href="{{ route('register') }}">
                    <span>Create an account</span>
                </a>
            </p>


        </div>
    </div>
    <!-- /Login -->
@endsection

@extends('layouts.front')
@section('title', 'Home')
@section('body')
    <section class="section-py bg-body first-section-pt">
        <div class="container mt-2">
            <div class="card px-3">
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="card-img card-img-left" src="{{ asset('images/' . $consultancy->imageName) }}"
                                alt="Card image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $consultancy->title }}</h5>
                                <p class="card-text">{!! $consultancy->description !!}</p>
                                @if (auth()->guard('client')->check())
                                    <button data-bs-toggle="modal" data-bs-target="#consultancyApply"
                                        class="btn btn-outline-primary waves-effect">Apply</button>
                                    <div class="modal fade" id="consultancyApply" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    <form method="POST"
                                                        action="{{ route('client.consultancy_apply', $consultancy->id) }}">
                                                        @csrf
                                                        <div class="text-center mb-0">
                                                            <h3 class="mb-2">Consultancy Apply</h3>
                                                            <p class="text-muted">
                                                                You are about to apply {{ $consultancy->title }}
                                                                consultancy.
                                                            </p>
                                                        </div>

                                                        <div class="col-12 text-center">
                                                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Yes
                                                                Continue</button>
                                                            <button type="reset" class="btn btn-label-secondary"
                                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <button data-bs-toggle="modal" data-bs-target="#clientLoginModel"
                                        class="btn btn-outline-primary waves-effect">Apply</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="modal fade" id="clientLoginModel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                        <form id="formAuthentication" class="mb-3" action="{{ route('client_login_auth') }}"
                            method="POST">
                            @csrf

                            <div class="mb-3">
                                <input type="hidden" name="url" value="{{ url()->current() }}">
                                <label for="email" class="form-label">Email or Username</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" autofocus>
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
                            <a href="#" data-bs-toggle="modal" data-bs-target="#clientSignupModel">
                                <span>Create an account</span>
                            </a>
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="clientSignupModel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                        <form id="formAuthentication" class="mb-3" action="{{ route('client_register_auth') }}"
                            method="POST">
                            @csrf

                            <div class="mb-3">
                                <input type="hidden" name="url" value="{{ url()->current() }}">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your name" autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Enter your phone" autofocus>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="modalAddressCountry">Country</label>
                                <select id="modalAddressCountry" name="country" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value="">Select</option>
                                    @foreach (\App\Models\Country::orderBy('name')->get() as $country)
                                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" autofocus>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100">
                                Sign up
                            </button>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#clientLoginModel">
                                <span>Sign in instead</span>
                            </a>
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

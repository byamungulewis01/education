@extends('home.app')
@section('title', 'Login')
@section('body')
    <section>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-5 col-lg-8 col-md-12 col-sm-12">
                    <form method="post" action="{{ route('admin.login_auth') }}">
                        @csrf
                        <div class="crs_log_wrap">

                            <div class="crs_log__caption">

                                <div class="rcs_log_124">
                                    <div class="Lpo09">
                                        <h4>Login Your Account</h4>
                                    </div>
                                    @if (session('error'))
                                        <div class="alert alert-danger mb-2"><strong>Danger</strong>
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-with-icon">
                                            <input type="email" class="form-control" name="email" placeholder="email">
                                            <i class="ti-user"></i>
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-with-icon">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="*******">
                                            <i class="ti-unlock"></i>
                                        </div>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button class="btn full-width btn-sm theme-bg text-white">Sign Up</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection

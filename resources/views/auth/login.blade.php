@extends('home.app')
@section('title','Login')
@section('body')
<section>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-8 col-md-12 col-sm-12">
                <form>
                    <div class="crs_log_wrap">

                        <div class="crs_log__caption">

                            <div class="rcs_log_124">
                                <div class="Lpo09"><h4>Login Your Account</h4></div>
                                <div class="form-group">
                                    <label>User Name</label>
                                    <div class="input-with-icon">
                                        <input type="text" class="form-control" placeholder="User or email">
                                        <i class="ti-user"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-with-icon">
                                        <input type="password" class="form-control" placeholder="*******">
                                        <i class="ti-unlock"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="button" class="btn full-width btn-sm theme-bg text-white">Sign Up</button>
                                </div>
                            </div>
                        </div>
                        <div class="crs_log__footer d-flex justify-content-between">
                            <div class="fhg_45"><p class="musrt">Already have account? <a href="login.html" class="theme-cl">Login</a></p></div>
                            <div class="fhg_45"><p class="musrt"><a href="forgot.html" class="text-danger">Forgot Password?</a></p></div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection

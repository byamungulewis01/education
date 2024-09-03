@extends('layouts.front')
@section('title', 'My Profile')
@section('body')
    <!--SECTION START-->
    <section>
        @include('student.navbar')
        <div class="stu-db">
            <div class="container pg-inn">
                @include('student.sidebar')

                <div class="col-md-9">
                    <div class="udb">

                        <div class="udb-sec udb-cour-stat">
                            <h4>Profile</h4>
                            <div class="col s12">
                                <form method="post" action="{{ route('student.changeProfile') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">First Name:</label>
                                        <div class="col-sm-9 input-field">
                                            <input name="fname" type="text" value="{{ auth()->guard('student')->user()->fname }}" class="validate" required="">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Last Name:</label>
                                        <div class="col-sm-9 input-field">
                                            <input name="lname" type="text" value="{{ auth()->guard('student')->user()->lname }}" class="validate" required="">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Email:</label>
                                        <div class="col-sm-9 input-field">
                                            <input name="email" type="text" value="{{ auth()->guard('student')->user()->email }}"class="validate" required="">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Phone:</label>
                                        <div class="col-sm-9 input-field">
                                            <input name="phone" type="text"  value="{{ auth()->guard('student')->user()->phone }}" class="validate" required="">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Profile Image:</label>
                                        <div class="col-sm-9 input-field">
                                            <input type="file" name="image_file" class="validate">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3"></label>
                                        <div class="col-sm-9 input-field">
                                            <button type="submit"
                                                class="btn btn-primary me-2 waves-effect waves-light">Save
                                                changes</button>
                                        </div>

                                    </div>
                                    <div class="row"></div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection

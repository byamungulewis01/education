@extends('layouts.app')
@section('title', 'Unathorized Access')
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="text-center">

                            {{-- <img src="{{ asset('assets/img/404.png') }}" class="img-fluid" alt=""> --}}
                            <h3>You are not authorized! </h3>
                            <p>You do not have permission to view this page using the credentials that you have provided while login.
                                Please contact your site administrator.</p>
                            <a class="btn btn-dark" href="javascript:history.back()">Back</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

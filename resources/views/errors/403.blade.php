@extends('home.app')
@section('title','Page not found')
@section('body')
    <section class="error-wrap">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-10">
                    <div class="text-center">

                        {{-- <img src="{{ asset('assets/img/404.png') }}" class="img-fluid" alt=""> --}}
                        <h3>You don't have permission </h3>
                        <p>Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet
                            ullamcorper phasellus semper</p>
                        <a class="btn theme-bg text-white btn-md" href="javascript:history.back()">Back To Home</a>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

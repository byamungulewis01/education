@extends('layouts.front')
@section('title', 'About Us')
@section('body')
    <!-- POPULAR COURSES -->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Popular <span>Courses</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec
                        pharetra augue.</p>
                </div>
            </div>
            <x-frontend.trainings  limits=100/>
        </div>
    </section>

@endsection

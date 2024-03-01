@extends('layouts.front')
@section('title', 'Consultance')
@section('body')
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="con-title">
                    <h2>Consultancy <span>Services</span></h2>
                    <p>Consultants are typically specialists in their respective fields and are hired to offer insights,
                        strategies, and recommendations to help clients improve performance, solve problems, or
                        achieve specific goals.</p>
                </div>
            </div>
            <x-frontend.consultance  limits=100 chunking=10/>


        </div>
    </section>

@endsection

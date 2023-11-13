@extends('home.app')
@section('title', 'Consultance')
@section('body')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title bg-cover" style="background:url({{ asset('assets/img/banner-3.jpg') }})no-repeat;"
        data-overlay="8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title text-light">Consultance</h1>
                        <nav class="transparent">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-light">Home</a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">Consultance</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <x-services/>

@endsection

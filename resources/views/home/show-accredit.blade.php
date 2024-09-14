@extends('layouts.front')
@section('title', 'Accreditation')
@section('body')
    <!-- Page Banner Section Start -->
    <div class="page-banner">
        <div class="page-banner__wrapper">
            <div class="container">

                <!-- Page Breadcrumb Start -->
                <div class="page-breadcrumb">

                </div>
                <!-- Page Breadcrumb End -->

            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->


    <!-- Shop Start -->
    <div class="shop-section section-padding-01">
        <div class="container custom-container">

            <!-- Shop Single Product Start -->
            <div class="shop-single-product">
                <div class="row gy-6">
                    <div class="col-md-8">

                        <!-- Shop Single Product Content Start -->
                        <div class="shop-single-product__content">
                            <h1 class="shop-single-product__title">{{ $accreditation->title }}</h1>



                        </div>
                        <!-- Shop Single Product Content End -->

                    </div>
                </div>
                <div class="row">
                    <p>{!! $accreditation->description !!}</p>
                </div>
            </div>
            <!-- Shop Single Product End -->
        </div>
    </div>
    <!-- Shop End -->

@endsection

@extends('layouts.app')
@section('title', 'Dashboard')
@section('body')
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /Row -->

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Admin Revenue This Year</h4>
                </div>
                <div class="card-body">
                    <div class="chart" id="extra-area-chart" style="height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>

  
@endsection

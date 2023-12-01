@extends('layouts.front')
@section('title', 'My Consultancy')
@section('body')
    <!-- Fun facts: Start -->
    <section class="section-py landing-fun-facts mt-3">
        <div class="container">
            <div class="card bg-light">
                <div class="card-header border-bottom">
                    <h5 class="card-title mb-0">Consultancy List

                    </h5>
                </div>

                <div class="card-datatable table-responsive">
                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th scope="col">Consultancy</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Fun facts: End -->
@endsection

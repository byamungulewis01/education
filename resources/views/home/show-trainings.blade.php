@extends('home.app')
@section('title', 'Coureses')
@section('body')
    <!-- ============================ Page Title Start================================== -->
    <div class="ed_detail_head bg-cover" style="background:#f4f4f4 url({{ asset('assets/img/banner-3.jpg') }});"
        data-overlay="8">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-7 col-md-7">
                    <div class="ed_detail_wrap light">

                        <div class="ed_header_caption">
                            <h2 class="ed_title">{{ $category->title }}</h2>
                            <ul>
                                <li><i class="ti-calendar"></i>10 - 20 weeks</li>
                                <li><i class="ti-control-forward"></i>102 Lectures</li>
                                <li><i class="ti-user"></i>502 Student Enrolled</li>
                            </ul>
                        </div>
                        <div class="ed_header_short">
                            <p>{{ $category->description }}</p>
                        </div>

                        <div class="ed_rate_info">
                            <div class="star_info">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="review_counter">
                                <strong class="high">4.7</strong> 3572 Reviews
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Course Detail ================================== -->
    <section class="gray pt-3">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-8 col-md-12 order-lg-first">
                    {{-- <div class="card">
                        <div class="card-body"> --}}
                    <div class="row justify-content-start">
                        @foreach ($trainings as $training)
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="crs_grid shadow_none brd">

                                    <div class="crs_grid_caption">

                                        <div class="crs_title">
                                            <h4><a href="{{ route('show', encrypt($training->id)) }}" class="crs_title_link">{{ $training->title }}</a>
                                            </h4>
                                        </div>
                                        {{-- <div class="crs_cates cl_3"><span>AMATA</span></div> --}}

                                    </div>
                                    <div class="crs_grid_foot">
                                        <div class="crs_flex">
                                            <div class="crs_fl_first">
                                                <div class="crs_price">
                                                    @if ($training->price == 0)
                                                        <h5><span class="theme-cl">Free</span></h5>
                                                    @else
                                                        <h5><span class="currency">$</span><span
                                                                class="theme-cl">{{ $training->price }}</span></h5>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="crs_fl_last">
                                                <div class="crs_linkview">
                                                    <a href="{{ route('show', encrypt($training->id)) }}"
                                                        class="text-info">View More</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            {{ $trainings->links('vendor.pagination.default') }}

                        </div>
                    </div>
                    {{-- </div>
                    </div> --}}
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12  order-lg-last">

                    <!-- Course info -->
                    <div class="ed_view_box style_3 ovrlio stick_top">
                        <div class="page-sidebar p-0">
                            <a class="filter_links" data-toggle="collapse" href="#fltbox" role="button"
                                aria-expanded="false" aria-controls="fltbox">Open Advance Filter<i
                                    class="fa fa-sliders-h ml-2"></i></a>
                            <div class="collapse" id="fltbox">
                                <!-- Find New Property -->
                                <div class="sidebar-widgets p-4">
                                    <form method="post" action="{{ route('filter', encrypt($category->id)) }}">
                                     @csrf
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input required type="text" name="title" class="form-control"
                                                    placeholder="Search Your Cources">
                                                <i class="ti-search"></i>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h6>Price</h6>
                                            <ul class="no-ul-list mb-3">

                                                <li>
                                                    <input id="p1" required class="radio-custom" value="all" name="price"
                                                        type="radio">
                                                    <label for="p1" class="radio-custom-label">All<i
                                                            class="count">{{ $trainingsCount->count() }}</i></label>
                                                </li>
                                                <li>
                                                    <input id="p2" required class="radio-custom" value="free" name="price"
                                                        type="radio">
                                                    <label for="p2" class="radio-custom-label">Free<i
                                                            class="count">{{ $trainingsCount->where('price', 0)->count() }}</i></label>
                                                </li>
                                                <li>
                                                    <input id="p3" required class="radio-custom" value="paid" name="price"
                                                        type="radio">
                                                    <label for="p3" class="radio-custom-label">Paid<i
                                                            class="count">{{ \App\Models\Training::where('category_id', $category->id)->where('price', '>', 0)->count() }}</i></label>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 pt-4">
                                                <button class="btn theme-bg text-light rounded full-width">Apply Filter</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Course Detail ================================== -->

@endsection

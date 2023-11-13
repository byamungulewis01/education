<section class="min">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8">
                <div class="sec-heading center">
                    <h2>Consultancy & <span class="theme-cl">Services</span></h2>
                    <p>
                        Office provides the best services for our dear customers to benefit their business and get the
                        best results. Our quality management team focusing all the time on the customer satisfaction and
                        how to use the latest methodologies and tools to enhance our customers business and maintain the
                        relationship between their business and customers as well.
                    </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach ($consultances as $item)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="blg_grid_box">
                        <div class="blg_grid_thumb">
                            <a href="#"><img src="{{ asset('images/' . $item->imageName) }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                        <div class="blg_grid_caption">
                            {{-- <div class="blg_tag"><span>Marketing</span></div> --}}
                            <div class="blg_title">
                                <h4><a href="#">{{ $item->title }}</a></h4>
                            </div>
                            <div class="blg_desc">
                                <p>
                                    {!! Illuminate\Support\Str::limit(strip_tags($item->description), 135) !!}
                                    <a href="" class="text-info">read more</a>
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>

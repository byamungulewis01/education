<section id="landingFeatures" class="section-py landing-features">
    <div class="container">

        <h2 class="text-center mb-1">
            <span class="section-title">Consultance & Services</span>
        </h2>
        <p class="text-center mb-3 mb-md-5 pb-3">
            Office provides the best services for our dear customers to benefit their business and get the best results.
            Our quality management team focusing all the time on the customer satisfaction and how to use the latest
            methodologies and tools to enhance our customers business and maintain the relationship between their
            business and customers as well.
        </p>
        <div class="row">
            @foreach ($consultances as $item)
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('images/' . $item->imageName) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{!! Illuminate\Support\Str::limit(strip_tags($item->description), 135) !!}
                            </p>
                            <a href="{{ route('consultancy', $item->id) }}"
                                class="btn btn-outline-primary waves-effect">read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
</section>

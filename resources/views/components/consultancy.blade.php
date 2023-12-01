<section id="landingFeatures" class="section-py landing-features">
    <div class="container">
        <div class="text-center mb-3 pb-1">
            <span class="badge bg-label-primary">Useful Features</span>
        </div>
        <h3 class="text-center mb-1">
            <span class="section-title">Everything you need</span> to start your next project
        </h3>
        <p class="text-center mb-3 mb-md-5 pb-3">
            Not just a set of tools, the package includes ready-to-deploy conceptual application.
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
                        <a href="{{ route('consultancy',$item->id) }}" class="btn btn-outline-primary waves-effect">read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</section>

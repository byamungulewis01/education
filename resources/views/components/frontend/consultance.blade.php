{{-- <div class="row">
    @foreach ($consultancies->chunk($chunking) as $chunk)
        <div class="col-md-4">
            <div class="bot-gal h-blog ho-event">
                <div class="ho-event">
                    <ul>
                        @foreach ($chunk as $key => $item)
                            <li>
                                <div class="ho-ev-date"><span>{{ $key + 1 }}</span> </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>{{ $item->title }}</h4>
                                    </a>
                                    <div>{{ Illuminate\Support\Str::limit(strip_tags($item->description), 50) }}
                                    </div>
                                    <a href="{{ route('consultancyShow', $item->id) }}"
                                        style="color:rgb(191, 89, 5);">Read More</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endforeach

</div> --}}

<div class="row">
    <div class="cor about-sp">
        <div class="ed-rsear">
            <div class="ed-rsear-in">
                <ul>
                    @foreach ($consultancies->chunk($chunking) as $chunk)
                        @foreach ($chunk as $key => $item)
                            <li>
                                <div class="ed-rese-grid">
                                    <div class="ed-rsear-img ed-faci-full-top">
                                        <img src="{{ asset('images/' . $item->imageName) }}" alt="">
                                    </div>
                                    <div class="ed-rsear-dec ed-faci-full-bot">
                                        <h4><a href="facilities-detail.html">{{ $item->title }}</a></h4>
                                        <p>{{ Illuminate\Support\Str::limit(strip_tags($item->description), 115) }}</p>
                                        <a href="{{ route('consultancyShow', $item->id) }}" class="read-line-btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>

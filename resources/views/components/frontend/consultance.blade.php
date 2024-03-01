<div class="row">
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

</div>

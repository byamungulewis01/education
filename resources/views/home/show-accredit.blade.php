@extends('layouts.front')
@section('title', 'Accreditation')
@section('body')

<section class="c-all p-semi p-event">
    <div class="semi-inn">
        <div class="semi-com semi-left">
            <div class="all-title quote-title qu-new semi-text eve-reg-text">
                {{-- <p class="help-line">Join this for free!</p> <br> --}}

                <div class="semi-deta eve-deta">
                    <ul>
                        <li>{{ $accreditation->title }}</li>
                    </ul>
                </div>

                <p>{!! $accreditation->description !!}</p>

            </div>
        </div>
        <div class="semi-com semi-right">

        </div>
    </div>
</section>
@endsection

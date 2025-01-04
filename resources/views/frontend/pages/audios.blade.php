@extends('frontend.layouts.master')
@section('content')

<section id="audio">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="categories-head text-center">
                    <h1>রুকইয়াহ অডিও</h1>
                </div>
            </div>
        </div>
        <div class="row gapp mt-3 mb-5">
            @foreach($audios as $audio)
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="audio-inner">
                    <img src="{{ asset($audio->image) }}" class="w-100" alt="">
                    <h4 class="mt-3"> {{ $audio->title }}</h4>
                    <h6>{{ $audio->details }}</h6>
                    <span>{{ $audio->duration }}</span>
                    <audio controls="" aria-disabled="true">
                        <source src="{{ asset($audio->file) }}" type="audio/mpeg">
                    </audio>

                    @if($audio->isPaid)
                    <p style="background-color: red;">পেইড</p>
                    <a style="text-align: center;" href="{{ route('contact') }}">এখনই কিনুন</a>
                    @else
                    <p>বিনামূল্যে</p>
                    <a style="text-align: center;" href="{{ asset($audio->file) }}" download>ডাউনলোড</a>
                    @endif
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection
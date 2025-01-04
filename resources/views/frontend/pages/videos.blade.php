@extends('frontend.layouts.master')
@section('content')

<section id="audio">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="categories-head text-center">
                    <h1>রুকইয়াহ ভিডিও</h1>
                </div>
            </div>
        </div>
        <div class="row gapp mt-3 mb-5">
            @foreach($videos as $video)
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="audio-inner">
                    <video src="{{ asset($video->file) }}" class="w-100" controls=""></video>
                    <h4 class="mt-3">{{ $video->title }}</h4>
                    <h6>{{ $video->details }}</h6>
                    @if($video->isPaid)
                    <p style="background-color: red;">পেইড</p>
                    <a style="text-align: center;" href="{{ route('contact') }}">এখনই কিনুন</a>
                    @else
                    <p>বিনামূল্যে</p>
                    <a style="text-align: center;" href="{{ asset($video->file) }}" download>ডাউনলোড</a>
                    @endif
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>

@endsection
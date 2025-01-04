@extends('frontend.layouts.master')
@section('content')

<!-- blog details -->
<section id="blog-details">
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-6 m-auto">
                <div class="blog-details-inner">
                    <img src="{{ asset($blog->image) }}" class="w-100" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 m-auto">
                <div class="blog-text">
                    <h1>{{ $blog->subject }}</h1>
                    <p>{!! $blog->details !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog -->
<!-- latest post -->
<section id="latest-post">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="categories-head text-center">
                    <h1>সর্বশেষ কিছু পোস্ট</h1>
                </div>
            </div>
        </div>
        <div class="row gapp my-4">
            @foreach($latest_post as $latest)
            <div class="col-lg-3 col-6">
                <a href="{{ route('blog.details', $latest->id) }}">
                    <div class="post-img">
                        <img src="{{ asset($latest->image) }}" class="w-100" alt="">
                        <div class="overlay-post">
                            <h3>{{ $latest->title }}</h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</section>


<!-- latest post -->

@endsection
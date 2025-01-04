@extends('frontend.layouts.master')
@section('content')

<!-- blog -->
<section id="blog">
    <div class="container">
        <div class="row mt-4 mb-3">
            <div class="col-lg-12">
                <div class="categories-head text-center">
                    <h1>রুকইয়াহ শরইয়াহ ব্লগ</h1>
                </div>
            </div>
        </div>
        <div class="row gapp mb-5">
            @foreach($blogs as $blog)
            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('blog.details', $blog->id) }}">
                    <div class="blog-inner text-center">
                        <img src="{{ asset($blog->image) }}" class="w-100" alt="">
                        <h4 class="limited-lines">
                            {{ $blog->subject }}
                        </h4>
                        <p class="limited-text">
                            {!! $blog->details !!}
                        </p>
                        <a class="blog-btn" href="{{ route('blog.details', $blog->id) }}">View</a>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- blog -->

@endsection
@extends('frontend.layouts.master')
@section('content')

<!-- banner -->
<section id="banner">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            @foreach($banners as $banner)
            <div class="carousel-item banner-img active" data-bs-interval="10000">
                <img src="{{ asset($banner->image) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <h5>{!! $banner->title !!} </h5>
                    <p>{{ $banner->details }}</p>
                    <br>
                    <a href="{{ route('contact') }}">যোগাযোগ করুন</a>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<!-- banner -->

<!-- marquee -->
<section id="marquee">
    <marquee class="marquee">
        <div class="marquee-inner">
            <p>বৃষ্টিতে ভিজলেই হুট করে জ্বর চলে আসা জ্বীন যাদু বা প্রচন্ড বদনজরে আক্রান্ত হওয়ার অন্যতম লক্ষণ।</p>
            <p>বৃষ্টিতে ভিজলেই হুট করে জ্বর চলে আসা জ্বীন যাদু বা প্রচন্ড বদনজরে আক্রান্ত হওয়ার অন্যতম লক্ষণ।</p>
        </div>
    </marquee>
</section>

<!-- marquee -->

<!-- categories -->
<section id="categories">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="categories-head text-center">
                    <h1>বিভাগ</h1>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="row gapp my-4">
                    <div class="col-lg-6 col-sm-6">
                        <a href="#">
                            <div class="categories-main">
                                <img src="{{ asset('frontend/images/c1.jpg') }}" class="w-100" alt="">
                                <div class="overlay">
                                    <h4>রুকইয়াহ শরইয়াহ ব্লগ</h4>
                                    <p>হিজামা ব্লগের লেখাগুলো পড়তে</p>
                                    <a class="click" href="blog.html">এখানে ক্লিক করুন</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a href="{{ route('audios') }}">
                            <div class="categories-main">
                                <img src="{{ asset('frontend/images/c2.jpg') }}" class="w-100" alt="">
                                <div class="overlay">
                                    <h4>রুকইয়াহ অডিও</h4>
                                    <p>রুকইয়াহ শারইয়ার অডিও ডাউনলোড করতে</p>
                                    <a class="click" href="{{ route('audios') }}">এখানে ক্লিক করুন</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a href="#">
                            <div class="categories-main">
                                <img src="{{ asset('frontend/images/c3.jpg') }}" class="w-100" alt="">
                                <div class="overlay">
                                    <h4>রুকইয়াহ ভিডিও</h4>
                                    <p>রুকইয়াহ ভিডিও</p>
                                    <a class="click" href="{{ route('videos') }}">এখানে ক্লিক করুন</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a href="#">
                            <div class="categories-main">
                                <img src="{{ asset('frontend/images/c4.jpg') }}" class="w-100" alt="">
                                <div class="overlay">
                                    <h4>হিজামা ব্লগ</h4>
                                    <p>হিজামা ব্লগের লেখাগুলো পড়তে</p>
                                    <a class="click" href="blog.html">এখানে ক্লিক করুন</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a href="{{ route('ayats') }}">
                            <div class="categories-main">
                                <img src="{{ asset('frontend/images/c5.jpg') }}" class="w-100" alt="">
                                <div class="overlay">
                                    <h4>রুকইয়াহ আয়াত</h4>
                                    <p>রুকইয়াহর আয়াত লেখাগুলো পড়তে</p>
                                    <a class="click" href="{{ route('ayats') }}">এখানে ক্লিক করুন</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a href="#">
                            <div class="categories-main">
                                <img src="{{ asset('frontend/images/c6.jpg') }}" class="w-100" alt="">
                                <div class="overlay">
                                    <h4>রুকইয়াহ এপস</h4>
                                    <p>রুকইয়াহ এপস ডাউনলোড করতে</p>
                                    <a class="click" href="#">এখানে ক্লিক করুন</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="quicktech-h mt-4 style=" font-zize:11px;"">
                    <div class="category-header">
                        বিভাগসমূহ
                    </div>
                    <div class="mt-3">
                        <!-- Static Links -->
                        <ul class="list-unstyled mt-3 category-list">
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> ইবাদত</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> কুরআন</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> হাদীস-সুন্নাহ</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> দোআ</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> ইবাদত</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> কুরআন</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> হাদীস-সুন্নাহ</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> দোআ</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> ইবাদত</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> কুরআন</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> হাদীস-সুন্নাহ</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> দোআ</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> ইবাদত</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> কুরআন</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> হাদীস-সুন্নাহ</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> দোআ</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> ইবাদত</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> কুরআন</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> হাদীস-সুন্নাহ</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> দোআ</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> ইবাদত</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> কুরআন</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> হাদীস-সুন্নাহ</a></li>
                            <li><a href="#"><i style="font-size:11px;" class="fa-solid fa-arrow-right"></i> দোআ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- categories -->


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
<!-- popular post -->
@if($popular_post->count()>0)
<section id="popular-post">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="categories-head text-center">
                    <h1>জনপ্রিয় পোস্ট</h1>
                </div>
            </div>
        </div>
        <div class="row gapp my-4">
            @foreach($popular_post as $popular)
            <div class="col-lg-3 col-6">
                <a href="blogdetails.html">
                    <div class="post-img">
                        <img src="{{ asset($popular->image) }}" class="w-100" alt="">
                        <div class="overlay-post">
                            <h3>{{ $popular->title }}</h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</section>
@endif

<!-- popular post -->

<!-- contact -->

<section id="contact">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="categories-head text-center">
                    <h1>আমাদের সাথে যোগাযোগ করুন</h1>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-6 m-auto">
                <div class="contact-form">
                    <form>
                        <div class="mb-3">
                            <label for="firstName" class="form-label">প্রথম নাম</label>
                            <input type="text" class="form-control" id="firstName" placeholder="প্রথম নাম লিখুন">
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">শেষ নাম</label>
                            <input type="text" class="form-control" id="lastName" placeholder="শেষ নাম লিখুন">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">ইমেইল ঠিকানা</label>
                            <input type="email" class="form-control" id="email" placeholder="ইমেইল ঠিকানা লিখুন">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">ফোন নম্বর</label>
                            <input type="tel" class="form-control" id="phone" placeholder="ফোন নম্বর লিখুন">
                        </div>
                        <div class="mb-3">
                            <label for="reason" class="form-label">যোগাযোগের কারণ</label>
                            <select class="form-select" id="reason">
                                <option selected>যোগাযোগের কারণ বাছাই করুন</option>
                                <option value="1">প্রশ্ন</option>
                                <option value="2">সহায়তা</option>
                                <option value="3">অন্য</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">আপনার বার্তা</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="আপনার বিস্তারিত বার্তা লিখুন"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">আমাদের সাথে যোগাযোগ করুন</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
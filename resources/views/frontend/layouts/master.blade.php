<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quranic Ruqya</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Tiro+Bangla:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/colorfulTab.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader-logo">
            <img src="{{ asset('frontend/images/logo.jpg') }}-removebg-preview.png') }}" alt="">
        </div>
        <div id="preloader-inner">

        </div>
    </div>
    <!-- preloader -->

    <!-- upper nav -->
    <section id="uppernav">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="uppernav-text">
                        <p> সকাল ৮টা থেকে বিকাল ৩টার মধ্যে কল/মেসেজ দিন</p>
                        <a href="tel:0170000000"><i class="fa-solid fa-phone"></i> +880170000000</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upper nav -->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="{{ asset('frontend/images/logo.jpg') }}-removebg-preview.png') }}" alt=""> কুরআনিক রুকইয়াহ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- হোমপেইজ -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">হোমপেইজ</a>
                    </li>

                    <!-- আমাদের সেবা -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button">
                            আমাদের সেবা
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggles" href="#" id="rukhsarDropdown">রুকইয়াহ</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blogdetails.html">রুকইয়াহ কি ? কিভাবে রুকইয়াহ করাবেন?</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggles" href="#" id="hisaabDropdown">হিজামা</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blogdetails.html">হিজামা কি</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="blogdetails.html">সংক্ষেপে বিস্তারিত</a></li>
                        </ul>
                    </li>

                    <!-- ডাউনলোড -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="downloadDropdown" role="button">
                            ডাউনলোড
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="downloadDropdown">
                            <li><a class="dropdown-item" href="audio.html">রুকইয়াহ অডিও</a></li>
                            <li><a class="dropdown-item" href="audio.html">রুকইয়াহ আয়াত</a></li>
                            <li><a class="dropdown-item" href="video.html">রুকইয়াহ ভিডিও</a></li>
                            <li><a class="dropdown-item" href="#">রুকইয়াহ এপস</a></li>
                        </ul>
                    </li>

                    <!-- ব্লগ -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button">
                            ব্লগ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                            <li><a class="dropdown-item" href="blog.html">রুকইয়াহ শরইয়াহ ব্লগ</a></li>
                            <li><a class="dropdown-item" href="blog.html">হিজামা ব্লগ</a></li>
                        </ul>
                    </li>

                    <!-- আমাদের সোসাল মিডিয়া -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="socialMediaDropdown" role="button">
                            প্রশিক্ষণ কোর্স
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="socialMediaDropdown">
                            <li><a class="dropdown-item" href="coursedetails.html">রুকইয়া কোর্স </a></li>

                        </ul>
                    </li>

                    <!-- যোগাযোগ করুন -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">যোগাযোগ করুন</a>
                    </li>
                </ul>



            </div>
        </div>
    </nav>



    <!-- navbar -->

    <!-- banner -->
    <section id="banner">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item banner-img active" data-bs-interval="10000">
                    <img src="{{ asset('frontend/images/banner.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5>হিজামা একটি হারিয়ে যাওয়া সুন্নাহ! </h5>
                        <p>আল্লাহর রাসুল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম বলেছেন "জিবরীল আমাকে জানিয়েছেন যে মানুষ চিকিৎসার জন্য যত উপায় অবলম্বন করে তার মধ্যে হিজামাই হলো সর্বোত্তম। (মুস্তাদরাকে হাকিম)
                        </p>
                        <br>
                        <a href="#">যোগাযোগ করুন</a>
                    </div>
                </div>
                <div class="carousel-item banner-img" data-bs-interval="2000">
                    <img src="{{ asset('frontend/images/banner.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h5>রুকইয়াহ শারইয়াহ </h5>
                        <p>কুরআন-হাদিসের আলোকে রুকইয়াহ সেবা </p>
                        <br>
                        <a href="#">যোগাযোগ করুন</a>
                    </div>
                </div>
                <div class="carousel-item banner-img">
                    <img src="{{ asset('frontend/images/banner.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h5>বদনজর, ওয়াসওয়াসা
                            <br>
                            জাদু,জীনের আছরের সমস্যার জন্য

                        </h5>
                        <p>কুরআন-হাদিসের আলোকে পরামর্শ ও চিকিতসা সেবা । </p>
                        <br>
                        <a href="#">যোগাযোগ করুন</a>
                    </div>
                </div>
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
                            <a href="#">
                                <div class="categories-main">
                                    <img src="{{ asset('frontend/images/c2.jpg') }}" class="w-100" alt="">
                                    <div class="overlay">
                                        <h4>রুকইয়াহ অডিও</h4>
                                        <p>রুকইয়াহ শারইয়ার অডিও ডাউনলোড করতে</p>
                                        <a class="click" href="audio.html">এখানে ক্লিক করুন</a>
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
                                        <a class="click" href="video.html">এখানে ক্লিক করুন</a>
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
                            <a href="#">
                                <div class="categories-main">
                                    <img src="{{ asset('frontend/images/c5.jpg') }}" class="w-100" alt="">
                                    <div class="overlay">
                                        <h4>রুকইয়াহ আয়াত</h4>
                                        <p>রুকইয়াহর আয়াত লেখাগুলো পড়তে</p>
                                        <a class="click" href="audio.html">এখানে ক্লিক করুন</a>
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
                <div class="col-lg-3 col-6">
                    <a href="blogdetails.html">
                        <div class="post-img">
                            <img src="{{ asset('frontend/images/l1.webp') }}" class="w-100" alt="">
                            <div class="overlay-post">
                                <h3>মাথা ব্যথায়ঃ</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="blogdetails.html">
                        <div class="post-img">
                            <img src="{{ asset('frontend/images/l2.webp') }}" class="w-100" alt="">
                            <div class="overlay-post">
                                <h3>দ্রুত চুল পরে যাচ্ছে!</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="blogdetails.html">
                        <div class="post-img">
                            <img src="{{ asset('frontend/images/l3.webp') }}" class="w-100" alt="">
                            <div class="overlay-post">
                                <h3>বৃষ্টিতে ভিজলেই হুট করে জ্বর চলে আসা জ্বীন যাদু বা প্রচন্ড বদনজরে আক্রান্ত হওয়ার অন্যতম লক্ষণ।</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="blogdetails.html">
                        <div class="post-img">
                            <img src="{{ asset('frontend/images/l1.webp') }}" class="w-100" alt="">
                            <div class="overlay-post">
                                <h3>মাথা ব্যথায়ঃ</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <!-- latest post -->
    <!-- popular post -->
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
                <div class="col-lg-3 col-6">
                    <a href="blogdetails.html">
                        <div class="post-img">
                            <img src="{{ asset('frontend/images/l1.webp') }}" class="w-100" alt="">
                            <div class="overlay-post">
                                <h3>মাথা ব্যথায়ঃ</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="blogdetails.html">
                        <div class="post-img">
                            <img src="{{ asset('frontend/images/l2.webp') }}" class="w-100" alt="">
                            <div class="overlay-post">
                                <h3>দ্রুত চুল পরে যাচ্ছে!</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="blogdetails.html">
                        <div class="post-img">
                            <img src="{{ asset('frontend/images/l3.webp') }}" class="w-100" alt="">
                            <div class="overlay-post">
                                <h3>বৃষ্টিতে ভিজলেই হুট করে জ্বর চলে আসা জ্বীন যাদু বা প্রচন্ড বদনজরে আক্রান্ত হওয়ার অন্যতম লক্ষণ।</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="blogdetails.html">
                        <div class="post-img">
                            <img src="{{ asset('frontend/images/l1.webp') }}" class="w-100" alt="">
                            <div class="overlay-post">
                                <h3>মাথা ব্যথায়ঃ</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>

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


    <!-- contact -->

    <!-- footer -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-2 col-12">
                    <div class="footer-logo-img">
                        <img src="{{ asset('frontend/images/logo.jpg') }}-removebg-preview.png') }}" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="footer-main">
                        <h4>ডাউনলোড</h4>
                        <ul>
                            <li><a href="#">রুকইয়াহ অডিও</a></li>
                            <li><a href="#">রুকইয়াহ আয়াত</a></li>
                            <li><a href="#">রুকইয়াহ ভিডিও</a></li>
                            <li><a href="#">রুকইয়াহ এপস</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="footer-main">
                        <h4> ব্লগ</h4>
                        <ul>
                            <li><a href="#">রুকইয়াহ শরইয়াহ ব্লগ</a></li>
                            <li><a href="#">হিজামা ব্লগ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="footer-main">
                        <h4>সোসাল</h4>
                        <ul>
                            <li><a href="#">টুইটার</a></li>
                            <li><a href="#">ইউটিউব</a></li>
                            <li><a href="#">ফেসবুক</a></li>
                            <li><a href="#">ইনস্টাগ্রাম</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="footer-main">
                        <h4>সাবস্ক্রাইব</h4>
                        <form>
                            <input type="text" class="form-control" placeholder="নাম">
                            <input type="email" class="form-control" placeholder="ইমেইল">
                            <button type="submit" class="btn btn-submit">সাবস্ক্রাইব</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        <p style="color: white;"> Copyright ©2024 | কুরআনিক রুকইয়াহ | All rights reserved | Designed and Developed by <a href="https://qubexit.com/">Qubex It</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer -->






    <script src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/particles.min.js') }}"></script>
    <script src="{{ asset('frontend/js/particles.js') }}"></script>

    <script src="{{ asset('frontend/js/colorfulTab.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoint.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/venobox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
</body>

</html>
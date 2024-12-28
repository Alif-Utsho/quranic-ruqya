<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quranic Ruqya</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Tiro+Bangla:ital@0;1&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/colorfulTab.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    @stack('style')
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
    @include('frontend.layouts.navbar')

    @yield('content')

    @include('frontend.layouts.footer')

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

    @stack('script')
</body>

</html>

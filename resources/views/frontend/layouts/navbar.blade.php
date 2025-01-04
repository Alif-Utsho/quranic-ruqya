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
        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('frontend/images/logo.jpg-removebg-preview.png') }}" alt=""> কুরআনিক রুকইয়াহ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- হোমপেইজ -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">হোমপেইজ</a>
                </li>

                @foreach($categories as $category)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('blogs', ['category'=> $category->id]) }}" id="servicesDropdown" role="button">
                        {{ $category->title }}
                    </a>
                    @if($category->has('subcategories'))
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        @foreach($category->subcategories as $subcategory)
                        @if($subcategory->has('blogs') && $category->id===1)
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggles" href="{{ route('blogs', ['sub_category'=> $category->id]) }}" id="rukhsarDropdown">{{ $subcategory->title }}</a>
                            <ul class="dropdown-menu">
                                @foreach($subcategory->blogs as $sub_category_blog)
                                <li><a class="dropdown-item" href="{{ route('blog.details', $sub_category_blog->id) }}">{{ $sub_category_blog->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @else
                        <li><a class="dropdown-item" href="{{ route('blogs', ['sub_category'=> $category->id]) }}">{{ $subcategory->title }}</a></li>
                        @endif
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach

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

                <!-- যোগাযোগ করুন -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">যোগাযোগ করুন</a>
                </li>
            </ul>



        </div>
    </div>
</nav>
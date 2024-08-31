@extends('site.layout.main')
@section('website-page-title', 'Blogs')
@section('website-active-blog', 'active')

@section('website-style-section')

@endsection

@section('website-main-section')
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center"
            data-background="{{ asset('frontend/assets/img/hero/law_hero2.webp') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>BLOGS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <div class="single-post">
                        <div class="feature-img text-center">
                            <img class="img-fluid single-blog-img" src="{{ asset($blog->image) }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{ $blog->title }}</h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> {{ $blog->author->name }}</a></li>
                                <li><a href="#"><i class="fa fa-calendar"></i>
                                        {{ $blog->created_at->format('d M Y') }}</a></li>
                            </ul>
                            <div class="excert">{!! $blog->description !!}</div>
                        </div>
                    </div>
                    <!-- Your additional content -->
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->

    <!-- Want To Work Start -->
    <div class="wantToWork-area w-padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption">
                        <h2>Get Your Answer In Just 5 Minutes</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-3 col-md-4">
                    <div class="wantToWork-btn f-right">
                        <a href="tel:+918470884598" class="btn btn-ans">Get started <i
                                class="ti-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Want To Work End -->
@endsection

@section('website-script-section')

@endsection

@extends('site.layout.main')
@section('website-page-title', 'Blogs')
@section('website-active-blog', 'active')
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
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img blog-card-img rounded-0" src="{{ asset($blog->image) }} "
                                    alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>{{ $blog->created_at->format('d') }}</h3>
                                    <p>{{ $blog->created_at->format('M') }}</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="{{route('site.single-blog', ['slug' => $blog->slug])}}">
                                    <h2>{{ \Illuminate\Support\Str::limit($blog->title, 50, '...') }}</h2>
                                </a>
                                <p>{{ \Illuminate\Support\Str::limit($blog->description, 99, '...') }}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> {{ $blog->author->name }}</a></li>
                                    {{-- <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> --}}
                                    <li><a href="#"><i class="fa fa-calendar"></i> {{$blog->created_at->format('d M Y')}}</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                @endforeach

                {{-- <div class="col-lg-12 mb-5 mb-lg-0">
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}



            </div>
        </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    <!-- Want To Work Start -->
    <div class="wantToWork-area w-padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption">
                        <h2>Get Your Answer In Just 5 Minutes</h2>
                        {{-- <p>Checking your loan options does not affect your credit score!s</p> --}}
                    </div>
                </div>
                <div class="col-xl-5 col-lg-3 col-md-4">
                    <div class="wantToWork-btn f-right">
                        <a href="tel:+918470884598" class="btn btn-ans">Get started <i class="ti-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Want To Work End -->
@endsection

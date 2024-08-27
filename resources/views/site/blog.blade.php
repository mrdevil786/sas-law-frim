@extends('site.layout.main')
@section('website-page-title', 'Blogs')
@section('website-active-blog', 'active')
@section('website-main-section')
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0"
                                    src="{{ asset('frontend/assets/img/blog/single_blog_1.webp') }} " alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>{{ $blog->title }}</h2>
                                </a>
                                <p>{{$blog->description}}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                @endforeach
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0"
                                src="{{ asset('frontend/assets/img/blog/single_blog_1.webp') }} " alt="">
                            <a href="#" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Google inks pact for new 35-storey office</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0"
                                src="{{ asset('frontend/assets/img/blog/single_blog_1.webp') }} " alt="">
                            <a href="#" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Google inks pact for new 35-storey office</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0"
                                src="{{ asset('frontend/assets/img/blog/single_blog_1.webp') }} " alt="">
                            <a href="#" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Google inks pact for new 35-storey office</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0"
                                src="{{ asset('frontend/assets/img/blog/single_blog_1.webp') }} " alt="">
                            <a href="#" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Google inks pact for new 35-storey office</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                </div>

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
                        <p>Checking your loan options does not affect your credit score!s</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-3 col-md-4">
                    <div class="wantToWork-btn f-right">
                        <a href="#" class="btn btn-ans">Get started <i class="ti-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Want To Work End -->
@endsection

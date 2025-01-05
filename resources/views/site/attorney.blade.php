@extends('site.layout.main')
@section('website-page-title', 'Partners/Associtaes')
@section('website-active-attorney', 'active')
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
                            <h2>Our Partners & Associates</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Team Mates Start -->
    <div class="teams-area section-padding30" style="padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle section-tittle-f text-center mb-70">
                        <h2>Meet the Best Advocates in Lucknow</h2>
                    </div>
                </div>
            </div>
            <div class="attorneys-slider">
                @foreach ($attorneys as $attorney)
                    <div class="single-teams text-center">
                        <div class="team-img">
                            <img src="{{ $attorney->image }}" alt="Best Criminal Lawyer near me">
                        </div>
                        <div class="team-caption">
                            <h4><a href="#">{{ $attorney->name }}</a></h4>
                            <span>{{ $attorney->designation }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team Mates End -->
    <!-- Clients Start -->
    <div class="testimonial-area testimonial-padding"
        data-background="{{ asset('frontend/assets/img/testmonial/testi_bg.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle section-tittle-testi text-center mb-45">
                        <h2>Our Valued Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <!-- Bootstrap Carousel -->
                    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            <!-- Single Testimonial 1 -->
                            @foreach ($clients as $index => $client)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption">
                                            <div class="testimonial-founder">
                                                <div class="founder-img">
                                                    <img src="{{ $client->image }}"
                                                        alt="Criminal Defense Lawyers in Lucknow" style="width:200px;">
                                                    <span>{{ $client->name }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Controls (optional) -->
                        <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Clients End -->
    <!-- Want To Work Start -->
    <div class="wantToWork-area w-padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption">
                        <h2>Get Answers Fast with the Best Criminal Lawyer in Lucknow!</h2>
                        <p>Contact the best advocate for criminal cases in Lucknow today!</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-3 col-md-4">
                    <div class="wantToWork-btn f-right">
                        <a href="tel:+918470884598" class="btn btn-ans">Get Started<i class="ti-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Want To Work End -->

@endsection

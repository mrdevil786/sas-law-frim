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
                            <h2>OUR PARTNERS/ASSOCIATES</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Testimonial Start -->

    <!-- Team Mates Start -->
    <div class="teams-area section-padding30" style="padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle section-tittle-f text-center mb-70">
                        <h2>Meet Our Attorneys</h2>
                    </div>
                </div>
            </div>

            <!-- Bootstrap Carousel -->
            <div id="attorneysCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-teams text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/team/team_1.webp') }}"
                                            alt="Mr. Mukul Sharma">
                                    </div>
                                    <div class="team-caption">
                                        <h4><a href="#">Mr. Mukul Sharma</a></h4>
                                        <span>Designated Partner</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-teams text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/team/team_2.webp') }}"
                                            alt="Mr. Mohit Sharma">
                                    </div>
                                    <div class="team-caption">
                                        <h4><a href="#">Mr. Mohit Sharma</a></h4>
                                        <span>Criminal Defence Lawyer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-teams text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/team/team_3.webp') }}" alt="R K Srivastava">
                                    </div>
                                    <div class="team-caption">
                                        <h4><a href="#">R K Srivastava</a></h4>
                                        <span>Senior Partner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-teams text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/team/team_4.webp') }}"
                                            alt="Mr. Mukul Sharma">
                                    </div>
                                    <div class="team-caption">
                                        <h4><a href="#">Ramakar Shukla</a></h4>
                                        <span>Senior Partner</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-teams text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/team/team_5.webp') }}"
                                            alt="Mr. Mohit Sharma">
                                    </div>
                                    <div class="team-caption">
                                        <h4><a href="#">Mr. Rohit Sharma</a></h4>
                                        <span>Partner</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-teams text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/team/team_6.webp') }}" alt="R K Srivastava">
                                    </div>
                                    <div class="team-caption">
                                        <h4><a href="#">Mr. Hari Govind Dubey</a></h4>
                                        <span>Advocate High Court</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#attorneysCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#attorneysCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Team Mates End -->

    <div class="testimonial-area testimonial-padding"
        data-background="{{ asset('frontend/assets/img/testmonial/testi_bg.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle section-tittle-testi text-center mb-45">
                        <h2>Meet Our Partners</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <!-- Bootstrap Carousel -->
                    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            <!-- Single Testimonial 1 -->
                            <div class="carousel-item active">
                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption">
                                        <div class="testimonial-founder">
                                            <div class="founder-img">
                                                <img src="{{ asset('frontend/assets/img/testmonial/client-1.webp') }}"
                                                    alt="Vedanta Group of Hospitals" style="width:200px;">
                                                <span>Vedanta Group of Hospitals</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial 2 -->
                            <div class="carousel-item">
                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption">
                                        <div class="testimonial-founder">
                                            <div class="founder-img">
                                                <img src="{{ asset('frontend/assets/img/testmonial/client-2.webp') }}"
                                                    alt="Balaji Group of Education" style="width:200px;">
                                                <span>Balaji Group of Education</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial 3 -->
                            <div class="carousel-item">
                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption">
                                        <div class="testimonial-founder">
                                            <div class="founder-img">
                                                <img src="{{ asset('frontend/assets/img/testmonial/client-3.webp') }}"
                                                    alt="Dhanlabh Properties" style="width:200px;">
                                                <span>Dhanlabh Properties</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption">
                                        <div class="testimonial-founder">
                                            <div class="founder-img">
                                                <img src="{{ asset('frontend/assets/img/testmonial/client-4.webp') }}"
                                                    alt="Dhanlabh Properties" style="width:200px;">
                                                <span>Dollar Heights</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption">
                                        <div class="testimonial-founder">
                                            <div class="founder-img">
                                                <img src="{{ asset('frontend/assets/img/testmonial/client-5.webp') }}"
                                                    alt="Dhanlabh Properties" style="width:200px;">
                                                <span>Gold Properties</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption">
                                        <div class="testimonial-founder">
                                            <div class="founder-img">
                                                <img src="{{ asset('frontend/assets/img/testmonial/client-6.webp') }}"
                                                    alt="Dhanlabh Properties" style="width:200px;">
                                                <span>Manvadhikar Media</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption">
                                        <div class="testimonial-founder">
                                            <div class="founder-img">
                                                <img src="{{ asset('frontend/assets/img/testmonial/client-7.webp') }}"
                                                    alt="Dhanlabh Properties" style="width:200px;">
                                                <span>Manvadhikar Media Foundation</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <!-- Testimonial End -->

    <!-- Want To Work Start -->
    <div class="wantToWork-area w-padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption">
                        <h2>Get Answers Fast with the Best Criminal Lawyer in Lucknow!</h2>
                        {{-- <p>Checking your loan options does not affect your credit score!s</p> --}}
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

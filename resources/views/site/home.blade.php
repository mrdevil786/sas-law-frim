@extends('site.layout.main')
@section('website-page-title', 'Home - Best Criminal Law Firm in Lucknow')
@section('website-active-home', 'active')
@section('website-main-section')
    <!-- Slider Area Start -->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2 bannerimage d-flex align-items-center"
                data-background="{{ asset('frontend/assets/img/hero/h1_hero.webp') }}" >
                <div class="container">
                    {{-- <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <p data-animation="fadeInUp" data-delay=".6s"></p>
                                <h1 data-animation="fadeInUp" data-delay=".4s"></h1>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="slider-bottom">
                    <div class="slider-bottom-cap" data-animation="fadeInLeft" data-delay=".6s">
                        <p>Book Your Appointment for Legal Consultation Now!</p>
                        <a href="tel:+918470884598">
                            <span><i class=""></i> +91-8470884598</span>
                        </a>
                    </div>
                    <div class="slider-video d-flex align-items-center" data-animation="fadeInRight" data-delay=".8s">
                        <a class="ani-btn" href="tel:+918470884598">
                            <span><i class="fas fa-phone-alt fa-flip-horizontal"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height bannerimage d-flex align-items-center"
                data-background="{{ asset('frontend/assets/img/hero/h1_hero.webp') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <p data-animation="fadeInUp" data-delay=".6s">Why Choose Us as Your Top Criminal Defense Law
                                    Firm</p>
                                <h1 data-animation="fadeInUp" data-delay=".4s">Experienced Criminal Lawyers in Lucknow Near
                                    You</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-bottom">
                    <div class="slider-bottom-cap" data-animation="fadeInLeft" data-delay=".4s">
                        <p>Book Your Appointment for Legal Consultation Now!</p>
                        <a href="tel:+918470884598">
                            <span><i class="fas fa-phone-alt fa-flip-horizontal"></i> +91-8470884598</span>
                        </a>
                    </div>
                    <div class="slider-video d-flex align-items-center" data-animation="fadeInRight" data-delay=".8s">
                        <a class="ani-btn" href="tel:+918470884598">
                            <span><i class="fas fa-phone-alt fa-flip-horizontal"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->

    <!-- About Law Start -->
    <div class="about-low-area about-bg about-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="section-tittle section-tittle-l mb-70">
                        <h2>About Us - Best Criminal Defense Lawyers in Lucknow</h2>
                    </div>
                    <div class="about-caption mb-100 text-justify">
                        <p>Sharma & Sharma Law Chambers LLP (saslawchambers) is a leading <strong>criminal defense
                                lawfirm</strong> in Lucknow, known for providing expert legal consultancy and litigation
                            services. We are recognized for having the best <strong>criminal defense attorneys near
                                me</strong> who specialize in a variety of areas, including criminal law, corporate law,
                            arbitration, and more. Whether you need a criminal lawyer for a specific case or general legal
                            consultation, we are here to serve you with the highest level of legal expertise.</p>
                        <div class="count-clients">
                            <div class="single-counter text-center">
                                <span class="counter">1500</span>
                                <p>+ Trusted Clients</p>
                            </div>
                            <div class="single-counter text-center">
                                <span class="counter">250</span>
                                <p>+ Successful Criminal Case Resolutions</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about-img">
                        <div class="about-font-img f-left">
                            <img src="{{ asset('frontend/assets/img/about/about-low-front.webp') }}"
                                alt="About Us Front Image">
                        </div>
                        <div class="about-back-img f-right d-none d-md-block">
                            <img src="{{ asset('frontend/assets/img/about/about-low-back.webp') }}"
                                alt="About Us Back Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Law End -->

    <!-- Contact Form Start -->
    <div class="contact-form bg-height pb-160" data-background="{{ asset('frontend/assets/img/about/contact_bg.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                    <div class="form-wrapper">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section-tittle section-tittle-f text-center mb-70">
                                    <h2>Consult with the Best Criminal Lawyer Near You</h2>
                                </div>
                            </div>
                        </div>
                        @if (session('sucesss'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form id="contact-form" action="{{ route('send.contact') }}" method="POST" novalidate='novalidate'>
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Name" required
                                            data-validation-required-message="Please enter your name"
                                            value="{{ old('name') }}">
                                        <p class="help-block text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="phone" placeholder="Phone" required
                                            data-validation-required-message="Please enter your phone number"
                                            value="{{ old('phone') }}">
                                        <p class="help-block text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="select-itms">
                                        <select name="subject" id="select" required
                                            data-validation-required-message="Please select your category"
                                            value="{{ old('subject') }}">
                                            <p class="help-block text-danger">
                                                @error('subject')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                            <option value="NDPS Act">NDPS Act </option>
                                            <option value="Dowry Death">Dowry Death</option>
                                            <option value="Matrimonial Dispute">Matrimonial Dispute</option>
                                            <option value="Arms Act">Arms Act</option>
                                            <option value="TADA Act & POTA Act">TADA Act & POTA Act</option>
                                            <option value="C.B.I. & E.D">C.B.I. & E.D</option>
                                            <option value="N.I. Act">N.I. Act</option>
                                            <option value="Income Tax & Sales Tax">Income Tax & Sales Tax</option>
                                            <option value="Explosives Act">Explosives Act</option>
                                            <option value="Cyber Crime">Cyber Crime</option>
                                            <option value="Corporate Matters">Corporate Matters</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="email" name="email" placeholder="Email" required
                                            data-validation-required-message="Please enter your email"
                                            value="{{ old('email') }}">
                                        <p class="help-block text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-30">
                                        <textarea name="message" id="message" placeholder="Your Message" required
                                            data-validation-required-message="Please enter description" value="{{ old('message') }}"></textarea>
                                        <p class="help-block text-danger">
                                            @error('message')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="submit-info">
                                        <button class="submit-btn2" type="submit">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Legal Practice Area Start -->
    <div class="legal-practice-area section-padding30" style="padding-bottom: 20px">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-70">
                        <h2>Our Legal Practice Areas</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-13.webp') }}" alt="Criminal Cases">
                        </div>
                        <div class="practice-caption">
                            <h4><a href="{{ route('site.services') }}">Criminal Defense Lawyers for NDPS Act</a></h4>
                            <p>Our criminal defense lawyers handle all matters related to the NDPS Act...</p>
                            <a href="{{ route('site.services') }}" class="read-more1">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-10.webp') }}" alt="Dowry Death Cases">
                        </div>
                        <div class="practice-caption">
                            <h4><a href="{{ route('site.services') }}">Dowry Death Criminal Lawyers</a></h4>
                            <p>We specialize in defending clients against dowry death charges...</p>
                            <a href="{{ route('site.services') }}" class="read-more1">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-8.webp') }}"
                                alt="Matrimonial Dispute Cases">
                        </div>
                        <div class="practice-caption">
                            <h4><a href="{{ route('site.services') }}">Matrimonial Dispute Lawyers</a></h4>
                            <p>Our team provides legal defense and representation in matrimonial disputes...</p>
                            <a href="{{ route('site.services') }}" class="read-more1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center mt-4">
                    <a href="{{ route('site.services') }}" class="btn btn-primary btn-lg">See More Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Legal Practice Area End -->
    <!-- Why Choose Us Start -->
    <div class="about-low-area about-bg about-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="section-tittle section-tittle-l mb-70">
                        <h2>Why Choose Us as the Best Criminal Law Firm in Lucknow</h2>
                    </div>
                    <div id="whyChooseUsCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="why-choose mb-100">
                                    <h2>1. Top Criminal Defense Legal Team in Lucknow</h2>
                                    <p>We provide <strong>top criminal defense attorneys near me</strong> specializing in
                                        criminal law, with years of experience...</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="why-choose mb-100">
                                    <h2>2. Committed to Excellence in Criminal Defense</h2>
                                    <p>Our <strong>criminal defense lawyers near me</strong> are dedicated to achieving the
                                        best outcomes for our clients...</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="why-choose mb-100">
                                    <h2>3. High Success Rate for Criminal Cases</h2>
                                    <p>Our firm is known for a high success rate in criminal defense...</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="why-choose mb-100">
                                    <h2>4. Swift Case Resolution with the Best Criminal Defense Lawyers</h2>
                                    <p>Our <strong>criminal defense lawyers near me</strong> focus on resolving cases
                                        quickly...</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="why-choose mb-100">
                                    <h2>5. Personalized Criminal Defense Solutions</h2>
                                    <p>We provide customized criminal defense strategies tailored to each client's unique
                                        case...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us End -->

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


    <!-- Bootstrap Carousel -->
    <div class="teams-area section-padding30" style="padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle section-tittle-f text-center mb-70">
                        <h2>Meet the Best Advocates in Lucknow</h2>
                    </div>
                </div>
            </div>

            <!-- Slick Slider -->
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

    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle section-tittle-f text-center mb-70">
                            <h2>Image Gallery of the Best Lawfirm in Lucknow</h2>
                        </div>
                    </div>
                </div>
                <div class="row gallery-item">
                    @php
                        $gallerysLimit = 4;
                    @endphp

                    @foreach ($gallerys->take($gallerysLimit) as $gallery)
                        <div class="col-md-6">
                            <a href="{{ $gallery->image }}" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url('{{ $gallery->image }}');">
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="col-md-12">
                        <div class="col text-center mt-4">
                            <a href="{{ route('site.gallery') }}" class="btn btn-primary btn-lg">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->

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
                        <a href="tel:+918470884598" class="btn btn-ans">Get Started<i
                                class="ti-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Want To Work End -->
@endsection

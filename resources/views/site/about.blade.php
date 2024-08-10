@extends('site.layout.main')

@section('website-page-title', 'About')

@section('website-active-about', 'active')

@section('website-main-section')

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center"
            data-background="{{ asset('frontend/assets/img/hero/law_hero2.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>About</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- About Law Start-->
    <div class="about-low-area about-bg about-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle-l mb-70">
                        <h2>About Just Law</h2>
                    </div>
                    <div class="about-caption mb-100">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut.</p>
                        <!-- Counter Up -->
                        <div class="count-clients">
                            <div class="single-counter text-center">
                                <span class="counter">250</span>
                                <p>Happy Clients</p>
                            </div>
                            <div class="single-counter text-center">
                                <span class="counter">920</span>
                                <p>Wining Case</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img f-left">
                            <img src="{{ asset('frontend/assets/img/about/about-low-front.jpg') }}" alt="">
                        </div>
                        <div class="about-back-img f-right d-none d-md-block">
                            <img src="{{ asset('frontend/assets/img/about/about-low-back.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Law End-->

    <!-- Contact form Start -->
    <div class="contact-form bg-height pb-160" data-background="{{ asset('frontend/assets/img/about/contact_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                    <div class="form-wrapper">
                        <!--Section Tittle  -->
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="section-tittle section-tittle-f text-center mb-70">
                                    <h2>Free Consultation</h2>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                        <form id="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="email" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="select-itms">
                                        <select name="select" id="select2">
                                            <option value="">Health Law</option>
                                            <option value="">Arafath Miya</option>
                                            <option value="">Shakil Miya</option>
                                            <option value="">saiful islam</option>
                                            <option value="">Tamim Sharker</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="Email" name="subject" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-30">
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
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
    <!-- Contact form End -->

    <!-- Testimonial Start -->
    <div class="testimonial-area testimonial-padding"
        data-background="{{ asset('frontend/assets/img/testmonial/testi_bg.png') }}">
        <div class="container">
            <!--Section Tittle  -->
            <div class="row ">
                <div class="col-xl-12">
                    <div class="section-tittle section-tittle-testi text-center mb-45">
                        <h2>Words From Clients</h2>
                    </div>
                </div>
            </div>
            <!-- Testimonial contents -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img">
                                        <img src="{{ asset('frontend/assets/img/testmonial/Homepage_testi_1.png') }}"
                                            alt="">
                                        <span>Devid jonathan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img">
                                        <img src="{{ asset('frontend/assets/img/testmonial/Homepage_testi_1.png') }}"
                                            alt="">
                                        <span>Devid jonathan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img">
                                        <img src="{{ asset('frontend/assets/img/testmonial/Homepage_testi_1.png') }}"
                                            alt="">
                                        <span>Devid jonathan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Team Mates Start -->
    <div class="teams-area section-padding30">
        <div class="container">
            <div class="row ">
                <div class="col-xl-12">
                    <div class="section-tittle section-tittle-f text-center mb-70">
                        <h2>Team Mates</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-teams text-center">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/img/team/team_1.jpg') }}" alt="">
                        </div>
                        <div class="team-caption">
                            <h4><a href="#">Jhon Smith</a></h4>
                            <span>Senior Lawyer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-teams text-center">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/img/team/team_2.jpg') }}" alt="">
                        </div>
                        <div class="team-caption">
                            <h4><a href="#">Emma Bunton</a></h4>
                            <span>Professional Lawyer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-teams text-center">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/img/team/team_3.jpg') }}" alt="">
                        </div>
                        <div class="team-caption">
                            <h4><a href="#">Bunton Jonathon</a></h4>
                            <span>Top Rated Lawyer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Mates End-->

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

@extends('site.layout.main')

@section('website-page-title', 'Attorneys')

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
                            <h2>OUR ATTORNEY</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Team Mates Start -->
    <div class="teams-area section-padding30">
        <div class="container">
            <div class="row ">
                <div class="col-xl-12">
                    <div class="section-tittle section-tittle-f text-center mb-70">
                        <h2>Meet Our Attorneys</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-teams text-center">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/img/team/team_1.webp') }}" alt="">
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
                            <img src="{{ asset('frontend/assets/img/team/team_2.webp') }}" alt="">
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
                            <img src="{{ asset('frontend/assets/img/team/team_3.webp') }}" alt="">
                        </div>
                        <div class="team-caption">
                            <h4><a href="#">R K Srivastava</a></h4>
                            <span>Senior Partner</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-teams text-center">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/img/team/team_4.webp') }}" alt="">
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
                            <img src="{{ asset('frontend/assets/img/team/team_5.webp') }}" alt="">
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
                            <img src="{{ asset('frontend/assets/img/team/team_6.webp') }}" alt="">
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

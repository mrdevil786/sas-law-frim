@extends('site.layout.main')

@section('website-page-title', 'Services')

@section('website-active-services', 'active')

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
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Legal Practice Area start -->
    <div class="legal-practice-area section-padding30">
        <div class="container">
            <!--Section Tittle  -->
            <div class="row ">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-70">
                        <h2>Legal Practice Area.</h2>
                    </div>
                </div>
            </div>
            <!-- single items -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_1.png') }}" alt="">

                            <!-- "practice-icon-->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Vehicle Accident</a></h4>
                            <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod tem incididunt ut labore
                                et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_2.png') }}" alt="">

                            <!-- "practice-icon-->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Health Law</a></h4>
                            <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod tem incididunt ut labore
                                et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_3.png') }}" alt="">

                            <!-- "practice-icon-->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Insurance Law</a></h4>
                            <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod tem incididunt ut labore
                                et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_3.png') }}" alt="">

                            <!-- "practice-icon-->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Insurance Law</a></h4>
                            <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod tem incididunt ut labore
                                et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_1.png') }}" alt="">

                            <!-- "practice-icon-->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Vehicle Accident</a></h4>
                            <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod tem incididunt ut labore
                                et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_2.png') }}" alt="">

                            <!-- "practice-icon-->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Health Law</a></h4>
                            <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod tem incididunt ut labore
                                et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Legal Practice Area End-->

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

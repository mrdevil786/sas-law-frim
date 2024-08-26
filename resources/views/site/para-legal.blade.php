@extends('site.layout.main')

@section('website-page-title', 'Paralegal Services')

@section('website-active-para-legal', 'active')

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
                            <h2>PARALEGAL SERVICES</h2>
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
                            <img src="{{ asset('frontend/assets/img/legal/legal_1.webp') }}" alt="">

                            <!-- "practice-icon-->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Business Start Up Service</a></h4>
                            <p>Saslawchambers offers expert paralegal support for new business start-ups in Lucknow, assisting with legal documentation, company registration, and compliance, ensuring a smooth launch for your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_2.webp') }}" alt="">

                            <!-- "practice-icon-->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Certification Services</a></h4>
                            <p>Our paralegals help clients obtain certifications such as trade licenses and regulatory approvals in Lucknow, ensuring seamless legal compliance for businesses and individuals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_3.webp') }}" alt="">

                            <!-- "practice-icon-->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Intellectual Property Right (IPR) Services</a></h4>
                            <p>We assist with filing, monitoring, and protecting intellectual property rights in Lucknow. Our IPR paralegal services ensure your creations are safeguarded against infringement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_3.webp') }}" alt="">

                            <!-- "practice-icon-->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Registration Services</a></h4>
                            <p>We offer comprehensive registration services for businesses, properties, and other legal documents, ensuring compliance with all legal requirements in Lucknow.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_1.webp') }}" alt="">

                            <!-- "practice-icon-->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Other Registration Work</a></h4>
                            <p>From trust registration to NGO filings, our paralegals in Lucknow handle a wide range of legal registrations efficiently and accurately.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_2.webp') }}" alt="">

                            <!-- "practice-icon-->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Health Law</a></h4>
                            <p>Our health law paralegal services in Lucknow assist with compliance in healthcare regulations, malpractice claims, and contracts, ensuring top legal support for health-related matters.</p>
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

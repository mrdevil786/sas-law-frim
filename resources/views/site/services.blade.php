@extends('site.layout.main')
@section('website-page-title', 'Legal Services in Lucknow | Saslawchambers')
@section('website-active-services', 'active')
@section('website-main-section')

    <!-- Slider Area Start -->
    <div class="slider-area">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center"
            data-background="{{ asset('frontend/assets/img/hero/law_hero2.webp') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Legal Services in Lucknow</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->

    <!-- Legal Practice Area Start -->
    <div class="legal-practice-area section-padding30">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-70">
                        <h2>Our Legal Practice Areas</h2>
                    </div>
                </div>
            </div>

            <!-- Single Items -->
            <div class="row">
                <!-- Criminal Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_1.webp') }}"
                                alt="Criminal Cases Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">Criminal Cases</a></h3>
                            <p>Expert defense for criminal cases in Lucknow, including white-collar and serious offenses.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Civil Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_2.webp') }}"
                                alt="Civil Cases Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">Civil Cases</a></h3>
                            <p>Efficient resolution of civil disputes, including contracts, property, and more.</p>
                        </div>
                    </div>
                </div>

                <!-- Business & Corporate Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_3.webp') }}"
                                alt="Business & Corporate Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">Business & Corporate Cases</a></h3>
                            <p>Legal support for business setups, compliance, mergers, and contracts.</p>
                        </div>
                    </div>
                </div>

                <!-- Intellectual Property Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_9.webp') }}"
                                alt="Intellectual Property Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">Intellectual Property Cases</a></h3>
                            <p>Protection for intellectual property rights, including trademarks and patents.</p>
                        </div>
                    </div>
                </div>

                <!-- Property Matters -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_6.webp') }}"
                                alt="Property Matters Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">Property Matters</a></h3>
                            <p>Expert guidance on real estate disputes, land issues, and property litigation.</p>
                        </div>
                    </div>
                </div>

                <!-- Constitutional Law & Writ Petitions -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_8.webp') }}"
                                alt="Constitutional Law & Writ Petitions Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">Constitutional Law & Writ Petitions</a></h3>
                            <p>Experienced representation in constitutional law cases and writ petitions to protect your
                                rights.</p>
                        </div>
                    </div>
                </div>

                <!-- RERA, MSME & Other Tribunals Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_2.webp') }}"
                                alt="RERA, MSME & Other Tribunals Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">RERA, MSME & Other Tribunals Cases</a></h3>
                            <p>Handling real estate disputes, MSME matters, and other tribunal cases with expertise.</p>
                        </div>
                    </div>
                </div>

                <!-- Service Matters -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_3.webp') }}"
                                alt="Service Matters Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">Service Matters</a></h3>
                            <p>Expert advocacy in service disputes, including wrongful termination and employee benefits.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- GST & Income Tax Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_7.webp') }}"
                                alt="GST & Income Tax Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">GST & Income Tax Cases</a></h3>
                            <p>Guidance on income tax disputes and GST litigation with expert legal support.</p>
                        </div>
                    </div>
                </div>

                <!-- Money Recovery & Cheque Bounce Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_5.webp') }}"
                                alt="Money Recovery & Cheque Bounce Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">Money Recovery & Cheque Bounce Cases</a></h3>
                            <p>Handling cheque bounce and money recovery cases efficiently to secure financial resolutions.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Matrimonial & Family Disputes -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_4.webp') }}"
                                alt="Matrimonial and Family Dispute Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">Matrimonial & Family Disputes</a></h3>
                            <p>Expert legal services for matrimonial and family issues, including divorce and custody
                                matters in
                                Lucknow.</p>
                        </div>
                    </div>
                </div>

                <!-- Arbitration and Other ADR Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_9.webp') }}"
                                alt="Arbitration and ADR Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">Arbitration & ADR Cases</a></h3>
                            <p>Specialized in arbitration and alternative dispute resolution (ADR) methods, including
                                mediation and
                                settlement.</p>
                        </div>
                    </div>
                </div>

                <!-- Business Contract and Tort Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_8.webp') }}"
                                alt="Business Contract and Tort Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div>
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">Business Contract & Tort Cases</a></h3>
                            <p>Legal services for business contract disputes and tort claims, ensuring your business
                                interests are
                                safeguarded.</p>
                        </div>
                    </div>
                </div>
                <!-- Legal Practice Area End -->
            </div>
        </div>
    </div>
    <!-- Legal Practice Area End -->


    <!-- Want To Work Start -->
    <div class="wantToWork-area w-padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption">
                        <h2>Get Your Legal Answers Quickly</h2>
                        <p>Explore legal options swiftly without affecting your credit score.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-3 col-md-4">
                    <div class="wantToWork-btn f-right">
                        <a href="#" class="btn btn-ans">Get Started <i class="ti-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Want To Work End -->
@endsection

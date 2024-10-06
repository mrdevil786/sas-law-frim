@extends('site.layout.main')
@section('website-page-title', 'Services in Lucknow | Saslawchambers')
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
                            <h2>Area of Practice</h2>
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
                        <h2>Area of Practice</h2>
                    </div>
                </div>
            </div>

            <!-- Single Items -->
            <div class="row">
                <!-- Criminal Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-13.webp') }}"
                                alt="NDPS Cases Services in Lucknow">
                            <!-- Practice Icon -->
                            {{-- <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div> --}}
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">All Matters Related To NDPS Act</a></h3>
                            <p>The Narcotic Drugs and Psychotropic Substances Act (NDPS Act) is a comprehensive law that regulates the production, possession, sale, and distribution of controlled substances in India. Our attorneys have expertise in defending clients accused of NDPS Act violations, including:</p>
                            <ol>
                                <li>Possession of controlled substances</li>
                                <li>Sale or distribution of controlled substances</li>
                                <li>Trafficking of controlled substances</li>
                                <li>Manufacturing or cultivating controlled substances</li>
                            </ol>
                            <p>We ensure clients receive fair treatment and strategic defense strategies to minimize penalties.</p>
                        </div>
                    </div>
                </div>

                <!-- Civil Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-10.webp') }}"
                                alt="Dowry Death Cases Services in Lucknow">
                            <!-- Practice Icon -->
                            {{-- <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div> --}}
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">All Matters Related To Dowry Death</a></h3>
                            <p>Dowry death cases involve allegations of harassment or violence leading to the death of a married woman. Our attorneys provide compassionate and aggressive legal support to victims' families, including:</p>
                            <ol>
                                <li>Filing criminal complaints against perpetrators</li>
                                <li>Representing families in criminal proceedings</li>
                                <li>Seeking compensation and justice for affected families</li>
                                <li>Providing emotional support and counseling</li>
                            </ol>
                            <p>We navigate complex criminal procedures to secure justice and compensation for affected families.</p>
                        </div>
                    </div>
                </div>

                <!-- Business & Corporate Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-8.webp') }}"
                                alt="Matrimonial Dispute Services in Lucknow">
                            <!-- Practice Icon -->
                            {{-- <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div> --}}
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">All Matters Related To Matrimonial Dispute</a></h3>
                            <p>Matrimonial disputes involve complex legal and emotional issues, including:</p>
                            <ol>
                                <li>Divorce proceedings</li>
                                <li>Child custody battles</li>
                                <li>Alimony disputes</li>
                                <li>Property division</li>
                            </ol>
                            <p>Our skilled attorneys prioritize emotional support and strategic representation to protect clients' rights and interests. We navigate mediation, arbitration, and litigation to achieve favorable outcomes for our clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Intellectual Property Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-9.webp') }}"
                                alt="Arms Act Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            {{-- <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div> --}}
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">All Matters Related To Arms Act</a></h3>
                            <p>The Arms Act regulates possession, trade, and use of firearms in India. Our attorneys specialize in defending clients accused of Arms Act violations, including:</p>
                            <ol>
                                <li>Illegal possession of firearms</li>
                                <li>Sale or transfer of firearms without license</li>
                                <li>Use of firearms for unlawful purposes</li>
                            </ol>
                            <p>We ensure clients receive expert representation to minimize penalties and protect their rights.</p>
                        </div>
                    </div>
                </div>

                <!-- Property Matters -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-11.webp') }}"
                                alt="TADA Act & POTA Act Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            {{-- <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div> --}}
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">All Matters Related To TADA Act & POTA Act</a></h3>
                            <p>The Terrorist and Disruptive Activities (Prevention) Act (TADA Act) and Prevention of Terrorism Act (POTA Act) are stringent laws addressing terrorism-related offenses. Our experienced attorneys handle complex cases under these acts, including:</p>
                            <ol>
                                <li>Terrorist activities</li>
                                <li>Disruptive activities</li>
                                <li>Conspiracy and abetment</li>
                            </ol>
                            <p>We ensure clients receive expert representation and strategic defense strategies to minimize penalties.</p>
                        </div>
                    </div>
                </div>

                <!-- Constitutional Law & Writ Petitions -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-6.webp') }}"
                                alt="C.B.I. & E.D Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            {{-- <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div> --}}
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">All Matters Related To C.B.I. & E.D</a></h3>
                            <p>Our attorneys have expertise in handling cases related to the Central Bureau of Investigation (CBI) and Enforcement Directorate (ED), including:</p>
                            <ol>
                                <li>White-collar crimes</li>
                                <li>Financial frauds</li>
                                <li>Corruption cases</li>
                                <li>Money laundering</li>
                                <li>Foreign exchange violations</li>
                            </ol>
                            <p>We provide strategic legal support to individuals and businesses facing CBI and ED investigations and cases, ensuring they receive expert guidance and representation.</p>
                        </div>
                    </div>
                </div>

                <!-- RERA, MSME & Other Tribunals Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-7.webp') }}"
                                alt="Negotiable Instrument Act (N.I. Act) Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            {{-- <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div> --}}
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">All Matters Related To Negotiable Instrument Act (N.I. Act)</a></h3>
                            <p>Our attorneys specialize in handling cases related to the Negotiable Instruments Act, including:</p>
                            <ol>
                                <li>Cheque bounce cases</li>
                                <li>Dishonour of cheques</li>
                                <li>Payment disputes</li>
                                <li>Instrument negotiations</li>
                            </ol>
                            <p>We prioritize swift resolution and minimize penalties for our clients, ensuring they receive expert legal guidance and representation.</p>
                        </div>
                    </div>
                </div>

                <!-- Service Matters -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-3.webp') }}"
                                alt="Income Tax & Sales Tax Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            {{-- <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div> --}}
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">All Matters Related To Income Tax & Sales Tax</a></h3>
                            <p>Our attorneys provide expert legal guidance on income tax and sales tax matters, including:</p>
                            <ol>
                                <li>Tax assessments</li>
                                <li>Disputes with tax authorities</li>
                                <li>Litigation</li>
                                <li>Tax planning and compliance</li>
                            </ol>
                            <p>We ensure clients comply with tax regulations and represent them in tax authorities' proceedings to minimize penalties and protect their interests.</p>
                        </div>
                    </div>
                </div>

                <!-- GST & Income Tax Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-2.webp') }}"
                                alt="Explosives Act Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            {{-- <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div> --}}
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">All Matters Related To Explosives Act</a></h3>
                            <p>Our attorneys defend clients accused of Explosives Act violations, including:</p>
                            <ol>
                                <li>Illegal possession of explosives</li>
                                <li>Unlawful use of explosives</li>
                                <li>Explosives trafficking</li>
                            </ol>
                            <p>We prioritize safety and ensure clients receive expert representation to minimize penalties.</p>
                        </div>
                    </div>
                </div>

                <!-- Money Recovery & Cheque Bounce Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-4.webp') }}"
                                alt="Cyber Crime Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            {{-- <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div> --}}
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">All Matters Related To Cyber Crime</a></h3>
                            <p>Our attorneys provide skilled legal support to victims of cybercrime, including:</p>
                            <ol>
                                <li>Hacking</li>
                                <li>Online harassment</li>
                                <li>Identity theft</li>
                                <li>Cyber stalking</li>
                            </ol>
                            <p>We ensure swift action and strategic representation to protect clients' rights and interests.</p>
                        </div>
                    </div>
                </div>
                <!-- Matrimonial & Family Disputes -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-1.webp') }}"
                                alt="Corporate Matters Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            {{-- <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div> --}}
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">All Matters Related To Corporate Matters</a></h3>
                            <p>Our attorneys provide expert legal guidance on corporate matters, including:</p>
                            <ol>
                                <li>Mergers and acquisitions</li>
                                <li>Joint ventures</li>
                                <li>Company formations</li>
                                <li>Disputes and litigation</li>
                            </ol>
                            <p>We prioritize strategic support to protect clients' interests and ensure compliance with corporate regulations.</p>
                        </div>
                    </div>
                </div>

                <!-- Arbitration and Other ADR Cases -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal-12.webp') }}"
                                alt="Bhartiya Nyaya Sanhita (B. N. S.) Legal Services in Lucknow">
                            <!-- Practice Icon -->
                            {{-- <div class="practice-icon">
                                <i class="flaticon-care"></i>
                            </div> --}}
                        </div>
                        <div class="practice-caption">
                            <h3><a href="#">All Matters Related To Bhartiya Nyaya Sanhita (B. N. S.)</a></h3>
                            <p>Our attorneys have expertise in handling cases related to the Bhartiya Nyaya Sanhita (BNS), also known as the Indian Penal Code (IPC). We provide comprehensive legal support for matters including:</p>
                            <ol>
                                <li>Criminal offenses</li>
                                <li>Civil wrongs</li>
                                <li>Tort law</li>
                                <li>Constitutional law</li>
                            </ol>
                            <p>Our team has in-depth knowledge of the BNS and its applications, ensuring clients receive expert guidance and representation. We handle cases related to:</p>
                            <ol>
                                <li>Offenses against the state</li>
                                <li>Offenses against the public</li>
                                <li>Offenses against individuals</li>
                                <li>Property offenses</li>
                            </ol>
                            <p>We prioritize strategic defense and representation to minimize penalties and protect clients' rights. Our attorneys are well-versed in the intricacies of the BNS and ensure clients receive personalized attention and expert legal guidance</p>
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
                        <h2>Get Answers Fast with the Best Criminal Lawyer in Lucknow!</h2>
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

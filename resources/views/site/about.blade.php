@extends('site.layout.main')
@section('website-page-title', 'About | Best Law Firm in Lucknow')
@section('website-active-about', 'active')
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
                            <h2>About Our Law Firm in Lucknow</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- About Law Start -->
    <div class="about-low-area about-bg about-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="section-tittle section-tittle-l mb-70">
                        <h2>About Us - Best Lawfirm For Criminal Cases in  Lucknow</h2>
                    </div>
                    <div class="about-caption mb-100 text-justify">
                        <p>Sharma & Sharma Law Chambers LLP (saslawchambers) is a leading <strong>law firm in
                            Lucknow</strong>, renowned for providing expert legal consultancy, and litigation
                            services. We are the best <strong>law firm </strong> having <strong>best criminal lawyer in Lucknow </strong>, our skilled <strong>high court lawyers</strong> adeptly handle diverse areas including criminal cases, cooreparet cases, arbetreration matters, foreign direct investments, and business setups in Uttar Pradesh. Managed by Mr. Mukul Sharma, and Mr .Mohit Sharma, our firm is distinguished among the <strong>top law firms in India</strong>. We serve both domestic and international clients, solidifying our reputation as a top choice for <strong>legal services in Lucknow</strong> and beyond. Whether you're looking for a premier <strong>law firm in Lucknow</strong> or a reliable <strong>legal firm in Lucknow</strong>, Sharma & Sharma Law Chambers LLP stands out as a leading option for all your legal needs, especially if you are searching for the <strong>best advocate for criminal cases</strong>.
                        </p>
                        <div class="count-clients">
                            <div class="single-counter text-center">
                                <span class="counter">1500</span>
                                <p>+ Trusted Clients</p>
                            </div>
                            <div class="single-counter text-center">
                                <span class="counter">250</span>
                                <p>+ Case Studies</p>
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
                                    <h2>For Consultation with the Best Criminal Advocate Near You</h2>
                                </div>
                            </div>
                        </div>
                        <form id="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="select-itms">
                                        <select name="practice_area" id="select2">
                                            <option value="NDPS Act">NDPS Act</option>
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
                                            <option value="Bhartiya Nyaya Sanhita">Bhartiya Nyaya Sanhita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-30">
                                        <textarea name="message" id="message" placeholder="Your Message" required></textarea>
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
                        <h2>Our Practice Areas</h2>
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
                            <h4><a href="{{ route('site.services') }}">All Matters Related To NDPS Act</a></h4>
                            <p>The Narcotic Drugs and Psychotropic Substances Act (NDPS Act) addresses...</p>
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
                            <h4><a href="{{ route('site.services') }}">All Matters Related To Dowry Death</a></h4>
                            <p>Dowry death cases involve allegations of harassment or violence...</p>
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
                            <h4><a href="{{ route('site.services') }}">All Matters Related To Matrimonial Dispute</a></h4>
                            <p>Matrimonial disputes involve complex legal and emotional issues...</p>
                            <a href="{{ route('site.services') }}" class="read-more1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center mt-4">
                    <a href="{{ route('site.services') }}" class="btn btn-primary btn-lg">See More</a>
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
                                    <h2>1. Top Expert Legal Team in Lucknow for Criminal Defense</h2>
                                    <p>At saslawchambers, we provide <strong>top lawyers in Lucknow</strong>, specializing
                                        in civil, criminal, and property law. Every advocate in our law chambers has years
                                        of experience, ensuring strong legal representation and high success rates.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="why-choose mb-100">
                                    <h2>2. Committed to Excellence in Criminal Defense</h2>
                                    <p>Our <strong>high court lawyers in Lucknow</strong> are dedicated to providing 100%
                                        effort in every case, whether in family courts or arbitration tribunals. We focus on
                                        building trust and long-term relationships with our clients.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="why-choose mb-100">
                                    <h2>3. High Success Rate Criminal Lawyer in Lucknow</h2>
                                    <p>Known for being among the <strong>best lawyers in Lucknow</strong>, we strive for
                                        optimal results for our clients. Our exceptional success rate sets us apart from
                                        other <strong>law firms in Lucknow</strong>.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="why-choose mb-100">
                                    <h2>4. Efficient Case Resolution with the Best Criminal Advocates</h2>
                                    <p>Specializing in swift case resolutions, our <strong>top civil lawyers in
                                            Lucknow</strong> and <strong>DRT lawyers in Lucknow</strong> focus on achieving
                                        quick outcomes without compromising quality.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="why-choose mb-100">
                                    <h2>5. Personalized Legal Solutions Tailored for You</h2>
                                    <p>We provide customized strategies for each client, whether you need the <strong>best
                                            criminal lawyers in Uttar Pradesh</strong>, or representation for property
                                        disputes and <strong>debt recovery in Lucknow</strong>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us End -->
    <!-- Testimonial Start -->
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
                                                    alt="Dollar Heights" style="width:200px;">
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
                                                    alt="Gold Properties" style="width:200px;">
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
                                                    alt="Manvadhikar Media" style="width:200px;">
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
                                                    alt="Manvadhikar Media Foundation" style="width:200px;">
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
            <!-- Bootstrap Carousel -->
            <div id="attorneysCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-teams text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/team/team_2.webp') }}"
                                            alt="Mr. Mohit Sharma - Best Criminal Advocate in Lucknow">
                                    </div>
                                    <div class="team-caption">
                                        <h4><a href="#">Mr. Mohit Sharma</a></h4>
                                        <span>Best Criminal Advocate in Lucknow</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-teams text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/team/team_3.webp') }}"
                                            alt="Rakesh Srivastava - Senior Partner">
                                    </div>
                                    <div class="team-caption">
                                        <h4><a href="#">Rakesh Srivastava</a></h4>
                                        <span>Senior Partner</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-teams text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/img/team/team_1.webp') }}"
                                            alt="Mr. Mukul Sharma - Designated Partner">
                                    </div>
                                    <div class="team-caption">
                                        <h4><a href="#">Mr. Mukul Sharma</a></h4>
                                        <span>Designated Partner</span>
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
                                            alt="Ramakar Shukla - Senior Partner">
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
                                            alt="Mr. Rohit Sharma - Partner">
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
                                        <img src="{{ asset('frontend/assets/img/team/team_6.webp') }}"
                                            alt="Mr. Hari Govind Dubey - Advocate High Court">
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
                    @foreach (['pg1', 'pg3', 'pg5', 'pg6', 'pg7', 'pg17'] as $image)
                        <div class="col-md-{{ in_array($image, ['pg10', 'pg11', 'pg15', 'pg16']) ? '6' : '4' }}">
                            <a href="{{ asset('frontend/assets/img/elements/' . $image . '.webp') }}" class="img-pop-up">
                                <div class="single-gallery-image"
                                    style="background: url('{{ asset('frontend/assets/img/elements/' . $image . '.webp') }}');">
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col text-center mt-4">
                        <a href="{{ route('site.gallery') }}" class="btn btn-primary btn-lg">See More</a>
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
                        <a href="tel:+918470884598" class="btn btn-ans">Get Started<i class="ti-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Want To Work End -->
@endsection

@extends('site.layout.main')
@section('website-page-title', 'About')
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
                            <h2>ABOUT US</h2>
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
                        <h2>About Us</h2>
                    </div>
                    <div class="about-caption mb-100">
                        <p>Sharma & Sharma Law Chambers LLP (saslawchambers) is a leading law firm in Lucknow, offering
                            expert legal consultancy, litigation, and para-legal services. Our skilled high court lawyers
                            handle diverse areas including foreign direct investments, corporate law, and business setups in
                            Uttar Pradesh. Managed by Mr. Mukul Sharma, Mr. Mohit Sharma, and Mr. Rohit Sharma, we serve
                            both domestic and international clients, making us a top choice for legal services in Lucknow
                            and beyond.</p>
                        <!-- Counter Up -->
                        <div class="count-clients">
                            <div class="single-counter text-center">
                                <span class="counter">1500</span>
                                <p></p>
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
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img f-left">
                            <img src="{{ asset('frontend/assets/img/about/about-low-front.webp') }}" alt="">
                        </div>
                        <div class="about-back-img f-right d-none d-md-block">
                            <img src="{{ asset('frontend/assets/img/about/about-low-back.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Law End-->
    <!-- Contact form Start -->
    <div class="contact-form bg-height pb-160" data-background="{{ asset('frontend/assets/img/about/contact_bg.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                    <div class="form-wrapper">
                        <!--Section Tittle  -->
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="section-tittle section-tittle-f text-center mb-70">
                                    <h2>For Consultation</h2>
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
    <!-- Why Choose Law Start-->
    <div class="about-low-area about-bg about-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle-l mb-70">
                        <h2>Why Choose Us</h2>
                    </div>
                    <div class="why-choose mb-100">
                        <h2>1. Expert Legal Team Across All Fields</h2>
                        <p>At saslawchambers, we provide top lawyers in Lucknow, each specializing in their respective
                            fields, including civil lawyers in Lucknow, criminal lawyers in Lucknow, and property lawyers in
                            Lucknow. Every advocate in our law chambers has years of experience, ensuring strong legal
                            representation and higher success rates.
                        </p>
                        <h2>2. Commitment to Excellence</h2>
                        <p>Our high court lawyers in Lucknow are committed to excellence, providing 100% effort in every
                            case, whether in family courts or arbitration tribunals. We focus on building trust and
                            long-term relationships with our clients.
                        </p>
                        <h2>3. High Success Rate</h2>
                        <p>Known for being some of the best lawyers in Lucknow high court, we deliver the best possible
                            results for our clients. Our exceptional success rate sets us apart from other law firms in
                            Lucknow.
                        </p>
                        <h2>4. Efficient Case Resolution</h2>
                        <p>Specializing in super-fast case resolution, our top civil lawyers in Lucknow and drt lawyers in
                            Lucknow focus on achieving quick outcomes without compromising quality.
                        </p>
                        <h2>5. Personalized Legal Solutions</h2>
                        <p>We provide personalized strategies for each client, whether you need the best criminal lawyers in
                            Uttar Pradesh, or representation for property disputes and debts recovery in Lucknow.
                        </p>
                        <h2>6. Nationwide Representation</h2>
                        <p>With top lawyers across Uttar Pradesh, including aft lawyers in Lucknow, we ensure consistent,
                            high-quality legal representation no matter where you need us.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Law End-->
    <!-- Testimonial Start -->
    <div class="testimonial-area testimonial-padding"
        data-background="{{ asset('frontend/assets/img/testmonial/testi_bg.webp') }}">
        <div class="container">
            <!--Section Tittle  -->
            <div class="row ">
                <div class="col-xl-12">
                    <div class="section-tittle section-tittle-testi text-center mb-45">
                        <h2>Meet Our Clients</h2>
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
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img">
                                        <img src="{{ asset('frontend/assets/img/testmonial/client-1.webp') }}"
                                            alt="" style="width:200px;">
                                        <span>Vedanta Group of Hospitals</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img">
                                        <img src="{{ asset('frontend/assets/img/testmonial/client-2.webp') }}"
                                            alt="" style="width:200px;">
                                        <span>Balaji Group of Education</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img">
                                        <img src="{{ asset('frontend/assets/img/testmonial/client-3.webp') }}"
                                            alt="" style="width:200px;">
                                        <span>Dhanlabh Properties</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img">
                                        <img src="{{ asset('frontend/assets/img/testmonial/client-4.webp') }}"
                                            alt="" style="width:200px;">
                                        <span>Dollar Heights</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img">
                                        <img src="{{ asset('frontend/assets/img/testmonial/client-5.webp') }}"
                                            alt="" style="width:200px;">
                                        <span>Gold Properties</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img">
                                        <img src="{{ asset('frontend/assets/img/testmonial/client-6.webp') }}"
                                            alt="" style="width:200px;">
                                        <span>Manvadhikar Media</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img">
                                        <img src="{{ asset('frontend/assets/img/testmonial/client-7.webp') }}"
                                            alt="" style="width:200px;">
                                        <span>Manvadhikar Media Foundation</span>
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

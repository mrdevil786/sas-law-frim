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
                            <h2>About Our Law Firm in Lucknow</h2>
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
                        <p>Sharma & Sharma Law Chambers LLP (saslawchambers)** is a leading <strong>law firm in
                                Lucknow</strong>, renowned
                            for providing expert legal consultancy, litigation, and para-legal services. As the best
                            <strong>criminal lawyer in Lucknow</strong>, our skilled high court lawyers adeptly handle
                            diverse areas
                            including foreign direct investments, corporate law, and business setups in Uttar Pradesh.
                            Managed by Mr. Mukul Sharma, Mr. Mohit Sharma, and Mr. Rohit Sharma, our firm is distinguished
                            among the <strong>top law firms in India</strong>. We serve both domestic and international
                            clients, solidifying
                            our reputation as a top choice for legal services in Lucknow and beyond. Whether you're looking
                            for a premier <strong>law firm in Lucknow</strong> or a reliable <strong>legal firm in
                                Lucknow</strong>, Sharma & Sharma Law
                            Chambers LLP stands out as a leading option for all your legal needs
                        </p>
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
    <!-- Why Choose Us Start -->
    <div class="about-low-area about-bg about-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="section-tittle section-tittle-l mb-70">
                        <h2>Why Choose Us</h2>
                    </div>
                    <div class="why-choose mb-100">
                        <h2>1. Top Expert Legal Team in Lucknow for Criminal Defense</h2>
                        <p>At saslawchambers, we provide <strong>top lawyers in Lucknow</strong>, each specializing in their
                            respective
                            fields, including civil, criminal, and property law. Every advocate in our law chambers has
                            years of experience, ensuring strong legal representation and higher success rates.</p>
                        <h2>2. Expert Legal Team in Lucknow: Committed to Excellence in Criminal Defense</h2>
                        <p>Our <strong>high court lawyers in Lucknow</strong> are committed to excellence, providing 100%
                            effort in every
                            case, whether in family courts or arbitration tribunals. We focus on building trust and
                            long-term relationships with our clients.</p>
                        <h2>3. High Success Rate Criminal Lawyer in Lucknow</h2>
                        <p>Known for being some of the <strong>best lawyers in Lucknow</strong> High Court, we deliver the
                            best possible
                            results for our clients. Our exceptional success rate sets us apart from other <strong>law firms
                                in
                                Lucknow.</strong></p>
                        <h2>4. Top Criminal Lawyer in Lucknow for Efficient Case Resolution</h2>
                        <p>Specializing in super-fast case resolution, our <strong>top civil lawyers in Lucknow</strong> and
                            <strong>DRT lawyers in
                                Lucknow</strong> focus on achieving quick outcomes without compromising quality.</p>
                        <h2>5. Personalized Legal Solutions</h2>
                        <p>We provide personalized strategies for each client, whether you need the <strong>best criminal
                                lawyers in
                                Uttar Pradesh</strong>, or representation for property disputes and <strong>debt recovery in
                                Lucknow</strong>.</p>
                        <h2>6. Top Law Firm in India</h2>
                        <p>With <strong>top lawyers</strong> across Uttar Pradesh, including <strong>AFT lawyers in
                                Lucknow</strong>, we ensure consistent,
                            high-quality legal representation no matter where you need us.</p>
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
                                        <img src="{{ asset('frontend/assets/img/team/team_3.webp') }}"
                                            alt="R K Srivastava">
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
                                        <img src="{{ asset('frontend/assets/img/team/team_6.webp') }}"
                                            alt="R K Srivastava">
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

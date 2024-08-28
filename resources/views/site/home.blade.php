@extends('site.layout.main')

@section('website-page-title', 'Home')

@section('website-active-home', 'active')

@section('website-main-section')
    {{-- Modal-Popup --}}
    <div class="modal fade" id="autoModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Disclaimer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">The Bar Council of India does not permit advertisement or solicitation by advocates in any form or
                    manner. By accessing this website, www.saslawchambers.com, you acknowledge and confirm that you are seeking
                    information relating to Sharma & Sharma Law Chambers LLP of your own accord and that there has been no form of solicitation,
                    advertisement or inducement by Sharma & Sharma Law Chambers LLP or its members. The content of this website is for
                    informational purposes only and should not be interpreted as soliciting or advertisement. No
                    material/information provided on this website should be construed as legal advice. Sharma & Sharma Law Chambers LLP shall
                    not be liable for consequences of any action taken by relying on the material/information provided on
                    this website. The contents of this website are the intellectual property of Sharma & Sharma Law Chambers LLP.</div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Proceed</button></div>
            </div>
        </div>
    </div>

    <!-- Slider Area Start -->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center"
                data-background="{{ asset('frontend/assets/img/hero/h1_hero.webp') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <p data-animation="fadeInUp" data-delay=".6s">Sharma & Sharma Law Chambers LLP</p>
                                <h1 data-animation="fadeInUp" data-delay=".4s">Best Criminal Law Firm in Lucknow</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-bottom">
                    <div class="slider-bottom-cap" data-animation="fadeInLeft" data-delay=".6s">
                        <p>Get an Appointment</p>
                        <a href="tel:+918470884598"><span>+91-8470884598</span></a>
                    </div>
                    <div class="slider-video d-flex align-items-center" data-animation="fadeInRight" data-delay=".8s">
                        <a class="popup-video ani-btn" href="https://www.youtube.com/watch?v=yXaegVWBrK0">
                            <img src="{{ asset('frontend/assets/img/icon/video_btn.webp') }}" alt="Video Button">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center"
                data-background="{{ asset('frontend/assets/img/hero/h1_hero.webp') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <p data-animation="fadeInUp" data-delay=".6s">Why Choose Us as Your Top Criminal Law Firm
                                </p>
                                <h1 data-animation="fadeInUp" data-delay=".4s">Experienced Criminal Lawyers in Lucknow</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-bottom">
                    <div class="slider-bottom-cap" data-animation="fadeInLeft" data-delay=".4s">
                        <p>Schedule Your Consultation 24/7</p>
                        <a href="tel:+918470884598"><span>+91-8470884598</span></a>
                    </div>
                    <div class="slider-video d-flex align-items-center" data-animation="fadeInRight" data-delay=".8s">
                        <a class="popup-video" href="https://www.youtube.com/watch?v=yXaegVWBrK0">
                            <img src="{{ asset('frontend/assets/img/icon/video_btn.webp') }}" alt="Video Button">
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
                        <h2>About Us</h2>
                    </div>
                    <div class="about-caption mb-100">
                        <p>Sharma & Sharma Law Chambers LLP (saslawchambers) is a leading law firm in Lucknow, offering
                            expert legal consultancy, litigation, and para-legal services. Our skilled high court lawyers
                            handle diverse areas including foreign direct investments, corporate law, and business setups in
                            Uttar Pradesh. Managed by Mr. Mukul Sharma, Mr. Mohit Sharma, and Mr. Rohit Sharma, we serve
                            both domestic and international clients, making us a top choice for legal services in Lucknow
                            and beyond.</p>
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
                                    <h2>For Consultation</h2>
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
                                            <option value="">Health Law</option>
                                            <option value="">Arafath Miya</option>
                                            <option value="">Shakil Miya</option>
                                            <option value="">Saiful Islam</option>
                                            <option value="">Tamim Sharker</option>
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
                            <img src="{{ asset('frontend/assets/img/legal/legal_1.webp') }}" alt="Criminal Cases">
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Criminal Cases</a></h4>
                            <p>We represent both companies and individuals in all types of litigation before every court,
                                including the Supreme Court, High Courts, District Courts, and other tribunals. Our
                                expertise includes handling appeals, financial fraud, criminal complaints, criminal writs,
                                and violations of intellectual property and cyber laws. We ensure comprehensive
                                representation for our clients across a broad spectrum of criminal matters.</p>
                            <a href="case_details.html" class="read-more1">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_2.webp') }}" alt="Civil Cases">
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Civil Cases</a></h4>
                            <p>Our firm has a robust network of civil advocates nationwide to address diverse client needs.
                                We handle all kinds of civil litigation, representing companies and individuals at District
                                Courts, High Courts, and the Supreme Court. Our services cover disputes related to
                                contracts, agreements, insolvency matters, recovery suits, writ petitions, and special leave
                                petitions, providing thorough legal support throughout.</p>
                            <a href="case_details.html" class="read-more1">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-practice mb-30">
                        <div class="practice-img">
                            <img src="{{ asset('frontend/assets/img/legal/legal_3.webp') }}" alt="Service Matters">
                        </div>
                        <div class="practice-caption">
                            <h4><a href="#">Service Matters</a></h4>
                            <p>We handle all aspects of Business and Corporate Law in India, from company formation to
                                winding up. We represent clients before Company Law Boards and High Courts in issues like
                                winding up, mismanagement, mergers, and acquisitions. Our services also include drafting
                                agreements, risk analysis, due diligence, corporate restructuring, joint ventures, and legal
                                audits, ensuring thorough support for corporate clients.</p>
                            <a href="case_details.html" class="read-more1">Read More</a>
                        </div>
                    </div>
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
                        <h2>Why Choose Us</h2>
                    </div>
                    <div class="why-choose mb-100">
                        <h2>1. Top Expert Legal Team in Lucknow for Criminal Defense</h2>
                        <p>At saslawchambers, we provide top lawyers in Lucknow, each specializing in their respective
                            fields, including civil, criminal, and property law. Every advocate in our law chambers has
                            years of experience, ensuring strong legal representation and higher success rates.</p>
                        <h2>2. Expert Legal Team in Lucknow: Committed to Excellence in Criminal Defense</h2>
                        <p>Our high court lawyers in Lucknow are committed to excellence, providing 100% effort in every
                            case, whether in family courts or arbitration tribunals. We focus on building trust and
                            long-term relationships with our clients.</p>
                        <h2>3. High Success Rate Criminal Lawyer in Lucknow</h2>
                        <p>Known for being some of the best lawyers in Lucknow High Court, we deliver the best possible
                            results for our clients. Our exceptional success rate sets us apart from other law firms in
                            Lucknow.</p>
                        <h2>4. Top Criminal Lawyer in Lucknow for Efficient Case Resolution</h2>
                        <p>Specializing in super-fast case resolution, our top civil lawyers in Lucknow and DRT lawyers in
                            Lucknow focus on achieving quick outcomes without compromising quality.</p>
                        <h2>5. Personalized Legal Solutions</h2>
                        <p>We provide personalized strategies for each client, whether you need the best criminal lawyers in
                            Uttar Pradesh, or representation for property disputes and debt recovery in Lucknow.</p>
                        <h2>6. Top Law Firm in India</h2>
                        <p>With top lawyers across Uttar Pradesh, including AFT lawyers in Lucknow, we ensure consistent,
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
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle section-tittle-testi text-center mb-45">
                        <h2>Meet Our Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
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
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-teams text-center">
                        <div class="team-img">
                            <img src="{{ asset('frontend/assets/img/team/team_1.webp') }}" alt="Mr. Mukul Sharma">
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
                            <img src="{{ asset('frontend/assets/img/team/team_2.webp') }}" alt="Mr. Mohit Sharma">
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
                            <img src="{{ asset('frontend/assets/img/team/team_3.webp') }}" alt="R K Srivastava">
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
    <!-- Team Mates End -->
    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle section-tittle-f text-center mb-70">
                            <h2>Image Gallery</h2>
                        </div>
                    </div>
                </div>
                <div class="row gallery-item">
                    @foreach (['pg1', 'pg2', 'pg3', 'pg4', 'pg5', 'pg6', 'pg7', 'pg8', 'pg10', 'pg11', 'pg12', 'pg13', 'pg17', 'pg15', 'pg16'] as $image)
                        <div
                            class="col-md-{{ in_array($image, ['pg4', 'pg5', 'pg10', 'pg11', 'pg15', 'pg16']) ? '6' : '4' }}">
                            <a href="{{ asset('frontend/assets/img/elements/' . $image . '.webp') }}" class="img-pop-up">
                                <div class="single-gallery-image"
                                    style="background: url('{{ asset('frontend/assets/img/elements/' . $image . '.webp') }}');">
                                </div>
                            </a>
                        </div>
                    @endforeach
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
                        <h2>Get Your Answer In Just 5 Minutes</h2>
                        {{-- <p>Checking your loan options does not affect your credit score!</p> --}}
                    </div>
                </div>
                <div class="col-xl-5 col-lg-3 col-md-4">
                    <div class="wantToWork-btn f-right">
                        <a href="tel:+918470884598" class="btn btn-ans">Get Started <i class="ti-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Want To Work End -->
@endsection

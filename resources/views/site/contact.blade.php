@extends('site.layout.main')

@section('website-page-title', 'Contact')

@section('website-active-contact', 'active')

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
                            <h2>CONTACT US</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                        placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12" style="margin-bottom: 30px;">
                                <div class="form-group">
                                    <!-- Updated multiple select input for subject -->
                                    <select class="form-control" name="subject[]" id="subject" multiple>
                                        <option value="" disabled selected>Choose your subject(s)</option>
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
                                            <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>C-501, Vibhuti Khand, Gomti Nagar</h3>
                            <p>Lucknow, Uttar Pradesh 226010.</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+91 84708-84598</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>info@saslawchambers.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-block mb-5 pb-4">
                <h2 class="contact-title">Our Location</h2>
                <iframe style="border: 2px solid #da0000;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.0165407746754!2d81.00907147489357!3d26.871215561873612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be3c842645d0b%3A0x20f3de94aaa3b659!2sSharma%20%26%20Sharma%20Law%20Chambers%20LLP!5e0!3m2!1sen!2sin!4v1723295911419!5m2!1sen!2sin"
                    width="100%" height="480" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


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

@extends('site.layout.main')
@section('website-page-title', 'Internship | SAS Law Chambers LLP')
@section('website-active-internship', 'active')
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
                            <h2>Internship</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->
    <!-- Contact Form Start -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Apply for Internship</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('send.internship') }}" method="POST"
                        id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="fname" id="fname" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter first name'"
                                        placeholder="Enter your first name" required='required'
                                        data-validation-required-message="Please enter your first name"
                                        value="{{ old('fname') }}">
                                    <p class="help-block text-danger">
                                        @error('fname')
                                            {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="lname" id="lname" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter last name'"
                                        placeholder="Enter your last name" required='required'
                                        data-validation-required-message="Please enter your last name"
                                        value="{{ old('lname') }}">
                                    <p class="help-block text-danger">
                                        @error('lname')
                                            {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                        placeholder="Enter your email address" required='required'
                                        data-validation-required-message="Please enter your email address"
                                        value="{{ old('email') }}">
                                    <p class="help-block text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="phone" id="phone" type="number"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone number'"
                                        placeholder="Enter your phone number" required='required'
                                        data-validation-required-message="Please enter your phone number"
                                        value="{{ old('phone') }}">
                                    <p class="help-block text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control valid" name="resume" id="resume" type="file"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Resume'"
                                        placeholder="Resume" required='required'
                                        data-validation-required-message="Please upload your resume"
                                        value="{{ old('resume') }}" style="height: 100%;">
                                    <p class="help-block text-danger">
                                        @error('resume')
                                            {{ $message }}
                                        @enderror
                                    </p>
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
                            <h3>C-501, New High Court, Gomtinagar</h3>
                            <p>Lucknow</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>13/143, Basement, Vikram Vihar</h3>
                            <p>Lajpat Nagar-4, New Delhi</p>
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
    <!-- Contact Form End -->
@endsection

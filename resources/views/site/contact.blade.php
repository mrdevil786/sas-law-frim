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
                            {{-- <h2>CONTACT US</h2> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Start -->
    <div class="contact-form bg-height pb-160" data-background="{{ asset('frontend/assets/img/about/contact_bg.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                    <div class="form-wrapper">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section-tittle section-tittle-f text-center mb-70">
                                    <h2>Consult with the Best Criminal Lawyer Near You</h2>
                                </div>
                            </div>
                        </div>
                        @if (session('sucesss'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form id="contact-form" action="{{ route('send.contact') }}" method="POST" novalidate='novalidate'>
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Name" required
                                            data-validation-required-message="Please enter your name"
                                            value="{{ old('name') }}">
                                        <p class="help-block text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="phone" placeholder="Phone" required
                                            data-validation-required-message="Please enter your phone number"
                                            value="{{ old('phone') }}">
                                        <p class="help-block text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="select-itms">
                                        <select name="subject" id="select" required
                                            data-validation-required-message="Please select your category"
                                            value="{{ old('subject') }}">
                                            <p class="help-block text-danger">
                                                @error('subject')
                                                    {{ $message }}
                                                @enderror
                                            </p>
                                            <option value="NDPS Act">NDPS Act </option>
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
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="email" name="email" placeholder="Email" required
                                            data-validation-required-message="Please enter your email"
                                            value="{{ old('email') }}">
                                        <p class="help-block text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-30">
                                        <textarea name="message" id="message" placeholder="Your Message" required
                                            data-validation-required-message="Please enter description" value="{{ old('message') }}"></textarea>
                                        <p class="help-block text-danger">
                                            @error('message')
                                                {{ $message }}
                                            @enderror
                                        </p>
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

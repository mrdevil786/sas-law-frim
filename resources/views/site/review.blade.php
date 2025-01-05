@extends('site.layout.main')
@section('website-page-title', 'Testimonials')
@section('website-active-testimonials', 'active')
@section('website-main-section')

    <!-- Testimonial Start -->
    <div class="testimonial-area testimonial-padding"
        data-background="{{ asset('frontend/assets/img/testmonial/testi_bg.webp') }}">
        <div class="container">
            <!--Section Tittle  -->
            <div class="row ">
                <div class="col-xl-12">
                    <div class="section-tittle section-tittle-testi text-center mb-45">
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>
            <!-- Testimonial contents -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        @foreach ($reviews as $review)
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p style="font-style: italic;">{{$review->message}}</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img">
                                            <span>{{$review->name}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Give Review</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('send.review') }}" method="POST"
                        id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter name'"
                                        placeholder="Enter your name" required='required'
                                        data-validation-required-message="Please enter your name"
                                        value="{{ old('name') }}">
                                    <p class="help-block text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <textarea class="form-control valid" name="message" id="message" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter message'" placeholder="Enter your message" required='required'
                                        data-validation-required-message="Please enter your message">{{ old('message') }}</textarea>
                                    <p class="help-block text-danger">
                                        @error('message')
                                            {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>


                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                    </form>
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

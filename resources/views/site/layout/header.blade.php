<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('website-page-title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta name="distribution" content="global" />
    <meta name="rating" content="General" />
    <meta name="audience" content="All" />
    <meta name="doc-type" content="Web Page" />
    <meta name="doc-class" content="Published" />
    <meta name="geo.region" content="IN-UP" />
    <meta name="geo.placename" content="Lucknow" />
    <meta name="geo.position" content="26.8517, 81.0173" />
    <meta name="ICBM" content="26.8517, 81.0173" />
    <meta name="author" content="www.saslawchambers.com, info@saslawchambers.com" />
    <meta name="copyright"
        content="2023 www.saslawchambers.com - Lawyers in Lucknow, High Court Lawyers in Lucknow, Lucknow" />
    <meta name="publisher" content="www.saslawchambers.com" />
    <meta name="city" content="Lucknow" />
    <meta name="country" content="India" />
    <meta name="state" content="Lucknow" />
    <meta name="zipcode" content="226010" />
    <meta name="geo.placename" content="Lucknow, India" />
    <meta name="format-detection" content="telephone=+91 8470884598" />
    <!--<meta name="ahrefs-site-verification" content="6a9b773b17018331594302b48e4e9a71e1e3af95776a4890a25cbe86a20b162f">-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description"
        content="Sharma & Sharma Law Chambers LLP is the best criminal law firm in Lucknow. With over 15 years of experience, our top-rated criminal lawyers offer expert defense and legal services. Contact us for a consultation today.">
    <meta name="author" content="Adv. Mukul Sharma" />
    <meta name="keywords"
        content="top law firms india, top law companies in india, india law firms, law firms in india, best criminal lawyer in lucknow, law firm in lucknow, law firm lucknow, legal firm in lucknow, legal firms in lucknow, advocates in lucknow, advocate in lucknow, lawyers in lucknow, best criminal advocate in lucknow, best criminal advocate near me, best criminal lawyers in lucknow, best criminal advocate near me, best criminal defence advocate in lucknow, experienced attorneys in lucknow, legal services in lucknow, legal consultants lucknow" />
    <meta name="keywords"
        content="best criminal advocate in lucknow, best crimimal advocate near me, best criminal lawyers in lucknow, best criminal advocate near me, best criminal defence advocate in lucknow" />
    <!--<meta name="google-site-verification" content="KMlCZAZvaSaA2l2Wy_ym7NL0_lDjdY8xahW_koUqU7M" />-->
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Ranking" name="Best Law Firm in Lucknow" />
    <meta content="About Sharma & Sharma Law Chambers"
        name="Sharma & Sharma Law Chambers LLP is a leading legal firm in Lucknow, operating as a limited liability partnership. We specialize in criminal law as well as legal consultancy, practical implementation of law, and litigation services across various fields. Our comprehensive offerings include criminal defense, para-legal services, and more. The firm is expertly managed by Mr. Mohit Sharma, Mr. Mukul Sharma, and Mr. Rohit Sharma, providing top-tier expertise in criminal defense law and other legal areas." />
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <style>
        /* Popup overlay */
        .popup-overlay {
            display: none;
            /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
            /* Ensure it is above other content */
        }

        /* Popup content */
        .popup-content {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            max-width: 500px;
            width: 90%;
        }

        .popup-content h2 {
            margin-top: 0;
        }

        .popup-content p {
            margin: 20px 0;
        }

        .popup-content .btn {
            margin-top: 20px;
        }
    </style>
    @yield('website-style-section')
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('frontend/assets/img/loader.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <!-- Acknowledge Popup -->
    <div id="acknowledge-popup" class="popup-overlay">
        <div class="popup-content">
            <h2>Acknowledgment Required</h2>
            <p>The Bar Council of India does not permit advertisement or solicitation by advocates in any form or
                manner. By
                accessing this website, www.saslawchambers.com, you acknowledge and confirm that you are seeking
                information
                relating to Sharma & Sharma Law Chambers LLP of your own accord and that there has been no form of
                solicitation, advertisement or inducement by Sharma & Sharma Law Chambers LLP or its members. The
                content of
                this website is for informational purposes only and should not be interpreted as soliciting or
                advertisement. No material/information provided on this website should be construed as legal advice.
                Sharma
                & Sharma Law Chambers LLP shall not be liable for consequences of any action taken by relying on the
                material/information provided on this website. The contents of this website are the intellectual
                property of
                Sharma & Sharma Law Chambers LLP.</p>
            <button id="acknowledge-btn" class="btn btn-primary">Acknowledge</button>
        </div>
    </div>

    <header>
        <!-- Header Start -->
        <div class="header-area header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-1 col-md-1">
                        <div class="logo">
                            <a href="{{ route('site.dashboard') }}"><img
                                    src="{{ asset('frontend/assets/img/logo/logo.svg') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8 col-md-6">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li class="@yield('website-active-home')"><a href="{{ route('site.dashboard') }}">Home</a>
                                    </li>
                                    <li class="@yield('website-active-about')"><a href="{{ route('site.about') }}">About Us</a></li>
                                    <li class="@yield('website-active-services')"><a href="{{ route('site.services') }}">Area of
                                            Practice</a></li>
                                    <li class="@yield('website-active-contact')"><a href="{{ route('site.contact') }}">Contact Us</a>
                                    </li>
                                    <li><a href="#">Get Involved</a>
                                        <ul class="submenu">
                                            <li class="@yield('website-active-attorney')"><a href="{{ route('site.attorney') }}">Partners/Associates</a>
                                            <li class="@yield('website-active-para-legal')"><a href="{{ route('site.dashboard') }}">Testimonials/Reviews</a></li>
                                            <li class="@yield('website-active-para-legal')"><a href="{{ route('site.dashboard') }}">Media/Publications</a></li>
                                            <li class="@yield('website-active-para-legal')"><a href="{{ route('site.dashboard') }}">Our Clients</a></li>
                                            <li class="@yield('website-active-para-legal')"><a href="{{ route('site.dashboard') }}">Internship</a></li>
                                            <li class="@yield('website-active-gallery')"><a href="{{ route('site.gallery') }}">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="@yield('website-active-blog')"><a href="{{ route('blog.index') }}">Blog</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <!-- Header-btn -->
                        <div class="header-btn d-none d-lg-block f-right">
                            <a href="tel:+918470884598" class="btn header-btn">Get Consultation</a>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6QWQE7JSSX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-6QWQE7JSSX');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('website-page-title') | Best Lawfirm in Lucknow | Best Criminal Lawfirm in Lucknow</title>
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
    <meta name="copyright" content="2023 www.saslawchambers.com - Best Lawfirm in Lucknow" />
    <meta name="publisher" content="www.saslawchambers.com" />
    <meta name="city" content="Lucknow" />
    <meta name="country" content="India" />
    <meta name="state" content="Lucknow" />
    <meta name="zipcode" content="226010" />
    <meta name="format-detection" content="telephone=+91 8470884598" />
    <meta name="description" content="Sharma & Sharma Law Chambers LLP is the best criminal law firm in Lucknow, specializing in criminal defense and legal consultancy. Contact us today for expert legal services.">
    <meta name="author" content="Adv. Mukul Sharma" />
    <meta name="keywords" content="Best Lawfirm in Lucknow, Best Criminal Lawfirm in Lucknow, Best lawfirm for criminal cases in lucknow, Best Criminal Advocate in Lucknow, Best Criminal Advocate Near Me, Best Criminal Lawyers in Lucknow, Best Criminal Advocate near me, Best Criminal Defence Advocate in lucknow, Best advocate for criminal cases, Best Advocate in Lucknow" />
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
            <p>The Bar Council of India prohibits advertisement or solicitation by advocates. By accessing www.saslawchambers.com, you acknowledge that you are seeking information about Sharma & Sharma Law Chambers LLP voluntarily, without any solicitation or inducement from the firm. The website content is for informational purposes only and not legal advice. Sharma & Sharma Law Chambers LLP is not liable for any actions taken based on the information provided. All website content is the intellectual property of Sharma & Sharma Law Chambers LLP.</p>
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

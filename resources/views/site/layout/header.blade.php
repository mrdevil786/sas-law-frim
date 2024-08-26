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
        content="Sharma & Sharma Law Chambers LLP is a leading full-service law firm in Lucknow, offering expert legal services in civil litigation, property law, criminal law, and more since 2008. Contact our experienced lawyers in Lucknow for your legal needs." />
    <meta name="keywords"
        content="saslaw , saslawchambers , lawchambers , lawyers in lucknow , Top Lawyers in Lucknow , Best Lawyers in Lucknow , lawyers in lucknow , high court lawyers in lucknow  , civil lawyers in lucknow , criminal lawyers in lucknow , arbitration lawyers in lucknow , divorce lawyers in lucknow  , property lawyers in lucknow , RERA lawyers in lucknow , drt lawyers in lucknow ,  best lawyers in lucknow high court , aft lawyers in lucknow ,  best lawyers in lucknow , advocates in lucknow , best criminal lawyers in lucknow , family court lawyers in lucknow , top civil lawyers in lucknow , debts recovery lawyers in lucknow , best criminal lawyer in uttar pradesh , best lawyer in uttar pradesh , best advocate in lucknow high court" />
    <meta name="author" content="Adv. Mukul Sharma" />
    <!--<meta name="google-site-verification" content="KMlCZAZvaSaA2l2Wy_ym7NL0_lDjdY8xahW_koUqU7M" />-->
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Ranking" name="Best Law Firm in Lucknow" />
    <meta content="About Sharma & Sharma Law Chambers"
        name="Sharma & Sharma Law Chambers LLP is a legal firm established in the form of limited liability partnership working in areas of legal consultancy, practical implication of law and litigation in various field along with para legal services and managed by Mr. Mohit Sharma, Mr. Mukul Sharma & Mr. Rohit Sharma" />
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.ico') }}">
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
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('frontend/assets/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
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
                                    <li class="@yield('website-active-about')"><a href="{{ route('site.about') }}">About</a></li>
                                    <li><a href="#">Services</a>
                                        <ul class="submenu">
                                            <li class="@yield('website-active-services')"><a
                                                    href="{{ route('site.services') }}">Legal Services</a></li>
                                            <li class="@yield('website-active-para-legal')"><a
                                                    href="{{ route('site.para-legal') }}">Paralegal Services</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li><a href="/">Case Studies</a></li> --}}
                                    <li class="@yield('website-active-attorney')"><a href="{{ route('site.attorney') }}">Attorney</a>
                                    <li class="@yield('website-active-contact')"><a href="{{ route('site.contact') }}">Contact</a>
                                    </li>
                                    <li class="@yield('website-active-blog')"><a href="{{ route('site.blog') }}">Blog</a></li>
                                    {{-- <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                            <li><a href="case_details.html">Case Details</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <!-- Header-btn -->
                        <div class="header-btn d-none d-lg-block f-right">
                            <a href="#" class="btn header-btn">Get Consultation</a>
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

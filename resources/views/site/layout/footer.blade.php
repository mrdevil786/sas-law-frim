</main>
<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-bg footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <!-- logo -->
                        <div class="footer-logo text-center">
                            <a href="{{ route('site.dashboard') }}"><img
                                    src="{{ asset('frontend/assets/img/logo/logo.svg') }}" alt=""></a>
                        </div>
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <div class="footer-pera text-justify">
                                    <p>Sharma & Sharma Law Chambers LLP delivers reliable, expert legal services
                                        across all kind of criminal matters as explained in Practice Areas Section.
                                        As one of the best law firms in Lucknow, we offer effective legal solutions tailored to your needs.</p>
                                </div>
                            </div>
                        </div>
                        <!-- footer social -->
                        <div class="footer-social">
                            <a href="https://www.facebook.com/profile.php?id=100094712413339&mibextid=LQQJ4d"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/saslawchambers?t=DQTZCDfEIobSDcfsSTaDpg&s=09"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/company/sharma-associates-llp/"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/saslawchambers"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@saslawchambers"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="{{ route('site.dashboard') }}">Home</a></li>
                                <li><a href="{{ route('site.about') }}"> About Us</a></li>
                                <li><a href="{{ route('site.attorney') }}"> Attorney</a></li>
                                <li><a href="{{ route('blog.index') }}">Blog</a></li>
                                <li><a href="{{ route('site.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Services</h4>
                            <ul>
                                <li>NDPS Act</li>
                                <li>Dowry Death</li>
                                <li>Matrimonial Dispute</li>
                                <li>Matrimonial Dispute</li>
                                <li>Arms Act</li>
                                <li>TADA Act & POTA Act</li>
                                <li>C.B.I. & E.D</li>
                                <li>Negotiable Instrument Act (N.I. Act)</li>
                                <li>Income Tax & Sales Tax</li>
                                <li>Explosives Act</li>
                                <li>Cyber Crime</li>
                                <li>Corporate Matters</li>
                                <li>Bhartiya Nyaya Sanhita (B. N. S.).</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Newsletter</h4>
                            <div class="footer-pera footer-pera2">
                                <p>For Lastest update Sign up here</p>
                            </div>
                            <!-- Form -->
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form target="_blank"
                                        action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                        <input type="email" name="email" id="newsletter-form-email"
                                            placeholder="Email Address" class="placeholder hide-on-focus"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                        <div class="submit-btn">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                                class="email_icon newsletter-submit button-contactForm">
                                                Subscribe <i class="ti-angle-double-right"></i></button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area footer-bg">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-12">
                        <div class="footer-copy-right text-center">
                            <p>
                                Copyright &copy; {{ date('Y') }} <a href="#">{{ env('APP_NAME') }}</a> All
                                rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('frontend/assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/animated.headline.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.js') }}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{ asset('frontend/assets/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.sticky.js') }}"></script>

<!-- counter , waypoint -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>

<!-- counter -->
<script src="{{ asset('frontend/assets/js/contact.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/mail-script.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var popup = document.getElementById('acknowledge-popup');
        var acknowledgeBtn = document.getElementById('acknowledge-btn');

        // Check if the acknowledgment has already been made
        if (!localStorage.getItem('acknowledged')) {
            // Show the popup if not acknowledged
            popup.style.display = 'flex';
        }

        // Hide the popup and store the acknowledgment state when the button is clicked
        acknowledgeBtn.addEventListener('click', function() {
            popup.style.display = 'none';
            localStorage.setItem('acknowledged', 'true');
        });
    });
</script>
<!-- Initialize Slick Slider -->
<script>
    $(document).ready(function(){
        $('.attorneys-slider').slick({
            infinite: true,        // Infinite scroll
            slidesToShow: 3,       // How many slides visible at once
            slidesToScroll: 1,     // Number of slides to scroll at a time
            autoplay: true,        // Enable autoplay
            autoplaySpeed: 3000,   // Speed of autoplay (3 seconds)
            arrows: true,          // Show previous and next arrows
            dots: true,            // Show pagination dots
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,  // Show 2 slides on medium screens
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,  // Show 1 slide on small screens
                    }
                }
            ]
        });
    });
</script>
@yield('website-script-section')
</body>

</html>

@extends('site.layout.main')
@section('website-page-title', 'Services in Lucknow | Saslawchambers')
@section('website-active-gallery', 'active')
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
                            <h2>Gallery</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->
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
                    @foreach (['pg1', 'pg2', 'pg3', 'pg10', 'pg5', 'pg6', 'pg7', 'pg17'] as $image)
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
@endsection

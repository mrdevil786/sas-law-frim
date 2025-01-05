@extends('site.layout.main')
@section('website-page-title', 'Gallery | SAS Law Chambers LLP')
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
                    <div class="col-md-6">
                        <a href="{{ $gallery->image }}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url('{{ $gallery->image }}');">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->
@endsection

@extends('site.layout.main')
@section('website-page-title', 'Media & Publications')
@section('website-active-media', 'active')
@section('website-main-section')
    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="single-slider slider-height2 d-flex align-items-center"
            data-background="{{ asset('frontend/assets/img/hero/law_hero2.webp') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Media & Publications</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row" id="blog-list">
                @if ($allData->isEmpty())
                    <div class="col-12 text-center">
                        <h1>No Data Available!</h1>
                    </div>
                @else
                    @include('site.includes.global-card')
                @endif
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center min-vh-100">
                    <div class="submit-btn">
                        <div class="btn btn-primary" id="load-more">Load More</div>
                    </div>
                </div>
            </div>
            <!-- Spinner -->
            <div id="loading-spinner" class="d-flex justify-content-center" style="display: none;">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

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
@section('website-script-section')
    <script>
        $(document).ready(function() {
            let page = 1;
            $('#load-more').on('click', function() {
                page++;
                $('#loading-spinner').show();
                $.ajax({
                    url: "{{ route('media.index') }}",
                    type: 'GET',
                    data: {
                        page: page
                    },
                    success: function(response) {
                        $('#blog-list').append(response);
                        if (response.trim().length === 0) {
                            $('#load-more').hide();
                        }
                        $('#loading-spinner').hide();
                    },
                    error: function() {
                        $('#loading-spinner').hide();
                        alert('No more data available');
                    }
                });
            });
        });
    </script>
@endsection

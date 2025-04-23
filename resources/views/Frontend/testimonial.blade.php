@extends('app')

@section('content')

 <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
@include('includes.topbar')
@include('includes.navbar')

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Testimonials</h1>
                </div>
            </div>
        </div>

@include('includes.search')
@include('includes.demo')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/logo.png" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">John Waweru</h4>
                            <small class="text-uppercase">Director, ST.Peter's School</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        We are extremely pleased by services provided by Learnsoft Beliotech solutions. Their innovative solutions have greatly streamlined our operations and their support is unparalleled. Truly a game-changer
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/logo.png" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Jael Muoki</h4>
                            <small class="text-uppercase">Headteacher, Primerose Academy</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        We have been working with Learnsoft Beliotech Solution for years now, and they continue to exceed our expectations. TTheir commitment to excellence and cutting-edge solutions have been key factor to our success. 
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/logo.png" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Jane Kalonzo</h4>
                            <small class="text-uppercase">COO, Takwibu Sacco</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        The team at Learnsoft Beliotech Solutions is simply outstanding.Their attention to detail, prompt responses and dedication to client satisfaction makes them a valuable partner. We couldn't be happier. 
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/logo.png" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Wakio Emma</h4>
                            <small class="text-uppercase">Founder, Wakima Academy</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Learnsoft Beliotech Solutions has played a pivotal role in transforming our business processes. Their solutions are robust, user-friendly and have significantly contributed to our overall efficiency. Kudos to the team!
                    </div>
                </div>
            </div>
        </div>


@include('includes.vendor')

@include('includes.chat')

@include('includes.footer')

@endsection

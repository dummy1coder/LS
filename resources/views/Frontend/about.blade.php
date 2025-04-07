@extends('app')

@section('content')

 <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
@include('includes.topbar')

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ route('home') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ route('about') }}" class="h5 text-white">About</a>
                </div>
            </div>
        </div>

@include('includes.search')
@include('includes.demo')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">The Best IT Solution With 10 Years of Experience</h1>
                    </div>
                    <p class="mb-4">Learnsoft Beliotech Solutions is an award-winning company based in the vibrant Kenyan capital, Nairobi. We specialize in cutting-edge Software Design and Development, Process Automation through ERPs, and Graphic Design work.

                        As the leading provider of ERPS, our expertise extends across the Finance, Education, Health, and ICT sectors. Our flagship product, Learnsoft SchoolERP, is currently deployed in over 300 schools spanning Kenya, Uganda, and Tanzania.
                        
                        At Learnsoft Beliotech Solutions, we take pride in tailoring our software products to meet the unique needs of our clients. Our mission is to automate various sectors of the Kenyan economy, providing affordable, efficient, and reliable systems. Through our solutions, we empower organizations to realize a return on investment (ROI) and make informed decisions based on accurate data generated by our systems.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+254 711 667 919</h4>
                        </div>
                    </div>
                    <a href="{{ route('quote') }}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Demo</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/LSERP7.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('includes.whatsapp')

@include('includes.vendor')

@include('includes.footer')

@endsection

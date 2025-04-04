@extends('app')

@section('content')

 <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
@include('includes.topbar')

@include('includes.carousel')

@include('includes.search')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-primary text-uppercase"> Top Clients</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class=" text-white"></i>
                        </div>
                        <h4 class="mb-3">AIC Malivani</h4>
                        <p class="m-0"> 
                        Makueni County - A.I.C Malivani Boarding Primary School is a top performing public school in Makueni County
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class=" text-white"></i>
                        </div>
                        <h4 class="mb-3">Embu Top Mark Academy</h4>
                        <p class="m-0">
                        Embu County - Based in EMbu county, this school has held on to Learnsoft ERPs in their processes.
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class=" text-white"></i>
                        </div>
                        <h4 class="mb-3">Premese Academy</h4>
                        <p class="m-0">
                        Makueni County - A prestigious school, top performer which has embraced Learnsoft SchoolERP for transformation.
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class=" text-white"></i>
                        </div>
                        <h4 class="mb-3">St. Teresia Academy</h4>
                        <p class="m-0">
                        Kiambu County - A great school and a performer that uses Learnsoft products in it's operations.
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
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

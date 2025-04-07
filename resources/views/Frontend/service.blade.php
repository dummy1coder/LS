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
                    <h1 class="display-4 text-white animated zoomIn">Services</h1>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ route('home') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ route('service') }}" class="h5 text-white">Services</a>
                </div>
            </div>
        </div>

@include('includes.search')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Graphic Design</h4>
                        <p class="m-0"></p>
                        <a type="button" class="btn btn-lg btn-primary rounded hover-arrow" data-bs-toggle="modal" data-bs-target="#graphicModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                <div class="modal fade" id="graphicModal" tabindex="-1" aria-labelledby="graphicModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="luxHavenModalLabel">Graphic Design</h5>
      </div>
      <div class="modal-body">
        Content on Graphic Design
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Web Development</h4>
                        <p class="m-0"></p>
                        <a type="button" class="btn btn-lg btn-primary rounded hover-arrow" data-bs-toggle="modal" data-bs-target="#webModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                <div class="modal fade" id="webModal" tabindex="-1" aria-labelledby="webModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="luxHavenModalLabel">Web Development</h5>
      </div>
      <div class="modal-body">
        Content on Web Development
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Apps Development</h4>
                        <p class="m-0"></p>
                        <a type="button" class="btn btn-lg btn-primary rounded hover-arrow" data-bs-toggle="modal" data-bs-target="#appsModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                <div class="modal fade" id="appsModal" tabindex="-1" aria-labelledby="appsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="luxHavenModalLabel">Apps Development</h5>
      </div>
      <div class="modal-body">
        Content on Apps Development
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">SEO Optimization</h4>
                        <p class="m-0"></p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                        <a type="button" class="btn btn-lg btn-primary rounded hover-arrow" data-bs-toggle="modal" data-bs-target="#seoModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                <div class="modal fade" id="seoModal" tabindex="-1" aria-labelledby="seoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="luxHavenModalLabel">SEO Optimization</h5>
      </div>
      <div class="modal-body">
        Content on SEO Optimization
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Call Us For Quote and Demo</h3>
                        <p class="text-white mb-3"></p>
                        <h2 class="text-white mb-0">+254 711 667 919</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.whatsapp')
    
 @include('includes.vendor')

@include('includes.footer')

@endsection

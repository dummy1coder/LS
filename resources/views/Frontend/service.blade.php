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
                    <h1 class="display-4 text-white animated zoomIn">Services</h1>
                </div>
            </div>
        </div>

@include('includes.search')
@include('includes.demo')
<div class="container py-5">
    <div class="row">
    @if($services->isEmpty())
    <p>No services found.</p>
@endif
        @foreach($services as $service)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <div class="mb-3">
                            <!-- Assume 'icon' is a class or image URL -->
                            @if(Str::startsWith($service->icon, 'http'))
                                <img src="{{ $service->icon }}" alt="{{ $service->title }}" style="width:50px;">
                            @else
                                <i class="{{ $service->icon }} fa-3x text-warning"></i>
                            @endif
                        </div>
                        <h5 class="card-title">{{ $service->title }}</h5>
                        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#serviceModal{{ $service->id }}">
                            View Details
                        </button>
                    </div>
                </div>
            </div>

            <!--Modal-->
            <div class="modal fade" id="serviceModal{{ $service->id }}" tabindex="-1" aria-labelledby="serviceModalLabel{{ $service->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="serviceModalLabel{{ $service->id }}">{{ $service->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ $service->description }}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
        Learnsoft Beliotech Solutions improves the visibility of a website or web page on search engines.
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
        @endforeach
    </div>
</div>

    @include('includes.whatsapp')
    
 @include('includes.vendor')

 @include('includes.chat')

@include('includes.footer')

@endsection

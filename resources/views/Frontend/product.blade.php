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
                    <h1 class="display-4 text-white animated zoomIn">Products</h1>
                </div>
            </div>
        </div>

@include('includes.search')
@include('includes.demo')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-primary text-uppercase"> Products</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class=" fas fa-school text-white"></i>
                        </div>
                        <h4 class="mb-3">Learnsoft School ERP</h4>
                        <p class="m-0"> 
                        </p>
                        <a type="button" class="btn btn-lg btn-primary rounded hover-arrow" data-bs-toggle="modal" data-bs-target="#learnsoftModal">
    <i class="bi bi-arrow-right"></i>
</a>
    </div>
</div>

<div class="modal fade" id="learnsoftModal" tabindex="-1" aria-labelledby="learnsoftModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="luxHavenModalLabel">Learnsoft School ERP</h5>
      </div>
      <div class="modal-body">
        Content on Learnsoft School ERP
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
                            <i class="fas fa-church text-white"></i>
                        </div>
                        <h4 class="mb-3">Luminary Church ERP</h4>
                        <p class="m-0">
                        </p>
                        <a type="button" class="btn btn-lg btn-primary rounded hover-arrow" data-bs-toggle="modal" data-bs-target="#luminaryModal">
    <i class="bi bi-arrow-right"></i>
</a>
    </div>
</div>

<div class="modal fade" id="luminaryModal" tabindex="-1" aria-labelledby="luminaryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="luxHavenModalLabel">Luminary Church ERP</h5>
      </div>
      <div class="modal-body">
        Content on Luminary Church ERP
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
                            <i class="fas fa-users-cog text-white"></i>
                        </div>
                        <h4 class="mb-3">Belio HR and Payroll</h4>
                        <p class="m-0">
                        </p>
                        <a type="button" class="btn btn-lg btn-primary rounded hover-arrow" data-bs-toggle="modal" data-bs-target="#belioModal">
    <i class="bi bi-arrow-right"></i>
</a>
    </div>
</div>

<div class="modal fade" id="belioModal" tabindex="-1" aria-labelledby="belioModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="luxHavenModalLabel">Belio HR and Payroll</h5>
      </div>
      <div class="modal-body">
        Content on Belio HR and Payroll
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
                            <i class="fas fa-users text-white"></i>
                        </div>
                        <h4 class="mb-3">Chamacove ERP</h4>
                        <p class="m-0">
                        </p>
                        <a type="button" class="btn btn-lg btn-primary rounded hover-arrow" data-bs-toggle="modal" data-bs-target="#chamacoveModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
    </div>
</div>

<div class="modal fade" id="chamacoveModal" tabindex="-1" aria-labelledby="chamacoveModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="luxHavenModalLabel">Chamacove ERP</h5>
      </div>
      <div class="modal-body">
        Content on Chamacove ERP
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
            <i class="fas fa-building text-white"></i>
        </div>
        <h4 class="mb-3">Lux Haven ERP</h4>
       
        <a type="button" class="btn btn-lg btn-primary rounded hover-arrow" data-bs-toggle="modal" data-bs-target="#luxHavenModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
    </div>
</div>

<div class="modal fade" id="luxHavenModal" tabindex="-1" aria-labelledby="luxHavenModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="luxHavenModalLabel">Lux Haven ERP</h5>
      </div>
      <div class="modal-body">
        Content on Lux Haven ERP
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
                            <i class="fas fa-cash-register text-white"></i>
                        </div>
                        <h4 class="mb-3">TOPPOS POS</h4>
                        <p class="m-0">
                        </p>
                        <a type="button" class="btn btn-lg btn-primary rounded hover-arrow" data-bs-toggle="modal" data-bs-target="#topposModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                <div class="modal fade" id="topposModal" tabindex="-1" aria-labelledby="topposModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="luxHavenModalLabel">TOPPOS POS</h5>
      </div>
      <div class="modal-body">
        Content on TOPPOS POS
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
                            <i class="fas fa-home text-white"></i>
                        </div>
                        <h4 class="mb-3">Rentezy Property Management ERP</h4>
                        <p class="m-0">
                        </p>
                        <a type="button" class="btn btn-lg btn-primary rounded hover-arrow" data-bs-toggle="modal" data-bs-target="#rentezyModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                <div class="modal fade" id="rentezyModal" tabindex="-1" aria-labelledby="rentezyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="luxHavenModalLabel">Rentezy Property Management ERP</h5>
      </div>
      <div class="modal-body">
        Content on Rentezy Property Management ERP
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
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Slickdocs EDMS</h4>
                        <p class="m-0">
                        </p>
                        <a type="button" class="btn btn-lg btn-primary rounded hover-arrow" data-bs-toggle="modal" data-bs-target="#slickdocsModal">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                <div class="modal fade" id="slickdocsModal" tabindex="-1" aria-labelledby="slickdocsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="luxHavenModalLabel">Slickdocs EDMS</h5>
      </div>
      <div class="modal-body">
        Content on Slickdocs EDMS
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
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

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

<!-- resources/views/products/index.blade.php -->
<div class="container">
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <div class="mb-3">
                        @if(Str::startsWith($product->icon, 'http'))
                                <img src="{{ $product->icon }}" alt="{{ $product->title }}" style="width:50px;">
                            @else
                                <i class="{{ $product->icon }} fa-3x text-warning"></i>
                            @endif
                        </div>
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id }}">
                            View Details
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" aria-labelledby="productModalLabel{{ $product->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel{{ $product->id }}">{{ $product->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ $product->description }}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>

<!--div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
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
        <p>
         Learnsoft School ERP is designed to streamline and integrate the management of various administrative tasks within a school. It helps school administrators, teachers, and staff manage day-to-day operations efficiently, while also improving communication between students, parents, and the school community.
        </p>
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
        <p>
        Luminary Chrch ERP is designed to help churches manage their various administrative, financial, and operational tasks in a centralized way. It typically includes modules for managing finances, memberships, event scheduling, donations, communication, and more.
        </p>
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
        <p>
         Belio HR and Payroll is designed to streamline and automate the human resources (HR) and payroll functions of an organization. These system helps HR team manage employees, payroll, benefits, performance, compliance, and other HR-related tasks more efficiently.
        </p>
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
        <p>
         Chamacove ERP is designed to help streamline the management of Chama groups by automating key processes like accounting, member management, loan tracking, and financial reporting.
        </p>
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
        <p>
         Rentezy Property Management ERP is designed to help real estate owners, property managers, and real estate companies efficiently manage their properties, tenants, leases, maintenance tasks, finances, and overall operations. 
        </p>
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
        Slickdocs EDMS is designed to manage, store, track, and organize electronic documents and images.
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
    </div-->

@include('includes.whatsapp')
    
@include('includes.vendor')

@include('includes.chat')

@include('includes.footer')

@endsection

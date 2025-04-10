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
                    <h1 class="display-4 text-white animated zoomIn">Top Clients</h1>
                    
                </div>
            </div>
        </div>

@include('includes.search')
@include('includes.demo')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Top Clients</h5>
                <h1 class="mb-0">Clients we've helped achieve their business goals and drive growth</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/aicmalivani.jpg" alt="" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">AIC Malivani</h4>
                            <p class="text-uppercase m-0">Boarding Primary School is a top performing public school in Makueni County</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/embutopmark.jpg" alt="" style="height: 250px; object-fit: cover; object-position: top;">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Embu Top Mark Academy</h4>
                            <p class="text-uppercase m-0">A prestigious school, top performer which has embraced Learnsoft SchoolERP for transformation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/premese.jpeg" alt="" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Premese Academy</h4>
                            <p class="text-uppercase m-0">A prestigious school, top performer which has embraced Learnsoft SchoolERP for transformation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/teresia.jpg" alt="" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">ST.Teresia Academy</h4>
                            <p class="text-uppercase m-0">A great school and a performer that uses Learnsoft products in it's operations.</p>
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

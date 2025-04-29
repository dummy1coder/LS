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

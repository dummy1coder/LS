@extends('app')

@section('content')

 <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
@include('includes.topbar')

@include('includes.navbar')

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Quote</h1>
                </div>
            </div>
        </div>

@include('includes.search')
@include('includes.demo')
<div class="row align-items-center">
    <div class="col-lg-6 mb-4 mb-lg-0">
        <h6 class="text-orange fw-bold text-uppercase">Request A Quote/Demo</h6>
        <h2 class="fw-bold mb-3">Need A Free Quote/Demo? Please Feel Free to Contact Us</h2>
        <div class="mb-3 d-flex align-items-center">
            <i class="fa fa-reply fa-lg me-2 text-orange"></i>
            <span>Reply within 24 hours</span>
        </div>
        <div class="mb-3 d-flex align-items-center">
            <i class="fa fa-phone fa-lg me-2 text-orange"></i>
            <span>24 hrs telephone support</span>
        </div>
        <div class="d-flex align-items-center bg-info p-3 rounded text-white">
            <i class="fa fa-phone-alt fa-2x me-3"></i>
            <div>
                <p class="mb-1">Call to ask any question</p>
                <h4 class="mb-0 fw-bold text-white">+254 711 667 919</h4>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <form action="{{ route('send.contact') }}" method="POST" style="background-color: #03A9F4; padding: 30px; border-radius: 6px;">
            @csrf

            @if (session('success'))
                <div class="alert alert-success text-center mb-3">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger text-center mb-3">{{ session('error') }}</div>
            @endif

            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required style="background-color: #E6F7FF; border: none;">
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required style="background-color: #E6F7FF; border: none;">
            </div>
            <div class="mb-3">
                <select name="subject" class="form-select" required style="background-color: #E6F7FF; border: none;">
                    <option value="" disabled selected>Select Inquiry</option>
                    <option value="Quote Request">Quote Request</option>
                    <option value="Demo Request">Demo Request</option>
                    <option value="General Question">General Question</option>
                </select>
            </div>
            <div class="mb-3">
                <textarea name="message" class="form-control" rows="4" placeholder="Message" required style="background-color: #E6F7FF; border: none;"></textarea>
            </div>
            <div class="mb-3">
                <button class="btn w-100 text-white" style="background-color: #002147;" type="submit">
                    Request A Quote/Demo
                </button>
            </div>
        </form>
    </div>
</div>

    @include('includes.whatsapp')


@include('includes.vendor')

@include('includes.footer')

@endsection

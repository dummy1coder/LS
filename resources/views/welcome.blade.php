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

@include('includes.demo')

@include('includes.facts')

@include('includes.about')

@include('includes.contact')

@include('includes.features')

@include('includes.service')

@include('includes.quote')

@include('includes.testimonial')

@include('includes.vendor')

@include('includes.footer')
    


    <!-- Back to Top -->
    <a href="{{ route('home') }}" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    


@endsection

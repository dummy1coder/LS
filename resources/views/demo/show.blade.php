@extends('app')

@section('content')
<div class="container py-5">
    <h1 class="text-center">{{ $demo->name }} Demo</h1>
    <p class="text-center">This is the {{ $demo->name }} system demo page.</p>
    
    <div class="text-center mt-4">
        <i class="bi bi-{{ $demo->icon }} fa-5x text-primary mb-4"></i>
        @if($demo->url)
            <div>
                <a href="{{ $demo->url }}" class="btn btn-success" target="_blank">Launch {{ $demo->name }} Demo</a>
            </div>
        @endif
    </div>
</div>
@endsection

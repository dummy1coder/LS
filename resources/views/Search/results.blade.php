@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4>Search Results for "{{ $query }}"</h4>

    @if($results->isEmpty())
        <p>No results found.</p>
    @else
        <ul class="list-group">
            @foreach($results as $result)
                <li class="list-group-item">{{ $result->name }} - {{ $result->description }}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection

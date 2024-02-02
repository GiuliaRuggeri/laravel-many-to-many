@extends('layouts.admin')

@section('content')

<div class="col-md-4">
    <div class="card">
        <div class="card-header text-center">{{ $movie->title }}</div>
        <div class="card-body d-flex flex-column align-items-center">
            <img class="img-fluid w-50" src="{{ $movie->poster_image }}" alt="">
            <p class="mt-2">{{ $movie->description }}</p>
            <p>{{ $movie->date }}</p>
            <p> {{ $movie->duration }}</p>
        </div>
    </div>
</div>
@endsection
@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">{{ $movie->title }}</div>
                        <h6 class="card-subtitle mb-2 text-muted mt-2 ms-2">
                            {{ $movie->type ? $movie->type->name : 'no type' }}
                        </h6>
                        <div class="card-body d-flex flex-column align-items-center">
                            <img class="img-fluid w-50" src="{{ $movie->poster_image }}" alt="">
                            <p class="mt-2">{{ $movie->description }}</p>
                            @if (count($movie->technologies) > 0)
                            <ul>
                                @foreach ($movie->technologies as $technology)
                                    <li>{{ $technology->name }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>No technologies</p>
                        @endif
                            <p>{{ $movie->date }}</p>
                            <p> {{ $movie->duration }}</p>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('admin.movies.show', $movie->id) }}"><button
                                        class="btn btn-primary mt-2 mb-2 me-2 text-center">View more</button></a>
                                <a href="{{ route('admin.movies.edit', $movie->id) }}"><button
                                        class="btn btn-primary mt-2 mb-2 text-center">Edit</button></a>
                                        <div class="d-flex justify-content-center mt-2 mb-2 ms-2">
                                            <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" class="" id="delete">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                            </form>
                                        </div>
    
    
                            </div>
                            


                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('content')
    <h3 class="mt-2">Technologies</h3>

    <ul>
        @foreach ($technologies as $technology)
            <li>
                {{ $technology->name }}
                <a href="{{ route('admin.technologies.show', $technology->id) }}"><button
                    class="btn btn-primary mt-2 mb-2 me-2 text-center">View more</button></a>
            <a href="{{ route('admin.technologies.edit', $technology->id) }}"><button
                    class="btn btn-primary mt-2 mb-2 text-center">Edit</button></a>
            </li>
            <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST" class=""
                id="delete">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        @endforeach
    </ul>
@endsection

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="mt-2">Types List</h1>
            <ul class="mt-2">
                @foreach ($types as $type)
                    <li>
                        {{ $type->name }}: {{ $type->description }}
                        <a href="{{ route('admin.types.show', $type->id) }}"><button
                                class="btn btn-primary mt-2 mb-2 me-2 text-center">View more</button></a>
                        <a href="{{ route('admin.types.edit', $type->id) }}"><button
                                class="btn btn-primary mt-2 mb-2 text-center">Edit</button></a>
                        <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST" class=""
                            id="delete">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </li>
                @endforeach
            </ul>

        </div>

    </div>
@endsection

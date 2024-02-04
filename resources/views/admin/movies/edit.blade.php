@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="container">
            <div class="row">
                <h2 class="">Edit movie</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="row">
                <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST" class="">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" value="{{ old('title') ?? $movie->title }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') ?? $movie->description }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="text" class="form-control @error('date') is-invalid @enderror" id="date"
                            name="date" value="{{ $movie->date }}">
                        @error('date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration"
                            name="duration" value="{{ old('duration') ?? $movie->duration }}">
                        @error('duration')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="poster_image" class="form-label">Poster image</label>
                        <input type="text" class="form-control @error('poster_image') is-invalid @enderror"
                            id="poster_image" name="poster_image"
                            value="{{ old('poster_image') ?? $movie->poster_image }}">
                        @error('poster_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                     {{-- Selezione tipo --}}
                     <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select name="type_id" id="type_id" class="form-select">
                            <option value="">No type</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Selezione tecnologia --}}
                    
                    <div class="mb-3">
                        <label for="technologies" class="form-label">Technology</label>
                        <select multiple name="technologies[]" id="technologies" class="form-select">
                            <option value="">No technology</option>
                            @foreach ($technologies as $technology)
                    
                                <option value="{{ $technology->id }}" 
                                    @selected(in_array($technology->id, $movie->technologies->pluck('id')->toArray()))
                                    
                                    
                                    >{{ $technology->name }}</option>
                            @endforeach 
                        </select>
                    </div>



                    <button type="submit" class="btn btn-primary mb-2">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection

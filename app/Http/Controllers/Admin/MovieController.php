<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use App\Models\Movie;
use App\Models\Type;
use App\Models\Technology;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        $types = Type::all();
        $technologies = Technology::all();
        
        return view("admin.movies.index", compact("movies", "types", "technologies" ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $technologies = Technology::all();

        return view("admin.movies.create", compact("types", "technologies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        $validated_data = $request->validated();

        $newMovie = new Movie();
        $newMovie->fill($validated_data);
        $newMovie->save();

        if ($request->technologies) {
            $newMovie->technologies()->attach($request->technologies);
        }


       return redirect()->route("admin.movies.index");

    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
       
           

        return view("admin.movies.show", compact("movie"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)

    {
        $types = Type::all();
        $technologies = Technology::all();

        return view("admin.movies.edit", compact("movie", "types", "technologies"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {

        $validated_data = $request->validated();
        $movie->update($validated_data);

        return redirect()->route('admin.movies.show', $movie->id);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('admin.movies.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genre')->get();
        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('admin.movies.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|integer',
            'release_date' => 'required|date',
            'rating' => 'required|numeric|min:0|max:10',
            'genre_id' => 'required|exists:genres,id',
            'language' => 'required|string',
            'cast' => 'required|string',
        ]);

        Movie::create($request->all());

        return redirect()->route('admin.movies.index')->with('success', 'Movie created successfully.');
    }

    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        return view('admin.movies.edit', compact('movie', 'genres'));
    }

    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|integer',
            'release_date' => 'required|date',
            'rating' => 'required|numeric|min:0|max:10',
            'genre_id' => 'required|exists:genres,id',
            'language' => 'required|string',
            'cast' => 'required|string',
        ]);

        $movie->update($request->all());

        return redirect()->route('admin.movies.index')->with('success', 'Movie updated successfully.');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('admin.movies.index')->with('success', 'Movie deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Watchlist;

class DashboardController extends Controller
{
    public function index()
    {
        $statistics = [
            'totalUsers' => User::count(),
            'totalGenres' => Genre::count(),
            'totalMovies' => Movie::count(),
            'totalMoviesWatched' => Watchlist::count(),
        ];

        $movies = Movie::latest()->take(5)->get();

        return view('admin.dashboard', compact('statistics', 'movies'));
    }
}

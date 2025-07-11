<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class WatchlistController extends Controller
{
    public function index()
    {
        $watchlist = DB::table('watchlist')
            ->join('users', 'watchlist.user_id', '=', 'users.id')
            ->join('movies', 'watchlist.movie_id', '=', 'movies.id')
            ->select('users.name as user', 'movies.name as movie')
            ->get();

        return view('admin.watchlist.index', compact('watchlist'));
    }
}

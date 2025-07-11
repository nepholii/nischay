<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class FavouriteController extends Controller
{
    public function index()
    {
        $favourites = DB::table('favourite')
            ->join('users', 'favourite.user_id', '=', 'users.id')
            ->join('movies', 'favourite.movie_id', '=', 'movies.id')
            ->select('users.name as user', 'movies.name as movie')
            ->get();

        return view('admin.favourites.index', compact('favourites'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaysController extends Controller
{
    public function index()
    {
        return view('plays');
    }
}

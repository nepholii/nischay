<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


$name = "Nischay";
$title="Summer class";


$age = 20;

$height = 5.9;


$isStudent = true;


$colors = ["red", "green", "blue"];


$user = [
    "name" => "Nischay",
    "age" => 20
];

// Null
$empty = null;

        return view('index');
    }
}

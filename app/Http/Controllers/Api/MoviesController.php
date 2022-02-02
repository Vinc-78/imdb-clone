<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Movie;
use App\Category;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $moviesData = Movie::all();

        return response()->json($moviesData);
    }

    
    public function filter(){
        $movies = Movie::with("categories")->get();

        return response()->json($movies);
    }
}

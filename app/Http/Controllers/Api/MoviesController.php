<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $moviesData = Movie::all();

        return response()->json($moviesData);
    }
}

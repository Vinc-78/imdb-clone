<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categorie = Category::orderBy("name")->with("movies")->get();

        return $categorie;
    }

    public function filter($id)
    {
        $categoryMovie = Category::with("movies")->where("id", $id)->first();

        return response()->json($categoryMovie);
    }
}

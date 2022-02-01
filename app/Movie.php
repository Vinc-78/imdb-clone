<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movies";

    function categories()
    {

        return $this->belongsToMany('App\Category', "movie_category")->withTimestamps();
    }
}

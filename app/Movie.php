<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    function categories() {

        return $this->hasMany('App\Category');
    }
}

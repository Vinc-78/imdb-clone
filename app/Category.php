<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function categories() {

        return $this->hasMany('App\Movie');
    }
}

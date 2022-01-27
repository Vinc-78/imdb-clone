<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model

{

    protected $table="categories";
    
    function categories() {

        return $this->belongsToMany('App\Movie');
    }
}

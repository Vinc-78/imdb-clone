<?php

namespace App\Http\Controllers;

use App\Category;
use App\Movie;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function index(Request $request)
    {
       $filtri =$request->query();

      /*  dd($filtri); */
       
      $datiFiltrati = Movie::with('categories');

      foreach($filtri as $key =>$value){

        if($key ==="categories"){

            $datiFiltrati = $datiFiltrati->whereHas('categories' , function(Builder $query) use ($value){
                $query->where("categories.id", $value);
            });

        }else{

            $datiFiltrati = $datiFiltrati->where($key, "like", "%$value%");

        }


      }

        $datiFiltrati = $datiFiltrati->get();
      
        $data = Movie::with('categories')->get();

        return view('guests.home', [
            "movies" => $data,
            "datiFiltrati" => $datiFiltrati,
            "categories" => Category::all()
        ]);
        
    }
}

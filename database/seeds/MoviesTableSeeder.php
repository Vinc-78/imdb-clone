<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  

        $movies = [
            [  
                "title"=>"Batman",
                "description" => "Batman è stato originariamente introdotto come uno spietato vigilante che spesso uccideva o mutilava criminali, ma si è evoluto in un personaggio con un codice morale,
                 rigoroso e un forte senso di giustizia. La forza trainante del personaggio di Bruce Wayne è l'omicidio dei suoi genitori e la loro assenza.",
                 "coverImg"=>"https://upload.wikimedia.org/wikipedia/it/1/19/Batman_3_variant.jpg",
                 "release_date" => "10/05/1998",
                 "durata"=>" 1.54",
                 "rating"=> "7",
                 "pegi"=>"+18",
            ],
            [
                "title"=>"Avatar",
                "description" => "Avatar è stato originariamente introdotto come uno spietato vigilante che spesso uccideva o mutilava criminali, ma si è evoluto in un personaggio con un codice morale
                 rigoroso e un forte senso di giustizia. La forza trainante del personaggio di Bruce Wayne è l'omicidio dei suoi genitori e la loro assenza.",
                 "coverImg"=>"https://static.fanpage.it/wp-content/uploads/sites/17/2019/12/1540893430_avatar-1200x1200.jpg",
                 "release_date" => "10/05/1994",
                 "durata"=>" 2.54",
                 "rating"=> "8",
                 "pegi"=>"+18",
            ],
            [
                "title"=>"Spider-Man",
                "description" => "Spiderman è stato originariamente introdotto come uno spietato vigilante che spesso uccideva o mutilava criminali, ma si è evoluto in un personaggio con un codice morale
                 rigoroso e un forte senso di giustizia. La forza trainante del personaggio di Bruce Wayne è l'omicidio dei suoi genitori e la loro assenza.",
                 "coverImg"=>"https://www.focus.it/site_stored/imgs/0004/011/spider-man-2002.1020x680.jpg",
                 "release_date" => "10/05/1994",
                 "durata"=>" 2.54",
                 "rating"=> "8",
                 "pegi"=>"+18",
            ]
            ];

        foreach ($movies as $key => $value) {
            $movie = new Movie();
            $movie->title = $value["title"];
            $movie->coverImg = $value["coverImg"];
            $movie->description= $value["description"];
            $movie->release_date = $value["release_date"];
            $movie->durata=$value["durata"];
            $movie->rating=$value["rating"];
            $movie->pegi=$value["pegi"];
            $movie->save();
        }
        
    }
}

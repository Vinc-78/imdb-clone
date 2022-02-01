<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['fantasy', 'horror', 'animazione', 'commedia', 'avventura', 'azione', 'biografico'];

        foreach ($categories as $category) {

            $newcategory = new Category();
            $newcategory->name = $category;
            $newcategory->save();
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $comics = config('comics');
        foreach ($comics as $comic){
            $newComic = new Product();
            $newComic-> title = $comic['title'];
            $newComic-> description = $comic['description'];
            $newComic-> series = $comic['series'];
            $newComic-> thumb = $comic['thumb'];
            $newComic-> price = $comic['price'];
            $newComic-> sale_date = $comic['sale_date'];
            $newComic-> type = $comic['type'];
            $newComic-> save();
        }
        
    }
}

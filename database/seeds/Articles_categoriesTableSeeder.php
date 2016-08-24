<?php

use Illuminate\Database\Seeder;

class Articles_categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // CREATION DE 10 ARTICLE CATEGORIE
        factory(App\Article_categorie::class, 10)->create();


    }
}

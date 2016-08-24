<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Article::class, 10)->create()->each(function ($article)  {

            $article->article_categorie_id = rand(1,9);
            $article->media_id = rand(1,9);

            $article->save(); // persist
        });
    }
}


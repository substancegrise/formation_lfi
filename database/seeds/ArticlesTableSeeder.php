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
        factory(App\Article::class, 10)->create()->each(function ($media)  {

            $ext = '.jpg';

            $uri = str_random(12) . $ext;

            $media->uri = $uri;


            $media->save(); // persist

            $fileName = file_get_contents('http://lorempicsum.com/nemo/627/300/' . rand(1, 9));

            $uploads = public_path(env('UPLOADS'));

            File::put(

                $uploads . DIRECTORY_SEPARATOR . $uri, $fileName
            );

        });
    }

}


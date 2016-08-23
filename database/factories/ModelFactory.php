<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {

    $role = ['moderateur', 'formateur', 'eleve'];
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'role'=>$role[rand(0,2)],
        'uri'=>'faker_maphoto.jpg'
    ];
});

$factory->define(App\Media::class, function (Faker\Generator $faker) {


    $titles = array('Apero wodpress', 'Apero php', 'Apero jQuery', 'Apero laravel', 'Apero mobile');
    $type = ['video', 'image', 'pdf'];

    return [
        'title' => $titles[rand(0,4)],
        'date_event' => $faker->dateTimeBetween($startDate= 'now', $endDate='+1 years'),
        'abstract' => $faker->paragraph(),
        'status' => $type[rand(0,2)],
        'content' => $faker->text(),
    ];
});


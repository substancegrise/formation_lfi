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


    return [
        'titre' => $faker->name,
    ];
});

$factory->define(App\Formation::class, function (Faker\Generator $faker) {



    return [
        'titre' => $faker->name,
        'presentation' => $faker->paragraphs,
        'debut' => $faker->dateTimeBetween($startDate= 'now', $endDate='+1 years'),
        'fin' => $faker->dateTimeBetween($startDate= '+1 years', $endDate='+2 years'),

    ];
});

$factory->define(App\Formation_categorie::class, function (Faker\Generator $faker) {

    $titre = array('Chargé de production', 'Régisseur de production', 'Production de musique electronique', 'technicien de plateau');
    return [
        'titre' =>$titre[rand(0,3)],
        'description' => $faker->paragraph(),
    ];
});

$factory->define(App\Formation_type::class, function (Faker\Generator $faker) {

    $titre = array('formation longue', 'formation courte', 'formation module', 'formation presentiel');
    return [
        'titre' =>$titre[rand(0,3)],

    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {


    $status = ['published', 'unpublished'];
    return [
        'titre' => $faker->name,
        'description' => $faker->paragraph(),
        'content' => $faker->text,
        'adresse' => $faker->address,
        'status' => $status[rand(0,1)],
        'date_event' => $faker->dateTimeBetween($startDate= 'now', $endDate='+1 years'),


    ];
});

$factory->define(App\Article_categorie::class, function (Faker\Generator $faker) {

    $titre = array('formation', 'evenement', 'Trema', 'autre');
    return [
        'titre' =>$titre[rand(0,3)],
    ];
});

$factory->define(App\Temoignage::class, function (Faker\Generator $faker) {

    $color = ['red', 'black'];

    return [
        'nom' => $faker->name,
        'titre' => $faker->paragraphs,
        'fonction' => $faker->company,
        'texte' => $faker->text,
        'color' => $color[rand(0,1)],

    ];
});
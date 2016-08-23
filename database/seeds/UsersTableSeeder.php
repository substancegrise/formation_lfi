<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 2)->create();

        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.fr',
                'password' => Hash::make('admin'),
                'role'=> 'admin',
                'uri'=> 'maphoto.jpg',
                'remember_token' => str_random(10),
            ],
            [
                'name' => 'moderateur',
                'email' => 'moderateur@moderateur.fr',
                'password' => Hash::make('moderateur'),
                'role'=> 'moderateur',
                'uri'=> 'maphoto.jpg',
                'remember_token' => str_random(10),
            ]
        ]);
    }
}
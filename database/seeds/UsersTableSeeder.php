<?php

use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        User::create([
            'name' => 'Тимур',
            'forename' => 'Тимур',
            'surname' => 'Рагимханов',
            'patronymic' => '',
            'email' => 'admin@autohire.loc',
            'password' => '$2y$10$L5aRc5gDSFDgKA/TTzQtFe17pztBd.KAkZmRl6oIFlnykL/chawzm',
            'status' => 'active',
            'role' => 'admin',
            'phone' => '+79290076889',
            'about' => $faker->realText(1500, 2),
        ]);

        factory(User::class, 10)->create();
    }
}

<?php

use App\Entity\User\Group;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name' => 'Собственник',
            'author_id' => 1,
            'slug'  => Str::slug('Собственник')
        ]);

        Group::create([
            'name' => 'Арендатор',
            'author_id' => 1,
            'slug'  => Str::slug('Арендатор')
        ]);
    }
}

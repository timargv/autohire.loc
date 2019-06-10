<?php

use App\Entity\Tenant\BlackList;
use App\Entity\Tenant\BlackListComment;
use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BlackList::class, 10)->create();
        factory(BlackListComment::class, 10)->create();
    }
}

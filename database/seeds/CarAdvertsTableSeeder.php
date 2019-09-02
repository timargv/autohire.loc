<?php

use App\Entity\Cars\Advert\Advert;
use Illuminate\Database\Seeder;

class CarAdvertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Advert::class, 10)->create();


    }
}

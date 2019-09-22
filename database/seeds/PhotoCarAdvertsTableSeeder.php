<?php

use App\UseCases\CarAdverts\PhotoService;
use Illuminate\Database\Seeder;

class PhotoCarAdvertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(\App\Entity\Cars\Advert\Photo::class, 50)->create();

        $i = 1;
        while ($i <= 10)
        {
            $carAdvertId = random_int(1, 10);
            $service = new PhotoService();
            $filePhoto = ['https://source.unsplash.com/1600x900/?auto,bmw'];
            $service->addPhoto($carAdvertId, $filePhoto);
            $i++;
        }
    }
}

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
        factory(Advert::class, 50)->create();

        $body = array("Седан", "Хэтчбек", "Хэтчбек 3 дв.", "Хэтчбек 5 дв.", "Лифтбек", "Внедорожники", "Внедорожник 3 дв.", "Внедорожник 5 дв.", "Универсал", "Купе", "Минивэн", "Пикап", "Лимузин", "Фургон", "Кабриолет");
        $mehanix = array("Автоматическая", "Робот", "Вариатор", "Механическая");
        $engine = array("Бензин", "Дизель", "Гибрид", "Электро", "Турбированный", "Атмосферный", "Газобаллонное оборудование");
        $round = array("Передний", "Задний", "Полный");
        $vObyem = array('0.2 л','0.4 л','0.6 л','0.8 л','1.0 л','1.2 л','1.4 л','1.6 л','1.8 л','2.0 л','2.2 л','2.4 л','2.6 л','2.8 л','3.0 л','3.5 л','4.0 л','4.5 л','5.0 л','5.5 л','6.0 л','7.0 л','8.0 л','9.0 л','10.0 л');

        $i = 1;
        while ($i <= 50)
        {
            $carAdvert = Advert::findOrFail($i);
            $carAdvert->values()->create(['car_attribute_id' => 1,'value' => Arr::random($body)]);
            $carAdvert->values()->create(['car_attribute_id' => 2,'value' => Arr::random($mehanix)]);
            $carAdvert->values()->create(['car_attribute_id' => 3,'value' => Arr::random($engine)]);
            $carAdvert->values()->create(['car_attribute_id' => 4,'value' => Arr::random($vObyem)]);
            $carAdvert->values()->create(['car_attribute_id' => 5,'value' => Arr::random($round)]);
            $i++;
        }
    }
}

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

        $i = 1;
        while ($i <= 50)
        {
            $carAdvert = Advert::findOrFail($i);
            $carAdvert->values()->create(['car_attribute_id' => 1,'value' => Arr::random($body)]);
            $carAdvert->values()->create(['car_attribute_id' => 2,'value' => Arr::random($mehanix)]);
            $carAdvert->values()->create(['car_attribute_id' => 3,'value' => Arr::random($engine)]);
            $carAdvert->values()->create(['car_attribute_id' => 4,'value' => random_int(1, 5) . ' л.']);
            $carAdvert->values()->create(['car_attribute_id' => 5,'value' => Arr::random($round)]);
            $i++;
        }
    }
}

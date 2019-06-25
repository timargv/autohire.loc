<?php

use App\Entity\Cars\Attribute;
use Illuminate\Database\Seeder;

class CarAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::create(['name' => 'Кузов', 'type' => 'string', 'is_visible' => 'on', 'sort' => 1, 'status' => 'on', 'required' => 1, 'variants' => ['Седан',
        'Хэтчбек',
        'Хэтчбек 3 дв.',
        'Хэтчбек 5 дв.',
        'Лифтбек',
        'Внедорожники',
        'Внедорожник 3 дв.',
        'Внедорожник 5 дв.',
        'Универсал',
        'Купе',
        'Минивэн',
        'Пикап',
        'Лимузин',
        'Фургон',
        'Кабриолет']]);

        Attribute::create(['name' => 'Коробка', 'type' => 'string', 'is_visible' => 'on', 'sort' => 1, 'status' => 'on', 'required' => 1, 'variants' => [
            'Автоматическая',
            'Робот',
            'Вариатор',
            'Механическая']]);

        Attribute::create(['name' => 'Двигатель', 'type' => 'string', 'is_visible' => 'on', 'sort' => 1, 'status' => 'on', 'required' => 1, 'variants' => [
            'Бензин',
            'Дизель',
            'Гибрид',
            'Электро',
            'Турбированный',
            'Атмосферный',
            'Газобаллонное оборудование']]);

        Attribute::create(['name' => 'Привод', 'type' => 'string', 'is_visible' => 'on', 'sort' => 1, 'status' => 'on', 'required' => 1, 'variants' => [
            'Передний',
            'Задний',
            'Полный']]);
    }
}

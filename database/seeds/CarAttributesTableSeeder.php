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

        Attribute::create(['name' => 'Объем', 'type' => 'string', 'is_visible' => 'on', 'sort' => 1, 'status' => 'on', 'required' => 1, 'variants' => [
            '0.2 л',
            '0.4 л',
            '0.6 л',
            '0.8 л',
            '1.0 л',
            '1.2 л',
            '1.4 л',
            '1.6 л',
            '1.8 л',
            '2.0 л',
            '2.2 л',
            '2.4 л',
            '2.6 л',
            '2.8 л',
            '3.0 л',
            '3.5 л',
            '4.0 л',
            '4.5 л',
            '5.0 л',
            '5.5 л',
            '6.0 л',
            '7.0 л',
            '8.0 л',
            '9.0 л',
            '10.0 л'
        ]]);

        Attribute::create(['name' => 'Привод', 'type' => 'string', 'is_visible' => 'on', 'sort' => 1, 'status' => 'on', 'required' => 1, 'variants' => [
            'Передний',
            'Задний',
            'Полный']]);




    }
}

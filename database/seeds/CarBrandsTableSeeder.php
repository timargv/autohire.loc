<?php

use App\Entity\Categories\Car\CarBrand;
use Illuminate\Database\Seeder;

class CarBrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'AC', 'name_ru' => 'АС', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('AC')]);
            $carBrand->saveOrFail();

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Acura', 'name_ru' => 'Акура', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Acura')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'CL', 'name_ru' => 'CL', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CL')]);
            $carBrand->children()->create(['name' => 'CSX', 'name_ru' => 'CSX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CSX')]);
            $carBrand->children()->create(['name' => 'EL', 'name_ru' => 'EL', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('EL')]);
            $carBrand->children()->create(['name' => 'ILX', 'name_ru' => 'ILX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ILX')]);
            $carBrand->children()->create(['name' => 'Integra', 'name_ru' => 'Integra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Integra')]);
            $carBrand->children()->create(['name' => 'Legend', 'name_ru' => 'Legend', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Legend')]);
            $carBrand->children()->create(['name' => 'MDX', 'name_ru' => 'MDX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MDX')]);
            $carBrand->children()->create(['name' => 'NSX', 'name_ru' => 'NSX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('NSX')]);
            $carBrand->children()->create(['name' => 'RDX', 'name_ru' => 'RDX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RDX')]);
            $carBrand->children()->create(['name' => 'RL', 'name_ru' => 'RL', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RL')]);
            $carBrand->children()->create(['name' => 'RLX', 'name_ru' => 'RLX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RLX')]);
            $carBrand->children()->create(['name' => 'RSX', 'name_ru' => 'RSX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RSX')]);
            $carBrand->children()->create(['name' => 'SLX', 'name_ru' => 'SLX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SLX')]);
            $carBrand->children()->create(['name' => 'TL', 'name_ru' => 'TL', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TL')]);
            $carBrand->children()->create(['name' => 'TLX', 'name_ru' => 'TLX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TLX')]);
            $carBrand->children()->create(['name' => 'TSX', 'name_ru' => 'TSX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TSX')]);
            $carBrand->children()->create(['name' => 'ZDX', 'name_ru' => 'ZDX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ZDX')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Adler', 'name_ru' => 'Адлер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Adler')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Alfa Romeo', 'name_ru' => 'Альфа-Ромео', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Alfa Romeo')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Alpina', 'name_ru' => 'Альпина', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Alpina')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Alpine', 'name_ru' => 'Альпине', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Alpine')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'AM General', 'name_ru' => 'АМ Дженерал', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('AM General')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'AMC', 'name_ru' => 'АМС', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('AMC')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Ariel', 'name_ru' => 'Ариель', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ariel')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Aro', 'name_ru' => 'Аро', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aro')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Asia', 'name_ru' => 'Азия', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Asia')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Aston Martin', 'name_ru' => 'Астан Мартин', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aston Martin')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Bulldog', 'name_ru' => 'Bulldog', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bulldog')]);
            $carBrand->children()->create(['name' => 'Cygnet', 'name_ru' => 'Cygnet', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cygnet')]);
            $carBrand->children()->create(['name' => 'DB AR1', 'name_ru' => 'DB AR1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DB AR1')]);
            $carBrand->children()->create(['name' => 'DB11', 'name_ru' => 'DB11', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DB11')]);
            $carBrand->children()->create(['name' => 'DB5', 'name_ru' => 'DB5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DB5')]);
            $carBrand->children()->create(['name' => 'DB7', 'name_ru' => 'DB7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DB7')]);
            $carBrand->children()->create(['name' => 'DB9', 'name_ru' => 'DB9', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DB9')]);
            $carBrand->children()->create(['name' => 'DBS', 'name_ru' => 'DBS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DBS')]);
            $carBrand->children()->create(['name' => 'Lagonda', 'name_ru' => 'Lagonda', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lagonda')]);
            $carBrand->children()->create(['name' => 'One-77', 'name_ru' => 'One-77', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('One-77')]);
            $carBrand->children()->create(['name' => 'Rapide', 'name_ru' => 'Rapide', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rapide')]);
            $carBrand->children()->create(['name' => 'Tickford Capri', 'name_ru' => 'Tickford Capri', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tickford Capri')]);
            $carBrand->children()->create(['name' => 'V12 Vantage', 'name_ru' => 'V12 Vantage', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V12 Vantage')]);
            $carBrand->children()->create(['name' => 'V12 Zagato', 'name_ru' => 'V12 Zagato', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V12 Zagato')]);
            $carBrand->children()->create(['name' => 'V8 Vantage', 'name_ru' => 'V8 Vantage', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V8 Vantage')]);
            $carBrand->children()->create(['name' => 'V8 Zagato', 'name_ru' => 'V8 Zagato', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V8 Zagato')]);
            $carBrand->children()->create(['name' => 'Vanquish', 'name_ru' => 'Vanquish', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vanquish')]);
            $carBrand->children()->create(['name' => 'Virage', 'name_ru' => 'Virage', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Virage')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Audi', 'name_ru' => 'Ауди', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Audi')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '100', 'name_ru' => '100', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('100')])->children()->createMany([['name' => 'I (C1)', 'name_ru' => 'I (C1)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I (C1)')],['name' => 'II (C2)', 'name_ru' => 'II (C2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('II (C2)')],['name' => 'III (C3)', 'name_ru' => 'III (C3)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('III (C3)')],['name' => 'III (C3)РЕСТАЙЛИНГ', 'name_ru' => 'III (C3)РЕСТАЙЛИНГ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('III (C3)РЕСТАЙЛИНГ')],['name' => 'I (C1)', 'name_ru' => 'I (C1)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I (C1)')],['name' => 'IV(C4)', 'name_ru' => 'IV(C4)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('IV(C4)')],])
            ;
            $carBrand->children()->create(['name' => '200', 'name_ru' => '200', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('200')])->children()->createMany([['name' => 'I (C2)', 'name_ru' => 'I (C2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I (C2)')],['name' => 'II (C3)', 'name_ru' => 'II (C3)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('II (C3)')],['name' => 'II (C3)РЕСТАЙЛИНГ', 'name_ru' => 'II (C3)РЕСТАЙЛИНГ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('II (C3)РЕСТАЙЛИНГ')],['name' => 'I (C2)', 'name_ru' => 'I (C2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I (C2)')],])
            ;
            $carBrand->children()->create(['name' => '50', 'name_ru' => '50', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('50')]);
            $carBrand->children()->create(['name' => '80', 'name_ru' => '80', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('80')])->children()->createMany([['name' => 'B1', 'name_ru' => 'B1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B1')],['name' => 'B1 [рестайлинг]', 'name_ru' => 'B1 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B1 [рестайлинг]')],['name' => 'B2', 'name_ru' => 'B2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B2')],['name' => 'B2 [рестайлинг]', 'name_ru' => 'B2 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B2 [рестайлинг]')],['name' => 'B1', 'name_ru' => 'B1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B1')],['name' => '8A/B3', 'name_ru' => '8A/B3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8A/B3')],['name' => '8C/B4', 'name_ru' => '8C/B4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8C/B4')],])
            ;
            $carBrand->children()->create(['name' => '90', 'name_ru' => '90', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('90')]);
            $carBrand->children()->create(['name' => '920', 'name_ru' => '920', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('920')]);
            $carBrand->children()->create(['name' => 'A1', 'name_ru' => 'A1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A1')])->children()->createMany([['name' => '8X', 'name_ru' => '8X', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8X')],['name' => '8X [рестайлинг]', 'name_ru' => '8X [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8X [рестайлинг]')],['name' => '2 поколение', 'name_ru' => '2 поколение', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 поколение')],['name' => '8X', 'name_ru' => '8X', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8X')],])
            ;
            $carBrand->children()->create(['name' => 'A2', 'name_ru' => 'A2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A2')]);
            $carBrand->children()->create(['name' => 'A3', 'name_ru' => 'A3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A3')])->children()->createMany([['name' => '8L', 'name_ru' => '8L', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8L')],['name' => '8L [рестайлинг]', 'name_ru' => '8L [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8L [рестайлинг]')],['name' => '8P', 'name_ru' => '8P', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8P')],['name' => '8P/8PA [рестайлинг]', 'name_ru' => '8P/8PA [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8P/8PA [рестайлинг]')],['name' => '8L', 'name_ru' => '8L', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8L')],['name' => '8P/8PA [2-й рестайлинг]', 'name_ru' => '8P/8PA [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8P/8PA [2-й рестайлинг]')],['name' => '8V', 'name_ru' => '8V', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8V')],['name' => '8V [рестайлинг]', 'name_ru' => '8V [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8V [рестайлинг]')],])
            ;
            $carBrand->children()->create(['name' => 'A4', 'name_ru' => 'A4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A4')])->children()->createMany([['name' => 'B5', 'name_ru' => 'B5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B5')],['name' => 'B5 [рестайлинг]', 'name_ru' => 'B5 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B5 [рестайлинг]')],['name' => 'B6', 'name_ru' => 'B6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B6')],['name' => 'B7', 'name_ru' => 'B7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B7')],['name' => 'B5', 'name_ru' => 'B5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B5')],['name' => 'B8/8K', 'name_ru' => 'B8/8K', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B8/8K')],['name' => 'B8/8K [рестайлинг]', 'name_ru' => 'B8/8K [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B8/8K [рестайлинг]')],['name' => 'B9', 'name_ru' => 'B9', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B9')],['name' => 'B9 [рестайлинг]', 'name_ru' => 'B9 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B9 [рестайлинг]')],])
            ;
            $carBrand->children()->create(['name' => 'A4 allroad', 'name_ru' => 'A4 allroad', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A4 allroad')]);
            $carBrand->children()->create(['name' => 'A5', 'name_ru' => 'A5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A5')])->children()->createMany([['name' => '8T', 'name_ru' => '8T', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8T')],['name' => '8T [рестайлинг]', 'name_ru' => '8T [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8T [рестайлинг]')],['name' => '2 поколение', 'name_ru' => '2 поколение', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 поколение')],['name' => '8T', 'name_ru' => '8T', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8T')],])
            ;
            $carBrand->children()->create(['name' => 'A6', 'name_ru' => 'A6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A6')])->children()->createMany([['name' => 'A4/C4', 'name_ru' => 'A4/C4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A4/C4')],['name' => '4B/C5', 'name_ru' => '4B/C5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4B/C5')],['name' => '4B/C5 [рестайлинг]', 'name_ru' => '4B/C5 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4B/C5 [рестайлинг]')],['name' => '4F/C6', 'name_ru' => '4F/C6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4F/C6')],['name' => 'A4/C4', 'name_ru' => 'A4/C4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A4/C4')],['name' => '4F/C6 [рестайлинг]', 'name_ru' => '4F/C6 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4F/C6 [рестайлинг]')],['name' => '4G/C7', 'name_ru' => '4G/C7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4G/C7')],['name' => '4G/C7 [рестайлинг]', 'name_ru' => '4G/C7 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4G/C7 [рестайлинг]')],['name' => 'C8', 'name_ru' => 'C8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C8')],])
            ;
            $carBrand->children()->create(['name' => 'A6 allroad', 'name_ru' => 'A6 allroad', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A6 allroad')]);
            $carBrand->children()->create(['name' => 'A7', 'name_ru' => 'A7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A7')])->children()->createMany([['name' => '4G', 'name_ru' => '4G', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4G')],['name' => '4G [рестайлинг]', 'name_ru' => '4G [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4G [рестайлинг]')],['name' => '2 поколение', 'name_ru' => '2 поколение', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 поколение')],['name' => '4G', 'name_ru' => '4G', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4G')],])
            ;
            $carBrand->children()->create(['name' => 'A8', 'name_ru' => 'A8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A8')])->children()->createMany([['name' => 'D2/4D', 'name_ru' => 'D2/4D', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D2/4D')],['name' => 'D2/4D [рестайлинг]', 'name_ru' => 'D2/4D [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D2/4D [рестайлинг]')],['name' => 'D3/4E', 'name_ru' => 'D3/4E', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D3/4E')],['name' => 'D3/4E [рестайлинг]', 'name_ru' => 'D3/4E [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D3/4E [рестайлинг]')],['name' => 'D2/4D', 'name_ru' => 'D2/4D', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D2/4D')],['name' => 'D3/4E [2-й рестайлинг]', 'name_ru' => 'D3/4E [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D3/4E [2-й рестайлинг]')],['name' => 'D4/4H', 'name_ru' => 'D4/4H', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D4/4H')],['name' => 'D4/4H [рестайлинг]', 'name_ru' => 'D4/4H [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D4/4H [рестайлинг]')],['name' => 'D5', 'name_ru' => 'D5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D5')],])
            ;
            $carBrand->children()->create(['name' => 'Cabriolet', 'name_ru' => 'Cabriolet', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cabriolet')]);
            $carBrand->children()->create(['name' => 'Coupe', 'name_ru' => 'Coupe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Coupe')])->children()->createMany([['name' => '81/85', 'name_ru' => '81/85', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('81/85')],['name' => '89/8B', 'name_ru' => '89/8B', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('89/8B')],['name' => '81/85', 'name_ru' => '81/85', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('81/85')],])
            ;
            $carBrand->children()->create(['name' => 'NSU RO 80', 'name_ru' => 'NSU RO 80', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('NSU RO 80')]);
            $carBrand->children()->create(['name' => 'Q3', 'name_ru' => 'Q3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Q3')])->children()->createMany([['name' => '8U', 'name_ru' => '8U', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8U')],['name' => '8U [рестайлинг]', 'name_ru' => '8U [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8U [рестайлинг]')],['name' => 'F3', 'name_ru' => 'F3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F3')],['name' => '8U', 'name_ru' => '8U', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8U')],])
            ;
            $carBrand->children()->create(['name' => 'Q5', 'name_ru' => 'Q5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Q5')])->children()->createMany([['name' => '8R', 'name_ru' => '8R', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8R')],['name' => '8R [рестайлинг]', 'name_ru' => '8R [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8R [рестайлинг]')],['name' => '2 поколение', 'name_ru' => '2 поколение', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 поколение')],['name' => '8R', 'name_ru' => '8R', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8R')],])
            ;
            $carBrand->children()->create(['name' => 'Q7', 'name_ru' => 'Q7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Q7')])->children()->createMany([['name' => '4L', 'name_ru' => '4L', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4L')],['name' => '4L [рестайлинг]', 'name_ru' => '4L [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4L [рестайлинг]')],['name' => '4M', 'name_ru' => '4M', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4M')],['name' => '4M [рестайлинг]', 'name_ru' => '4M [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4M [рестайлинг]')],['name' => '4L', 'name_ru' => '4L', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4L')],])
            ;
            $carBrand->children()->create(['name' => 'Q8', 'name_ru' => 'Q8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Q8')]);
            $carBrand->children()->create(['name' => 'RS 3', 'name_ru' => 'RS 3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RS 3')])->children()->createMany([['name' => '8PA', 'name_ru' => '8PA', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8PA')],['name' => '8VA', 'name_ru' => '8VA', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8VA')],['name' => '8VA [рестайлинг]', 'name_ru' => '8VA [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8VA [рестайлинг]')],['name' => '8PA', 'name_ru' => '8PA', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8PA')],])
            ;
            $carBrand->children()->create(['name' => 'RS 4', 'name_ru' => 'RS 4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RS 4')])->children()->createMany([['name' => 'B8', 'name_ru' => 'B8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B8')],['name' => 'B9', 'name_ru' => 'B9', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B9')],['name' => 'B8', 'name_ru' => 'B8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B8')],])
            ;
            $carBrand->children()->create(['name' => 'RS 5', 'name_ru' => 'RS 5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RS 5')])->children()->createMany([['name' => '8T', 'name_ru' => '8T', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8T')],['name' => '8T [рестайлинг]', 'name_ru' => '8T [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8T [рестайлинг]')],['name' => 'F5', 'name_ru' => 'F5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F5')],['name' => '8T', 'name_ru' => '8T', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8T')],])
            ;
            $carBrand->children()->create(['name' => 'RS 6', 'name_ru' => 'RS 6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RS 6')])->children()->createMany([['name' => 'C5', 'name_ru' => 'C5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C5')],['name' => 'C6', 'name_ru' => 'C6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C6')],['name' => 'C7', 'name_ru' => 'C7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C7')],['name' => 'C7 [рестайлинг]', 'name_ru' => 'C7 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C7 [рестайлинг]')],['name' => 'C5', 'name_ru' => 'C5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C5')],])
            ;
            $carBrand->children()->create(['name' => 'RS 7', 'name_ru' => 'RS 7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RS 7')])->children()->createMany([['name' => '4G', 'name_ru' => '4G', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4G')],['name' => '4G [рестайлинг]', 'name_ru' => '4G [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4G [рестайлинг]')],['name' => '4G', 'name_ru' => '4G', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4G')],])
            ;
            $carBrand->children()->create(['name' => 'RS Q3', 'name_ru' => 'RS Q3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RS Q3')])->children()->createMany([['name' => '8U', 'name_ru' => '8U', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8U')],['name' => '8U [рестайлинг]', 'name_ru' => '8U [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8U [рестайлинг]')],['name' => '8U', 'name_ru' => '8U', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8U')],])
            ;
            $carBrand->children()->create(['name' => 'S5', 'name_ru' => 'S5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S5')])->children()->createMany([['name' => '8T', 'name_ru' => '8T', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8T')],['name' => '8T [рестайлинг]', 'name_ru' => '8T [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8T [рестайлинг]')],['name' => 'F5', 'name_ru' => 'F5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F5')],['name' => '8T', 'name_ru' => '8T', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8T')],])
            ;
            $carBrand->children()->create(['name' => 'S6', 'name_ru' => 'S6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S6')])->children()->createMany([['name' => 'C4', 'name_ru' => 'C4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C4')],['name' => 'C5', 'name_ru' => 'C5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C5')],['name' => 'C6', 'name_ru' => 'C6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C6')],['name' => 'C6 [рестайлинг]', 'name_ru' => 'C6 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C6 [рестайлинг]')],['name' => 'C4', 'name_ru' => 'C4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C4')],['name' => 'C7', 'name_ru' => 'C7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C7')],['name' => 'C7 [рестайлинг]', 'name_ru' => 'C7 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C7 [рестайлинг]')],['name' => 'C8', 'name_ru' => 'C8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C8')],])
            ;
            $carBrand->children()->create(['name' => 'S7', 'name_ru' => 'S7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S7')])->children()->createMany([['name' => '4G', 'name_ru' => '4G', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4G')],['name' => '4G [рестайлинг]', 'name_ru' => '4G [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4G [рестайлинг]')],['name' => '2 поколение', 'name_ru' => '2 поколение', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 поколение')],['name' => '4G', 'name_ru' => '4G', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4G')],])
            ;
            $carBrand->children()->create(['name' => 'S8', 'name_ru' => 'S8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S8')])->children()->createMany([['name' => 'D2', 'name_ru' => 'D2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D2')],['name' => 'D2 [рестайлинг]', 'name_ru' => 'D2 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D2 [рестайлинг]')],['name' => 'D3', 'name_ru' => 'D3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D3')],['name' => 'D3 [рестайлинг]', 'name_ru' => 'D3 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D3 [рестайлинг]')],['name' => 'D2', 'name_ru' => 'D2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D2')],['name' => 'D4', 'name_ru' => 'D4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D4')],['name' => 'D4 [рестайлинг]', 'name_ru' => 'D4 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D4 [рестайлинг]')],])
            ;
            $carBrand->children()->create(['name' => 'TT', 'name_ru' => 'TT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TT')])->children()->createMany([['name' => '8N', 'name_ru' => '8N', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8N')],['name' => '8N [рестайлинг]', 'name_ru' => '8N [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8N [рестайлинг]')],['name' => '8J', 'name_ru' => '8J', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8J')],['name' => '8J [рестайлинг]', 'name_ru' => '8J [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8J [рестайлинг]')],['name' => '8N', 'name_ru' => '8N', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8N')],['name' => '8S', 'name_ru' => '8S', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8S')],['name' => '8S [рестайлинг]', 'name_ru' => '8S [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8S [рестайлинг]')],])
            ;
            $carBrand->children()->create(['name' => 'e-tron', 'name_ru' => 'e-tron', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('e-tron')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Aurus', 'name_ru' => 'Аурус', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aurus')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Austin', 'name_ru' => 'Аустин', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Austin')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Austin Healey', 'name_ru' => 'Аустин Хили', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Austin Healey')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Autobianchi', 'name_ru' => 'Autobianchi', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Autobianchi')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'BAIC', 'name_ru' => 'BAIC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('BAIC')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Bajaj', 'name_ru' => 'Bajaj', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bajaj')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Baltijas Dzips', 'name_ru' => 'Балтияс Дзипс', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Baltijas Dzips')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Batmobile', 'name_ru' => 'Бэтмобиль', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Batmobile')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Bentley', 'name_ru' => 'Bentley', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bentley')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Arnage', 'name_ru' => 'Arnage', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Arnage')]);
            $carBrand->children()->create(['name' => 'Azure', 'name_ru' => 'Azure', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Azure')]);
            $carBrand->children()->create(['name' => 'Bentayga', 'name_ru' => 'Bentayga', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bentayga')]);
            $carBrand->children()->create(['name' => 'Brooklands', 'name_ru' => 'Brooklands', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Brooklands')]);
            $carBrand->children()->create(['name' => 'Continental', 'name_ru' => 'Continental', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Continental')]);
            $carBrand->children()->create(['name' => 'Continental Flying Spur', 'name_ru' => 'Continental Flying Spur', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Continental Flying Spur')]);
            $carBrand->children()->create(['name' => 'Continental GT', 'name_ru' => 'Continental GT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Continental GT')]);
            $carBrand->children()->create(['name' => 'Eight', 'name_ru' => 'Eight', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Eight')]);
            $carBrand->children()->create(['name' => 'Flying Spur', 'name_ru' => 'Flying Spur', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Flying Spur')]);
            $carBrand->children()->create(['name' => 'Mark VI', 'name_ru' => 'Mark VI', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mark VI')]);
            $carBrand->children()->create(['name' => 'Mulsanne', 'name_ru' => 'Mulsanne', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mulsanne')]);
            $carBrand->children()->create(['name' => 'R Type', 'name_ru' => 'R Type', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('R Type')]);
            $carBrand->children()->create(['name' => 'S', 'name_ru' => 'S', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S')]);
            $carBrand->children()->create(['name' => 'T-Series', 'name_ru' => 'T-Series', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('T-Series')]);
            $carBrand->children()->create(['name' => 'Turbo R', 'name_ru' => 'Turbo R', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Turbo R')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Bertone', 'name_ru' => 'Bertone', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bertone')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Bilenkin', 'name_ru' => 'Биленкин', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bilenkin')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Bitter', 'name_ru' => 'Биттер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bitter')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'BMW', 'name_ru' => 'БМВ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('BMW')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '02 (E10)', 'name_ru' => '02 (E10)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('02 (E10)')])->children()->createMany([['name' => 'I', 'name_ru' => 'I', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I')],['name' => 'I', 'name_ru' => 'I', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I')],])
            ;;
            $carBrand->children()->create(['name' => '1 серия', 'name_ru' => '1 серия', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 серия')])->children()->createMany([['name' => 'III (F40)', 'name_ru' => 'III (F40)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('III (F40)')],['name' => 'II (F20/F21) Рестайлинг 2', 'name_ru' => 'II (F20/F21) Рестайлинг 2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('II (F20/F21) Рестайлинг 2')],['name' => 'II (F20/F21) Рестайлинг', 'name_ru' => 'II (F20/F21) Рестайлинг', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('II (F20/F21) Рестайлинг')],['name' => 'II (F20/F21)', 'name_ru' => 'II (F20/F21)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('II (F20/F21)')],['name' => 'III (F40)', 'name_ru' => 'III (F40)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('III (F40)')],['name' => 'I (E82/E88) Рестайлинг 2', 'name_ru' => 'I (E82/E88) Рестайлинг 2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I (E82/E88) Рестайлинг 2')],['name' => 'I (E81/E82/E87/E88) Рестайлинг', 'name_ru' => 'I (E81/E82/E87/E88) Рестайлинг', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I (E81/E82/E87/E88) Рестайлинг')],['name' => 'I (E81/E82/E87/E88)', 'name_ru' => 'I (E81/E82/E87/E88)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I (E81/E82/E87/E88)')],])
            ;
            $carBrand->children()->create(['name' => '1M', 'name_ru' => '1M', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1M')]);
            $carBrand->children()->create(['name' => '2 серия', 'name_ru' => '2 серия', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 серия')]);
            $carBrand->children()->create(['name' => '2 серия Active Tourer', 'name_ru' => '2 серия Active Tourer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 серия Active Tourer')]);
            $carBrand->children()->create(['name' => '2 серия Grand Tourer', 'name_ru' => '2 серия Grand Tourer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 серия Grand Tourer')]);
            $carBrand->children()->create(['name' => '2000 C/CS', 'name_ru' => '2000 C/CS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2000 C/CS')]);
            $carBrand->children()->create(['name' => '3 серия', 'name_ru' => '3 серия', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 серия')]);
            $carBrand->children()->create(['name' => '3/15', 'name_ru' => '3/15', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3/15')]);
            $carBrand->children()->create(['name' => '315', 'name_ru' => '315', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('315')]);
            $carBrand->children()->create(['name' => '3200', 'name_ru' => '3200', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3200')]);
            $carBrand->children()->create(['name' => '321', 'name_ru' => '321', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('321')]);
            $carBrand->children()->create(['name' => '326', 'name_ru' => '326', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('326')]);
            $carBrand->children()->create(['name' => '327', 'name_ru' => '327', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('327')]);
            $carBrand->children()->create(['name' => '340', 'name_ru' => '340', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('340')]);
            $carBrand->children()->create(['name' => '4 серия', 'name_ru' => '4 серия', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 серия')]);
            $carBrand->children()->create(['name' => '5 серия', 'name_ru' => '5 серия', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5 серия')]);
            $carBrand->children()->create(['name' => '501', 'name_ru' => '501', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('501')]);
            $carBrand->children()->create(['name' => '502', 'name_ru' => '502', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('502')]);
            $carBrand->children()->create(['name' => '503', 'name_ru' => '503', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('503')]);
            $carBrand->children()->create(['name' => '507', 'name_ru' => '507', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('507')]);
            $carBrand->children()->create(['name' => '6 серия', 'name_ru' => '6 серия', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('6 серия')]);
            $carBrand->children()->create(['name' => '600', 'name_ru' => '600', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('600')]);
            $carBrand->children()->create(['name' => '7 серия', 'name_ru' => '7 серия', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('7 серия')]);
            $carBrand->children()->create(['name' => '700', 'name_ru' => '700', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('700')]);
            $carBrand->children()->create(['name' => '8 серия', 'name_ru' => '8 серия', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8 серия')]);
            $carBrand->children()->create(['name' => 'E3', 'name_ru' => 'E3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E3')]);
            $carBrand->children()->create(['name' => 'E9', 'name_ru' => 'E9', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E9')]);
            $carBrand->children()->create(['name' => 'i3', 'name_ru' => 'i3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('i3')]);
            $carBrand->children()->create(['name' => 'i8', 'name_ru' => 'i8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('i8')]);
            $carBrand->children()->create(['name' => 'M2', 'name_ru' => 'M2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M2')]);
            $carBrand->children()->create(['name' => 'M3', 'name_ru' => 'M3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M3')]);
            $carBrand->children()->create(['name' => 'M4', 'name_ru' => 'M4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M4')]);
            $carBrand->children()->create(['name' => 'M5', 'name_ru' => 'M5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M5')]);
            $carBrand->children()->create(['name' => 'M6', 'name_ru' => 'M6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M6')]);
            $carBrand->children()->create(['name' => 'M8', 'name_ru' => 'M8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M8')]);
            $carBrand->children()->create(['name' => 'New Class', 'name_ru' => 'New Class', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('New Class')]);
            $carBrand->children()->create(['name' => 'X1', 'name_ru' => 'X1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X1')]);
            $carBrand->children()->create(['name' => 'X2', 'name_ru' => 'X2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X2')]);
            $carBrand->children()->create(['name' => 'X3', 'name_ru' => 'X3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X3')]);
            $carBrand->children()->create(['name' => 'X3 M', 'name_ru' => 'X3 M', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X3 M')]);
            $carBrand->children()->create(['name' => 'X4', 'name_ru' => 'X4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X4')]);
            $carBrand->children()->create(['name' => 'X4 M', 'name_ru' => 'X4 M', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X4 M')]);
            $carBrand->children()->create(['name' => 'X5', 'name_ru' => 'X5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X5')]);
            $carBrand->children()->create(['name' => 'X5 M', 'name_ru' => 'X5 M', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X5 M')]);
            $carBrand->children()->create(['name' => 'X6', 'name_ru' => 'X6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X6')]);
            $carBrand->children()->create(['name' => 'X6 M', 'name_ru' => 'X6 M', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X6 M')]);
            $carBrand->children()->create(['name' => 'X7', 'name_ru' => 'X7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X7')]);
            $carBrand->children()->create(['name' => 'Z1', 'name_ru' => 'Z1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Z1')]);
            $carBrand->children()->create(['name' => 'Z3', 'name_ru' => 'Z3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Z3')]);
            $carBrand->children()->create(['name' => 'Z3 M', 'name_ru' => 'Z3 M', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Z3 M')]);
            $carBrand->children()->create(['name' => 'Z4', 'name_ru' => 'Z4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Z4')])->children()->createMany([['name' => 'III (G29)', 'name_ru' => 'III (G29)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('III (G29)')],['name' => 'II (E89) Рестайлинг', 'name_ru' => 'II (E89) Рестайлинг', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('II (E89) Рестайлинг')],['name' => 'II (E89)', 'name_ru' => 'II (E89)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('II (E89)')],['name' => 'I (E85/E86) Рестайлинг', 'name_ru' => 'I (E85/E86) Рестайлинг', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I (E85/E86) Рестайлинг')],['name' => 'III (G29)', 'name_ru' => 'III (G29)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('III (G29)')],['name' => 'I (E85/E86)', 'name_ru' => 'I (E85/E86)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I (E85/E86)')],])
            ;
            $carBrand->children()->create(['name' => 'Z4 M', 'name_ru' => 'Z4 M', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Z4 M')]);
            $carBrand->children()->create(['name' => 'Z8', 'name_ru' => 'Z8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Z8')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Borgward', 'name_ru' => 'Borgward', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Borgward')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Brabus', 'name_ru' => 'Брабус', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Brabus')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Brilliance', 'name_ru' => 'Бриллианс', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Brilliance')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'FRV (BS2)', 'name_ru' => 'FRV (BS2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('FRV (BS2)')]);
            $carBrand->children()->create(['name' => 'H230', 'name_ru' => 'H230', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('H230')]);
            $carBrand->children()->create(['name' => 'H530', 'name_ru' => 'H530', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('H530')]);
            $carBrand->children()->create(['name' => 'M1 (BS6)', 'name_ru' => 'M1 (BS6)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M1 (BS6)')]);
            $carBrand->children()->create(['name' => 'M2 (BS4)', 'name_ru' => 'M2 (BS4)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M2 (BS4)')]);
            $carBrand->children()->create(['name' => 'M3 (BC3)', 'name_ru' => 'M3 (BC3)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M3 (BC3)')]);
            $carBrand->children()->create(['name' => 'V3', 'name_ru' => 'V3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V3')]);
            $carBrand->children()->create(['name' => 'V5', 'name_ru' => 'V5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V5')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Bristol', 'name_ru' => 'Бристоль', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bristol')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Bufori', 'name_ru' => 'Буфори', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bufori')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Bugatti', 'name_ru' => 'Бугати', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bugatti')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Chiron', 'name_ru' => 'Chiron', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Chiron')]);
            $carBrand->children()->create(['name' => 'EB 110', 'name_ru' => 'EB 110', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('EB 110')]);
            $carBrand->children()->create(['name' => 'EB 112', 'name_ru' => 'EB 112', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('EB 112')]);
            $carBrand->children()->create(['name' => 'EB Veyron 16.4', 'name_ru' => 'EB Veyron 16.4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('EB Veyron 16.4')]);
            $carBrand->children()->create(['name' => 'Type 55', 'name_ru' => 'Type 55', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Type 55')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Buick', 'name_ru' => 'Buick', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Buick')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Century', 'name_ru' => 'Century', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Century')]);
            $carBrand->children()->create(['name' => 'Electra', 'name_ru' => 'Electra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Electra')]);
            $carBrand->children()->create(['name' => 'Enclave', 'name_ru' => 'Enclave', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Enclave')]);
            $carBrand->children()->create(['name' => 'Encore', 'name_ru' => 'Encore', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Encore')]);
            $carBrand->children()->create(['name' => 'Envision', 'name_ru' => 'Envision', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Envision')]);
            $carBrand->children()->create(['name' => 'Estate Wagon', 'name_ru' => 'Estate Wagon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Estate Wagon')]);
            $carBrand->children()->create(['name' => 'Excelle', 'name_ru' => 'Excelle', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Excelle')]);
            $carBrand->children()->create(['name' => 'GL8', 'name_ru' => 'GL8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GL8')]);
            $carBrand->children()->create(['name' => 'GS', 'name_ru' => 'GS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GS')]);
            $carBrand->children()->create(['name' => 'LaCrosse', 'name_ru' => 'LaCrosse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LaCrosse')]);
            $carBrand->children()->create(['name' => 'LeSabre', 'name_ru' => 'LeSabre', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LeSabre')]);
            $carBrand->children()->create(['name' => 'Limited', 'name_ru' => 'Limited', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Limited')]);
            $carBrand->children()->create(['name' => 'Lucerne', 'name_ru' => 'Lucerne', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lucerne')]);
            $carBrand->children()->create(['name' => 'Park Avenue', 'name_ru' => 'Park Avenue', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Park Avenue')]);
            $carBrand->children()->create(['name' => 'Rainer', 'name_ru' => 'Rainer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rainer')]);
            $carBrand->children()->create(['name' => 'Reatta', 'name_ru' => 'Reatta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Reatta')]);
            $carBrand->children()->create(['name' => 'Regal', 'name_ru' => 'Regal', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Regal')]);
            $carBrand->children()->create(['name' => 'Rendezvous', 'name_ru' => 'Rendezvous', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rendezvous')]);
            $carBrand->children()->create(['name' => 'Riviera', 'name_ru' => 'Riviera', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Riviera')]);
            $carBrand->children()->create(['name' => 'Roadmaster', 'name_ru' => 'Roadmaster', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Roadmaster')]);
            $carBrand->children()->create(['name' => 'Skyhawk', 'name_ru' => 'Skyhawk', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Skyhawk')]);
            $carBrand->children()->create(['name' => 'Skylark', 'name_ru' => 'Skylark', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Skylark')]);
            $carBrand->children()->create(['name' => 'Special', 'name_ru' => 'Special', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Special')]);
            $carBrand->children()->create(['name' => 'Super', 'name_ru' => 'Super', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Super')]);
            $carBrand->children()->create(['name' => 'Terraza', 'name_ru' => 'Terraza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Terraza')]);
            $carBrand->children()->create(['name' => 'Verano', 'name_ru' => 'Verano', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Verano')]);
            $carBrand->children()->create(['name' => 'Wildcat', 'name_ru' => 'Wildcat', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Wildcat')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'BYD', 'name_ru' => 'BYD', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('BYD')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'E6', 'name_ru' => 'E6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E6')]);
            $carBrand->children()->create(['name' => 'F0', 'name_ru' => 'F0', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F0')]);
            $carBrand->children()->create(['name' => 'F3', 'name_ru' => 'F3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F3')]);
            $carBrand->children()->create(['name' => 'F5', 'name_ru' => 'F5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F5')]);
            $carBrand->children()->create(['name' => 'F6', 'name_ru' => 'F6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F6')]);
            $carBrand->children()->create(['name' => 'F8 (S8)', 'name_ru' => 'F8 (S8)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F8 (S8)')]);
            $carBrand->children()->create(['name' => 'Flyer', 'name_ru' => 'Flyer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Flyer')]);
            $carBrand->children()->create(['name' => 'G3', 'name_ru' => 'G3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G3')]);
            $carBrand->children()->create(['name' => 'G6', 'name_ru' => 'G6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G6')]);
            $carBrand->children()->create(['name' => 'L3', 'name_ru' => 'L3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('L3')]);
            $carBrand->children()->create(['name' => 'M6', 'name_ru' => 'M6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M6')]);
            $carBrand->children()->create(['name' => 'S6', 'name_ru' => 'S6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S6')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Byvin', 'name_ru' => 'Byvin', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Byvin')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Cadillac', 'name_ru' => 'Катилак', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cadillac')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Callaway', 'name_ru' => 'Каллавай', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Callaway')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Carbodies', 'name_ru' => 'Карботис', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Carbodies')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Caterham', 'name_ru' => 'Катерхам', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Caterham')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Chana', 'name_ru' => 'Chana', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Chana')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Changan', 'name_ru' => 'Changan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Changan')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'ChangFeng', 'name_ru' => 'ChangFeng', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ChangFeng')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Changhe', 'name_ru' => 'Changhe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Changhe')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Chery', 'name_ru' => 'Чери', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Chery')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Amulet (A15)', 'name_ru' => 'Amulet (A15)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Amulet (A15)')]);
            $carBrand->children()->create(['name' => 'Arrizo 3', 'name_ru' => 'Arrizo 3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Arrizo 3')]);
            $carBrand->children()->create(['name' => 'Arrizo 7', 'name_ru' => 'Arrizo 7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Arrizo 7')]);
            $carBrand->children()->create(['name' => 'B13', 'name_ru' => 'B13', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B13')]);
            $carBrand->children()->create(['name' => 'Bonus (A13)', 'name_ru' => 'Bonus (A13)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bonus (A13)')]);
            $carBrand->children()->create(['name' => 'Bonus 3 (E3/A19)', 'name_ru' => 'Bonus 3 (E3/A19)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bonus 3 (E3/A19)')]);
            $carBrand->children()->create(['name' => 'CrossEastar (B14)', 'name_ru' => 'CrossEastar (B14)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CrossEastar (B14)')]);
            $carBrand->children()->create(['name' => 'Fora (A21)', 'name_ru' => 'Fora (A21)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fora (A21)')]);
            $carBrand->children()->create(['name' => 'IndiS (S18D)', 'name_ru' => 'IndiS (S18D)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('IndiS (S18D)')]);
            $carBrand->children()->create(['name' => 'Karry', 'name_ru' => 'Karry', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Karry')]);
            $carBrand->children()->create(['name' => 'Kimo (A1)', 'name_ru' => 'Kimo (A1)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kimo (A1)')]);
            $carBrand->children()->create(['name' => 'M11 (A3)', 'name_ru' => 'M11 (A3)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M11 (A3)')]);
            $carBrand->children()->create(['name' => 'Oriental Son (B11)', 'name_ru' => 'Oriental Son (B11)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Oriental Son (B11)')]);
            $carBrand->children()->create(['name' => 'QQ6 (S21)', 'name_ru' => 'QQ6 (S21)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('QQ6 (S21)')]);
            $carBrand->children()->create(['name' => 'QQme', 'name_ru' => 'QQme', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('QQme')]);
            $carBrand->children()->create(['name' => 'Sweet (QQ)', 'name_ru' => 'Sweet (QQ)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sweet (QQ)')]);
            $carBrand->children()->create(['name' => 'Tiggo (T11)', 'name_ru' => 'Tiggo (T11)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tiggo (T11)')]);
            $carBrand->children()->create(['name' => 'Tiggo 2', 'name_ru' => 'Tiggo 2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tiggo 2')]);
            $carBrand->children()->create(['name' => 'Tiggo 3', 'name_ru' => 'Tiggo 3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tiggo 3')]);
            $carBrand->children()->create(['name' => 'Tiggo 4', 'name_ru' => 'Tiggo 4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tiggo 4')]);
            $carBrand->children()->create(['name' => 'Tiggo 5', 'name_ru' => 'Tiggo 5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tiggo 5')]);
            $carBrand->children()->create(['name' => 'Tiggo 7', 'name_ru' => 'Tiggo 7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tiggo 7')]);
            $carBrand->children()->create(['name' => 'Very (A13)', 'name_ru' => 'Very (A13)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Very (A13)')]);
            $carBrand->children()->create(['name' => 'Windcloud (A11)', 'name_ru' => 'Windcloud (A11)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Windcloud (A11)')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Chevrolet', 'name_ru' => 'Шевролет', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Chevrolet')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Alero', 'name_ru' => 'Alero', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Alero')]);
            $carBrand->children()->create(['name' => 'Astra', 'name_ru' => 'Astra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Astra')]);
            $carBrand->children()->create(['name' => 'Astro', 'name_ru' => 'Astro', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Astro')]);
            $carBrand->children()->create(['name' => 'Avalanche', 'name_ru' => 'Avalanche', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Avalanche')]);
            $carBrand->children()->create(['name' => 'Aveo', 'name_ru' => 'Aveo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aveo')]);
            $carBrand->children()->create(['name' => 'Bel Air', 'name_ru' => 'Bel Air', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bel Air')]);
            $carBrand->children()->create(['name' => 'Beretta', 'name_ru' => 'Beretta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Beretta')]);
            $carBrand->children()->create(['name' => 'Blazer', 'name_ru' => 'Blazer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Blazer')]);
            $carBrand->children()->create(['name' => 'Camaro', 'name_ru' => 'Camaro', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Camaro')]);
            $carBrand->children()->create(['name' => 'Captiva', 'name_ru' => 'Captiva', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Captiva')]);
            $carBrand->children()->create(['name' => 'Cobalt', 'name_ru' => 'Cobalt', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cobalt')]);
            $carBrand->children()->create(['name' => 'Cruze', 'name_ru' => 'Cruze', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cruze')]);
            $carBrand->children()->create(['name' => 'Epica', 'name_ru' => 'Epica', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Epica')]);
            $carBrand->children()->create(['name' => 'Evanda', 'name_ru' => 'Evanda', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Evanda')]);
            $carBrand->children()->create(['name' => 'Express', 'name_ru' => 'Express', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Express')]);
            $carBrand->children()->create(['name' => 'Lacetti', 'name_ru' => 'Lacetti', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lacetti')]);
            $carBrand->children()->create(['name' => 'Lanos', 'name_ru' => 'Lanos', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lanos')]);
            $carBrand->children()->create(['name' => 'Malibu', 'name_ru' => 'Malibu', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Malibu')]);
            $carBrand->children()->create(['name' => 'Metro', 'name_ru' => 'Metro', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Metro')]);
            $carBrand->children()->create(['name' => 'Niva', 'name_ru' => 'Niva', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Niva')]);
            $carBrand->children()->create(['name' => 'Orlando', 'name_ru' => 'Orlando', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Orlando')]);
            $carBrand->children()->create(['name' => 'Rezzo', 'name_ru' => 'Rezzo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rezzo')]);
            $carBrand->children()->create(['name' => 'Spark', 'name_ru' => 'Spark', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Spark')]);
            $carBrand->children()->create(['name' => 'Tahoe', 'name_ru' => 'Tahoe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tahoe')]);
            $carBrand->children()->create(['name' => 'Tracker', 'name_ru' => 'Tracker', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tracker')]);
            $carBrand->children()->create(['name' => 'TrailBlazer', 'name_ru' => 'TrailBlazer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TrailBlazer')]);
            $carBrand->children()->create(['name' => 'Traverse', 'name_ru' => 'Traverse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Traverse')]);
            $carBrand->children()->create(['name' => 'Uplander', 'name_ru' => 'Uplander', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Uplander')]);
            $carBrand->children()->create(['name' => 'Viva', 'name_ru' => 'Viva', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Viva')]);
            $carBrand->children()->create(['name' => 'Volt', 'name_ru' => 'Volt', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Volt')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Chrysler', 'name_ru' => 'Крайслер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Chrysler')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '180', 'name_ru' => '180', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('180')]);
            $carBrand->children()->create(['name' => '200', 'name_ru' => '200', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('200')]);
            $carBrand->children()->create(['name' => '300', 'name_ru' => '300', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('300')]);
            $carBrand->children()->create(['name' => '300 Letter Series', 'name_ru' => '300 Letter Series', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('300 Letter Series')]);
            $carBrand->children()->create(['name' => '300C', 'name_ru' => '300C', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('300C')]);
            $carBrand->children()->create(['name' => '300M', 'name_ru' => '300M', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('300M')]);
            $carBrand->children()->create(['name' => 'Aspen', 'name_ru' => 'Aspen', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aspen')]);
            $carBrand->children()->create(['name' => 'Cirrus', 'name_ru' => 'Cirrus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cirrus')]);
            $carBrand->children()->create(['name' => 'Concorde', 'name_ru' => 'Concorde', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Concorde')]);
            $carBrand->children()->create(['name' => 'Cordoba', 'name_ru' => 'Cordoba', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cordoba')]);
            $carBrand->children()->create(['name' => 'Crossfire', 'name_ru' => 'Crossfire', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Crossfire')]);
            $carBrand->children()->create(['name' => 'Daytona', 'name_ru' => 'Daytona', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Daytona')]);
            $carBrand->children()->create(['name' => 'Dynasty', 'name_ru' => 'Dynasty', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dynasty')]);
            $carBrand->children()->create(['name' => 'Fifth Avenue', 'name_ru' => 'Fifth Avenue', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fifth Avenue')]);
            $carBrand->children()->create(['name' => 'Imperial', 'name_ru' => 'Imperial', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Imperial')]);
            $carBrand->children()->create(['name' => 'Imperial Crown', 'name_ru' => 'Imperial Crown', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Imperial Crown')]);
            $carBrand->children()->create(['name' => 'Intrepid', 'name_ru' => 'Intrepid', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Intrepid')]);
            $carBrand->children()->create(['name' => 'LHS', 'name_ru' => 'LHS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LHS')]);
            $carBrand->children()->create(['name' => 'LeBaron', 'name_ru' => 'LeBaron', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LeBaron')]);
            $carBrand->children()->create(['name' => 'Nassau', 'name_ru' => 'Nassau', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Nassau')]);
            $carBrand->children()->create(['name' => 'Neon', 'name_ru' => 'Neon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Neon')]);
            $carBrand->children()->create(['name' => 'New Yorker', 'name_ru' => 'New Yorker', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('New Yorker')]);
            $carBrand->children()->create(['name' => 'Newport', 'name_ru' => 'Newport', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Newport')]);
            $carBrand->children()->create(['name' => 'PT Cruiser', 'name_ru' => 'PT Cruiser', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('PT Cruiser')]);
            $carBrand->children()->create(['name' => 'Pacifica', 'name_ru' => 'Pacifica', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pacifica')]);
            $carBrand->children()->create(['name' => 'Sebring', 'name_ru' => 'Sebring', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sebring')]);
            $carBrand->children()->create(['name' => 'Stratus', 'name_ru' => 'Stratus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Stratus')]);
            $carBrand->children()->create(['name' => 'Town & Country', 'name_ru' => 'Town & Country', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Town & Country')]);
            $carBrand->children()->create(['name' => 'Vision', 'name_ru' => 'Vision', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vision')]);
            $carBrand->children()->create(['name' => 'Voyager', 'name_ru' => 'Voyager', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Voyager')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Citroen', 'name_ru' => 'Ситроен', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Citroen')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '2 CV', 'name_ru' => '2 CV', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 CV')]);
            $carBrand->children()->create(['name' => 'AMI', 'name_ru' => 'AMI', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('AMI')]);
            $carBrand->children()->create(['name' => 'AX', 'name_ru' => 'AX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('AX')]);
            $carBrand->children()->create(['name' => 'BX', 'name_ru' => 'BX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('BX')]);
            $carBrand->children()->create(['name' => 'Berlingo', 'name_ru' => 'Berlingo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Berlingo')]);
            $carBrand->children()->create(['name' => 'C-Crosser', 'name_ru' => 'C-Crosser', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C-Crosser')]);
            $carBrand->children()->create(['name' => 'C-Elysee', 'name_ru' => 'C-Elysee', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C-Elysee')]);
            $carBrand->children()->create(['name' => 'C-Quatre', 'name_ru' => 'C-Quatre', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C-Quatre')]);
            $carBrand->children()->create(['name' => 'C-Triomphe', 'name_ru' => 'C-Triomphe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C-Triomphe')]);
            $carBrand->children()->create(['name' => 'C-ZERO', 'name_ru' => 'C-ZERO', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C-ZERO')]);
            $carBrand->children()->create(['name' => 'C1', 'name_ru' => 'C1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C1')]);
            $carBrand->children()->create(['name' => 'C2', 'name_ru' => 'C2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C2')]);
            $carBrand->children()->create(['name' => 'C3', 'name_ru' => 'C3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C3')]);
            $carBrand->children()->create(['name' => 'C3 Aircross', 'name_ru' => 'C3 Aircross', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C3 Aircross')]);
            $carBrand->children()->create(['name' => 'C3 Picasso', 'name_ru' => 'C3 Picasso', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C3 Picasso')]);
            $carBrand->children()->create(['name' => 'C4', 'name_ru' => 'C4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C4')]);
            $carBrand->children()->create(['name' => 'C4 Aircross', 'name_ru' => 'C4 Aircross', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C4 Aircross')]);
            $carBrand->children()->create(['name' => 'C4 Cactus', 'name_ru' => 'C4 Cactus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C4 Cactus')]);
            $carBrand->children()->create(['name' => 'C4 Picasso', 'name_ru' => 'C4 Picasso', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C4 Picasso')]);
            $carBrand->children()->create(['name' => 'C4 SpaceTourer', 'name_ru' => 'C4 SpaceTourer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C4 SpaceTourer')]);
            $carBrand->children()->create(['name' => 'C5', 'name_ru' => 'C5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C5')]);
            $carBrand->children()->create(['name' => 'C5 Aircross', 'name_ru' => 'C5 Aircross', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C5 Aircross')]);
            $carBrand->children()->create(['name' => 'C6', 'name_ru' => 'C6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C6')]);
            $carBrand->children()->create(['name' => 'C8', 'name_ru' => 'C8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C8')]);
            $carBrand->children()->create(['name' => 'DS3', 'name_ru' => 'DS3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DS3')]);
            $carBrand->children()->create(['name' => 'DS4', 'name_ru' => 'DS4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DS4')]);
            $carBrand->children()->create(['name' => 'DS5', 'name_ru' => 'DS5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DS5')]);
            $carBrand->children()->create(['name' => 'Nemo', 'name_ru' => 'Nemo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Nemo')]);
            $carBrand->children()->create(['name' => 'Xsara', 'name_ru' => 'Xsara', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Xsara')]);
            $carBrand->children()->create(['name' => 'Xsara Picasso', 'name_ru' => 'Xsara Picasso', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Xsara Picasso')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Cizeta', 'name_ru' => 'Цизита', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cizeta')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Coggiola', 'name_ru' => 'Coggiola', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Coggiola')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Cord', 'name_ru' => 'Корд', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cord')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Dacia', 'name_ru' => 'Дациа', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dacia')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '1300', 'name_ru' => '1300', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1300')]);
            $carBrand->children()->create(['name' => '1310', 'name_ru' => '1310', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1310')]);
            $carBrand->children()->create(['name' => '1325', 'name_ru' => '1325', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1325')]);
            $carBrand->children()->create(['name' => '1410', 'name_ru' => '1410', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1410')]);
            $carBrand->children()->create(['name' => 'Dokker', 'name_ru' => 'Dokker', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dokker')]);
            $carBrand->children()->create(['name' => 'Duster', 'name_ru' => 'Duster', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Duster')]);
            $carBrand->children()->create(['name' => 'Lodgy', 'name_ru' => 'Lodgy', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lodgy')]);
            $carBrand->children()->create(['name' => 'Logan', 'name_ru' => 'Logan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Logan')]);
            $carBrand->children()->create(['name' => 'Nova', 'name_ru' => 'Nova', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Nova')]);
            $carBrand->children()->create(['name' => 'Pick-Up', 'name_ru' => 'Pick-Up', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pick-Up')]);
            $carBrand->children()->create(['name' => 'Sandero', 'name_ru' => 'Sandero', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sandero')]);
            $carBrand->children()->create(['name' => 'Solenza', 'name_ru' => 'Solenza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Solenza')]);
            $carBrand->children()->create(['name' => 'SuperNova', 'name_ru' => 'SuperNova', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SuperNova')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Dadi', 'name_ru' => 'Дади', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dadi')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Daewoo', 'name_ru' => 'Деву', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Daewoo')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Alpheon', 'name_ru' => 'Alpheon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Alpheon')]);
            $carBrand->children()->create(['name' => 'Arcadia', 'name_ru' => 'Arcadia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Arcadia')]);
            $carBrand->children()->create(['name' => 'Chairman', 'name_ru' => 'Chairman', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Chairman')]);
            $carBrand->children()->create(['name' => 'Damas', 'name_ru' => 'Damas', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Damas')]);
            $carBrand->children()->create(['name' => 'Espero', 'name_ru' => 'Espero', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Espero')]);
            $carBrand->children()->create(['name' => 'Evanda', 'name_ru' => 'Evanda', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Evanda')]);
            $carBrand->children()->create(['name' => 'G2X', 'name_ru' => 'G2X', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G2X')]);
            $carBrand->children()->create(['name' => 'Gentra', 'name_ru' => 'Gentra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Gentra')]);
            $carBrand->children()->create(['name' => 'Kalos', 'name_ru' => 'Kalos', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kalos')]);
            $carBrand->children()->create(['name' => 'Korando', 'name_ru' => 'Korando', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Korando')]);
            $carBrand->children()->create(['name' => 'Lacetti', 'name_ru' => 'Lacetti', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lacetti')]);
            $carBrand->children()->create(['name' => 'Lacetti Premiere', 'name_ru' => 'Lacetti Premiere', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lacetti Premiere')]);
            $carBrand->children()->create(['name' => 'Lanos', 'name_ru' => 'Lanos', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lanos')]);
            $carBrand->children()->create(['name' => 'LeMans', 'name_ru' => 'LeMans', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LeMans')]);
            $carBrand->children()->create(['name' => 'Leganza', 'name_ru' => 'Leganza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Leganza')]);
            $carBrand->children()->create(['name' => 'Magnus', 'name_ru' => 'Magnus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Magnus')]);
            $carBrand->children()->create(['name' => 'Matiz', 'name_ru' => 'Matiz', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Matiz')]);
            $carBrand->children()->create(['name' => 'Matiz Creative', 'name_ru' => 'Matiz Creative', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Matiz Creative')]);
            $carBrand->children()->create(['name' => 'Musso', 'name_ru' => 'Musso', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Musso')]);
            $carBrand->children()->create(['name' => 'Nexia', 'name_ru' => 'Nexia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Nexia')]);
            $carBrand->children()->create(['name' => 'Nubira', 'name_ru' => 'Nubira', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Nubira')]);
            $carBrand->children()->create(['name' => 'Prince', 'name_ru' => 'Prince', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Prince')]);
            $carBrand->children()->create(['name' => 'Racer', 'name_ru' => 'Racer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Racer')]);
            $carBrand->children()->create(['name' => 'Rezzo', 'name_ru' => 'Rezzo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rezzo')]);
            $carBrand->children()->create(['name' => 'Royale', 'name_ru' => 'Royale', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Royale')]);
            $carBrand->children()->create(['name' => 'Sens', 'name_ru' => 'Sens', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sens')]);
            $carBrand->children()->create(['name' => 'Tacuma', 'name_ru' => 'Tacuma', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tacuma')]);
            $carBrand->children()->create(['name' => 'Tico', 'name_ru' => 'Tico', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tico')]);
            $carBrand->children()->create(['name' => 'Tosca', 'name_ru' => 'Tosca', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tosca')]);
            $carBrand->children()->create(['name' => 'Winstorm', 'name_ru' => 'Winstorm', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Winstorm')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Daihatsu', 'name_ru' => 'Daihatsu', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Daihatsu')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Daimler', 'name_ru' => 'Далмер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Daimler')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'DS420', 'name_ru' => 'DS420', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DS420')]);
            $carBrand->children()->create(['name' => 'SP250', 'name_ru' => 'SP250', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SP250')]);
            $carBrand->children()->create(['name' => 'Sovereign (XJ6)', 'name_ru' => 'Sovereign (XJ6)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sovereign (XJ6)')]);
            $carBrand->children()->create(['name' => 'X300', 'name_ru' => 'X300', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X300')]);
            $carBrand->children()->create(['name' => 'X308', 'name_ru' => 'X308', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X308')]);
            $carBrand->children()->create(['name' => 'X350', 'name_ru' => 'X350', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X350')]);
            $carBrand->children()->create(['name' => 'XJ40', 'name_ru' => 'XJ40', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XJ40')]);
            $carBrand->children()->create(['name' => 'XJS', 'name_ru' => 'XJS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XJS')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Datsun', 'name_ru' => 'Датсун', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Datsun')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '240Z', 'name_ru' => '240Z', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('240Z')]);
            $carBrand->children()->create(['name' => '280ZX', 'name_ru' => '280ZX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('280ZX')]);
            $carBrand->children()->create(['name' => '720', 'name_ru' => '720', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('720')]);
            $carBrand->children()->create(['name' => 'Bluebird', 'name_ru' => 'Bluebird', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bluebird')]);
            $carBrand->children()->create(['name' => 'Cherry', 'name_ru' => 'Cherry', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cherry')]);
            $carBrand->children()->create(['name' => 'GO', 'name_ru' => 'GO', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GO')]);
            $carBrand->children()->create(['name' => 'GO+', 'name_ru' => 'GO+', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GO+')]);
            $carBrand->children()->create(['name' => 'Laurel', 'name_ru' => 'Laurel', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Laurel')]);
            $carBrand->children()->create(['name' => 'Stanza', 'name_ru' => 'Stanza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Stanza')]);
            $carBrand->children()->create(['name' => 'Sunny', 'name_ru' => 'Sunny', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sunny')]);
            $carBrand->children()->create(['name' => 'Urvan', 'name_ru' => 'Urvan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Urvan')]);
            $carBrand->children()->create(['name' => 'Violet', 'name_ru' => 'Violet', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Violet')]);
            $carBrand->children()->create(['name' => 'mi-DO', 'name_ru' => 'mi-DO', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('mi-DO')]);
            $carBrand->children()->create(['name' => 'on-DO', 'name_ru' => 'on-DO', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('on-DO')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'De Tomaso', 'name_ru' => 'Де Томазо', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('De Tomaso')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Delage', 'name_ru' => 'Delage', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Delage')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'DeLorean', 'name_ru' => 'DeLorean', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DeLorean')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Derways', 'name_ru' => 'Derways', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Derways')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'DeSoto', 'name_ru' => 'DeSoto', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DeSoto')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'DKW', 'name_ru' => 'DKW', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DKW')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Dodge', 'name_ru' => 'Доджи', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dodge')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '600', 'name_ru' => '600', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('600')]);
            $carBrand->children()->create(['name' => 'Aries', 'name_ru' => 'Aries', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aries')]);
            $carBrand->children()->create(['name' => 'Avenger', 'name_ru' => 'Avenger', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Avenger')]);
            $carBrand->children()->create(['name' => 'Caliber', 'name_ru' => 'Caliber', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Caliber')]);
            $carBrand->children()->create(['name' => 'Caravan', 'name_ru' => 'Caravan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Caravan')]);
            $carBrand->children()->create(['name' => 'Challenger', 'name_ru' => 'Challenger', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Challenger')]);
            $carBrand->children()->create(['name' => 'Charger', 'name_ru' => 'Charger', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Charger')]);
            $carBrand->children()->create(['name' => 'Charger Daytona', 'name_ru' => 'Charger Daytona', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Charger Daytona')]);
            $carBrand->children()->create(['name' => 'Colt', 'name_ru' => 'Colt', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Colt')]);
            $carBrand->children()->create(['name' => 'Custom Royal', 'name_ru' => 'Custom Royal', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Custom Royal')]);
            $carBrand->children()->create(['name' => 'D/W Series', 'name_ru' => 'D/W Series', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D/W Series')]);
            $carBrand->children()->create(['name' => 'D8', 'name_ru' => 'D8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D8')]);
            $carBrand->children()->create(['name' => 'Dakota', 'name_ru' => 'Dakota', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dakota')]);
            $carBrand->children()->create(['name' => 'Dart', 'name_ru' => 'Dart', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dart')]);
            $carBrand->children()->create(['name' => 'Daytona', 'name_ru' => 'Daytona', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Daytona')]);
            $carBrand->children()->create(['name' => 'Diplomat', 'name_ru' => 'Diplomat', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Diplomat')]);
            $carBrand->children()->create(['name' => 'Durango', 'name_ru' => 'Durango', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Durango')]);
            $carBrand->children()->create(['name' => 'Dynasty', 'name_ru' => 'Dynasty', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dynasty')]);
            $carBrand->children()->create(['name' => 'Intrepid', 'name_ru' => 'Intrepid', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Intrepid')]);
            $carBrand->children()->create(['name' => 'Journey', 'name_ru' => 'Journey', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Journey')]);
            $carBrand->children()->create(['name' => 'Lancer', 'name_ru' => 'Lancer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lancer')]);
            $carBrand->children()->create(['name' => 'Magnum', 'name_ru' => 'Magnum', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Magnum')]);
            $carBrand->children()->create(['name' => 'Mayfair', 'name_ru' => 'Mayfair', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mayfair')]);
            $carBrand->children()->create(['name' => 'Monaco', 'name_ru' => 'Monaco', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Monaco')]);
            $carBrand->children()->create(['name' => 'Neon', 'name_ru' => 'Neon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Neon')]);
            $carBrand->children()->create(['name' => 'Nitro', 'name_ru' => 'Nitro', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Nitro')]);
            $carBrand->children()->create(['name' => 'Omni', 'name_ru' => 'Omni', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Omni')]);
            $carBrand->children()->create(['name' => 'RAM', 'name_ru' => 'RAM', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RAM')]);
            $carBrand->children()->create(['name' => 'Raider', 'name_ru' => 'Raider', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Raider')]);
            $carBrand->children()->create(['name' => 'Stratus', 'name_ru' => 'Stratus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Stratus')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'DongFeng', 'name_ru' => 'ДоджФинж', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DongFeng')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Doninvest', 'name_ru' => 'Донинвест', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Doninvest')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Donkervoort', 'name_ru' => 'Donkervoort', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Donkervoort')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'DS', 'name_ru' => 'ДС', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DS')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'DW Hower', 'name_ru' => 'DW Hower', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('DW Hower')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Eagle', 'name_ru' => 'Эгли', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Eagle')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Eagle Cars', 'name_ru' => 'Эгли авто', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Eagle Cars')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'E-Car', 'name_ru' => 'E-Car', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E-Car')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Excalibur', 'name_ru' => 'Экскалибур', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Excalibur')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'FAW', 'name_ru' => 'FAW', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('FAW')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Ferrari', 'name_ru' => 'Ферари', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ferrari')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '250 GTO', 'name_ru' => '250 GTO', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('250 GTO')]);
            $carBrand->children()->create(['name' => '328', 'name_ru' => '328', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('328')]);
            $carBrand->children()->create(['name' => '348', 'name_ru' => '348', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('348')]);
            $carBrand->children()->create(['name' => '360', 'name_ru' => '360', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('360')]);
            $carBrand->children()->create(['name' => '400', 'name_ru' => '400', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('400')]);
            $carBrand->children()->create(['name' => '412', 'name_ru' => '412', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('412')]);
            $carBrand->children()->create(['name' => '456', 'name_ru' => '456', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('456')]);
            $carBrand->children()->create(['name' => '458', 'name_ru' => '458', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('458')]);
            $carBrand->children()->create(['name' => '488', 'name_ru' => '488', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('488')]);
            $carBrand->children()->create(['name' => '512 BB', 'name_ru' => '512 BB', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('512 BB')]);
            $carBrand->children()->create(['name' => '512 M', 'name_ru' => '512 M', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('512 M')]);
            $carBrand->children()->create(['name' => '512 TR', 'name_ru' => '512 TR', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('512 TR')]);
            $carBrand->children()->create(['name' => '550', 'name_ru' => '550', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('550')]);
            $carBrand->children()->create(['name' => '575M', 'name_ru' => '575M', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('575M')]);
            $carBrand->children()->create(['name' => '599', 'name_ru' => '599', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('599')]);
            $carBrand->children()->create(['name' => '612', 'name_ru' => '612', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('612')]);
            $carBrand->children()->create(['name' => '812', 'name_ru' => '812', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('812')]);
            $carBrand->children()->create(['name' => 'California', 'name_ru' => 'California', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('California')]);
            $carBrand->children()->create(['name' => 'Dino 206 GT', 'name_ru' => 'Dino 206 GT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dino 206 GT')]);
            $carBrand->children()->create(['name' => 'Dino 208/308 GT4', 'name_ru' => 'Dino 208/308 GT4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dino 208/308 GT4')]);
            $carBrand->children()->create(['name' => 'Dino 246 GT', 'name_ru' => 'Dino 246 GT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dino 246 GT')]);
            $carBrand->children()->create(['name' => 'Enzo', 'name_ru' => 'Enzo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Enzo')]);
            $carBrand->children()->create(['name' => 'F12berlinetta', 'name_ru' => 'F12berlinetta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F12berlinetta')]);
            $carBrand->children()->create(['name' => 'F355', 'name_ru' => 'F355', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F355')]);
            $carBrand->children()->create(['name' => 'F40', 'name_ru' => 'F40', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F40')]);
            $carBrand->children()->create(['name' => 'F430', 'name_ru' => 'F430', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F430')]);
            $carBrand->children()->create(['name' => 'F50', 'name_ru' => 'F50', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F50')]);
            $carBrand->children()->create(['name' => 'F8', 'name_ru' => 'F8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F8')]);
            $carBrand->children()->create(['name' => 'FF', 'name_ru' => 'FF', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('FF')]);
            $carBrand->children()->create(['name' => 'FXX K', 'name_ru' => 'FXX K', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('FXX K')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Fiat', 'name_ru' => 'Фиат', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fiat')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '124', 'name_ru' => '124', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('124')]);
            $carBrand->children()->create(['name' => '124 Spider', 'name_ru' => '124 Spider', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('124 Spider')]);
            $carBrand->children()->create(['name' => '124 Sport Spider', 'name_ru' => '124 Sport Spider', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('124 Sport Spider')]);
            $carBrand->children()->create(['name' => '125', 'name_ru' => '125', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('125')]);
            $carBrand->children()->create(['name' => '126', 'name_ru' => '126', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('126')]);
            $carBrand->children()->create(['name' => '127', 'name_ru' => '127', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('127')]);
            $carBrand->children()->create(['name' => '128', 'name_ru' => '128', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('128')]);
            $carBrand->children()->create(['name' => '130', 'name_ru' => '130', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('130')]);
            $carBrand->children()->create(['name' => '131', 'name_ru' => '131', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('131')]);
            $carBrand->children()->create(['name' => '132', 'name_ru' => '132', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('132')]);
            $carBrand->children()->create(['name' => '238', 'name_ru' => '238', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('238')]);
            $carBrand->children()->create(['name' => '500', 'name_ru' => '500', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('500')]);
            $carBrand->children()->create(['name' => '500L', 'name_ru' => '500L', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('500L')]);
            $carBrand->children()->create(['name' => 'Albea', 'name_ru' => 'Albea', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Albea')]);
            $carBrand->children()->create(['name' => 'Barchetta', 'name_ru' => 'Barchetta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Barchetta')]);
            $carBrand->children()->create(['name' => 'Brava', 'name_ru' => 'Brava', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Brava')]);
            $carBrand->children()->create(['name' => 'Bravo', 'name_ru' => 'Bravo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bravo')]);
            $carBrand->children()->create(['name' => 'Coupe', 'name_ru' => 'Coupe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Coupe')]);
            $carBrand->children()->create(['name' => 'Croma', 'name_ru' => 'Croma', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Croma')]);
            $carBrand->children()->create(['name' => 'Doblo', 'name_ru' => 'Doblo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Doblo')]);
            $carBrand->children()->create(['name' => 'Freemont', 'name_ru' => 'Freemont', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Freemont')]);
            $carBrand->children()->create(['name' => 'Linea', 'name_ru' => 'Linea', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Linea')]);
            $carBrand->children()->create(['name' => 'Marea', 'name_ru' => 'Marea', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Marea')]);
            $carBrand->children()->create(['name' => 'Palio', 'name_ru' => 'Palio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Palio')]);
            $carBrand->children()->create(['name' => 'Panda', 'name_ru' => 'Panda', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Panda')]);
            $carBrand->children()->create(['name' => 'Punto', 'name_ru' => 'Punto', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Punto')]);
            $carBrand->children()->create(['name' => 'Scudo', 'name_ru' => 'Scudo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Scudo')]);
            $carBrand->children()->create(['name' => 'Stilo', 'name_ru' => 'Stilo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Stilo')]);
            $carBrand->children()->create(['name' => 'Tempra', 'name_ru' => 'Tempra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tempra')]);
            $carBrand->children()->create(['name' => 'Tipo', 'name_ru' => 'Tipo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tipo')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Fisker', 'name_ru' => 'Fisker', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fisker')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Flanker', 'name_ru' => 'Фланкер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Flanker')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Ford', 'name_ru' => 'Форд', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ford')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'C-MAX', 'name_ru' => 'C-MAX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C-MAX')]);
            $carBrand->children()->create(['name' => 'Contour', 'name_ru' => 'Contour', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Contour')]);
            $carBrand->children()->create(['name' => 'EcoSport', 'name_ru' => 'EcoSport', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('EcoSport')]);
            $carBrand->children()->create(['name' => 'Edge', 'name_ru' => 'Edge', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Edge')]);
            $carBrand->children()->create(['name' => 'Escape', 'name_ru' => 'Escape', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Escape')]);
            $carBrand->children()->create(['name' => 'Escort', 'name_ru' => 'Escort', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Escort')]);
            $carBrand->children()->create(['name' => 'Explorer', 'name_ru' => 'Explorer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Explorer')]);
            $carBrand->children()->create(['name' => 'F-150', 'name_ru' => 'F-150', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F-150')]);
            $carBrand->children()->create(['name' => 'Fiesta', 'name_ru' => 'Fiesta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fiesta')])
                ->children()->createMany([['name' => 'Mk1', 'name_ru' => 'Mk1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mk1')],['name' => 'Mk2', 'name_ru' => 'Mk2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mk2')],['name' => 'Mk3', 'name_ru' => 'Mk3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mk3')],['name' => 'Mk4', 'name_ru' => 'Mk4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mk4')],['name' => 'Mk1', 'name_ru' => 'Mk1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mk1')],['name' => 'Mk4 (Рестайлинг)', 'name_ru' => 'Mk4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mk4 (Рестайлинг)')],['name' => 'Mk5', 'name_ru' => 'Mk5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mk5')],['name' => 'Mk6', 'name_ru' => 'Mk6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mk6')],['name' => 'Mk6 (Рестайлинг)', 'name_ru' => 'Mk6 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mk6 (Рестайлинг)')],['name' => 'Mk7', 'name_ru' => 'Mk7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mk7')],]);
            $carBrand->children()->create(['name' => 'Focus', 'name_ru' => 'Focus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Focus')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],])
            ;
            $carBrand->children()->create(['name' => 'Focus ST', 'name_ru' => 'Focus ST', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Focus ST')]);
            $carBrand->children()->create(['name' => 'Freestyle', 'name_ru' => 'Freestyle', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Freestyle')]);
            $carBrand->children()->create(['name' => 'Fusion', 'name_ru' => 'Fusion', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fusion')]);
            $carBrand->children()->create(['name' => 'Galaxy', 'name_ru' => 'Galaxy', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Galaxy')]);
            $carBrand->children()->create(['name' => 'Granada', 'name_ru' => 'Granada', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Granada')]);
            $carBrand->children()->create(['name' => 'KA', 'name_ru' => 'KA', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('KA')]);
            $carBrand->children()->create(['name' => 'Kuga', 'name_ru' => 'Kuga', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kuga')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Maverick', 'name_ru' => 'Maverick', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Maverick')]);
            $carBrand->children()->create(['name' => 'Mondeo', 'name_ru' => 'Mondeo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mondeo')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],['name' => '4 (Рестайлинг)', 'name_ru' => '4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг)')],['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')],])
            ;
            $carBrand->children()->create(['name' => 'Mustang', 'name_ru' => 'Mustang', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mustang')]);
            $carBrand->children()->create(['name' => 'Probe', 'name_ru' => 'Probe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Probe')]);
            $carBrand->children()->create(['name' => 'Ranger', 'name_ru' => 'Ranger', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ranger')]);
            $carBrand->children()->create(['name' => 'S-MAX', 'name_ru' => 'S-MAX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S-MAX')]);
            $carBrand->children()->create(['name' => 'Scorpio', 'name_ru' => 'Scorpio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Scorpio')]);
            $carBrand->children()->create(['name' => 'Sierra', 'name_ru' => 'Sierra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sierra')]);
            $carBrand->children()->create(['name' => 'Taunus', 'name_ru' => 'Taunus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Taunus')]);
            $carBrand->children()->create(['name' => 'Tourneo Connect', 'name_ru' => 'Tourneo Connect', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tourneo Connect')]);
            $carBrand->children()->create(['name' => 'Tourneo Custom', 'name_ru' => 'Tourneo Custom', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tourneo Custom')]);
            $carBrand->children()->create(['name' => 'Windstar', 'name_ru' => 'Windstar', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Windstar')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Foton', 'name_ru' => 'Фотон', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Foton')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'FSO', 'name_ru' => 'FSO', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('FSO')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Fuqi', 'name_ru' => 'Fuqi', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fuqi')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'GAC', 'name_ru' => 'GAC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GAC')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Geely', 'name_ru' => 'Джели', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Geely')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Atlas', 'name_ru' => 'Atlas', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Atlas')]);
            $carBrand->children()->create(['name' => 'Beauty Leopard', 'name_ru' => 'Beauty Leopard', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Beauty Leopard')]);
            $carBrand->children()->create(['name' => 'CK (Otaka)', 'name_ru' => 'CK (Otaka)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CK (Otaka)')]);
            $carBrand->children()->create(['name' => 'Emgrand 7', 'name_ru' => 'Emgrand 7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Emgrand 7')]);
            $carBrand->children()->create(['name' => 'Emgrand EC7', 'name_ru' => 'Emgrand EC7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Emgrand EC7')]);
            $carBrand->children()->create(['name' => 'Emgrand EC8', 'name_ru' => 'Emgrand EC8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Emgrand EC8')]);
            $carBrand->children()->create(['name' => 'Emgrand GT', 'name_ru' => 'Emgrand GT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Emgrand GT')]);
            $carBrand->children()->create(['name' => 'Emgrand X7', 'name_ru' => 'Emgrand X7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Emgrand X7')]);
            $carBrand->children()->create(['name' => 'FC (Vision)', 'name_ru' => 'FC (Vision)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('FC (Vision)')]);
            $carBrand->children()->create(['name' => 'GC6', 'name_ru' => 'GC6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GC6')]);
            $carBrand->children()->create(['name' => 'GC9', 'name_ru' => 'GC9', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GC9')]);
            $carBrand->children()->create(['name' => 'Haoqing', 'name_ru' => 'Haoqing', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Haoqing')]);
            $carBrand->children()->create(['name' => 'LC (Panda)', 'name_ru' => 'LC (Panda)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LC (Panda)')]);
            $carBrand->children()->create(['name' => 'LC (Panda) Cross', 'name_ru' => 'LC (Panda) Cross', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LC (Panda) Cross')]);
            $carBrand->children()->create(['name' => 'MK', 'name_ru' => 'MK', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MK')]);
            $carBrand->children()->create(['name' => 'MK Cross', 'name_ru' => 'MK Cross', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MK Cross')]);
            $carBrand->children()->create(['name' => 'MR', 'name_ru' => 'MR', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MR')]);
            $carBrand->children()->create(['name' => 'SC7', 'name_ru' => 'SC7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SC7')]);
            $carBrand->children()->create(['name' => 'TX4', 'name_ru' => 'TX4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TX4')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Genesis', 'name_ru' => 'Дженезис', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Genesis')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'G70', 'name_ru' => 'G70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G70')]);
            $carBrand->children()->create(['name' => 'G80', 'name_ru' => 'G80', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G80')]);
            $carBrand->children()->create(['name' => 'G90', 'name_ru' => 'G90', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G90')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Geo', 'name_ru' => 'Geo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Geo')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'GMC', 'name_ru' => 'GMC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GMC')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Gonow', 'name_ru' => 'Gonow', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Gonow')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Gordon', 'name_ru' => 'Гордон', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Gordon')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'GP', 'name_ru' => 'ГП', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GP')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Great Wall', 'name_ru' => 'Грит Валл', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Great Wall')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Coolbear', 'name_ru' => 'Coolbear', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Coolbear')]);
            $carBrand->children()->create(['name' => 'Cowry (V80)', 'name_ru' => 'Cowry (V80)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cowry (V80)')]);
            $carBrand->children()->create(['name' => 'Deer', 'name_ru' => 'Deer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Deer')]);
            $carBrand->children()->create(['name' => 'Florid', 'name_ru' => 'Florid', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Florid')]);
            $carBrand->children()->create(['name' => 'Hover', 'name_ru' => 'Hover', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hover')]);
            $carBrand->children()->create(['name' => 'Hover H3', 'name_ru' => 'Hover H3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hover H3')]);
            $carBrand->children()->create(['name' => 'Hover H5', 'name_ru' => 'Hover H5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hover H5')]);
            $carBrand->children()->create(['name' => 'Hover H6', 'name_ru' => 'Hover H6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hover H6')]);
            $carBrand->children()->create(['name' => 'Hover M1 (Peri 4x4)', 'name_ru' => 'Hover M1 (Peri 4x4)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hover M1 (Peri 4x4)')]);
            $carBrand->children()->create(['name' => 'Hover M2', 'name_ru' => 'Hover M2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hover M2')]);
            $carBrand->children()->create(['name' => 'Hover M4', 'name_ru' => 'Hover M4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hover M4')]);
            $carBrand->children()->create(['name' => 'Pegasus', 'name_ru' => 'Pegasus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pegasus')]);
            $carBrand->children()->create(['name' => 'Peri', 'name_ru' => 'Peri', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Peri')]);
            $carBrand->children()->create(['name' => 'Safe', 'name_ru' => 'Safe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Safe')]);
            $carBrand->children()->create(['name' => 'Sailor', 'name_ru' => 'Sailor', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sailor')]);
            $carBrand->children()->create(['name' => 'Sing RUV', 'name_ru' => 'Sing RUV', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sing RUV')]);
            $carBrand->children()->create(['name' => 'Socool', 'name_ru' => 'Socool', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Socool')]);
            $carBrand->children()->create(['name' => 'Voleex C10 (Phenom)', 'name_ru' => 'Voleex C10 (Phenom)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Voleex C10 (Phenom)')]);
            $carBrand->children()->create(['name' => 'Voleex C30', 'name_ru' => 'Voleex C30', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Voleex C30')]);
            $carBrand->children()->create(['name' => 'Wingle', 'name_ru' => 'Wingle', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Wingle')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Hafei', 'name_ru' => 'Hafei', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hafei')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Haima', 'name_ru' => 'Haima', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Haima')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Hanomag', 'name_ru' => 'Hanomag', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hanomag')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Haval', 'name_ru' => 'Хавал', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Haval')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Hawtai', 'name_ru' => 'Hawtai', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hawtai')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Hindustan', 'name_ru' => 'Индостан', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hindustan')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Hispano-Suiza', 'name_ru' => 'Hispano-Suiza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hispano-Suiza')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Holden', 'name_ru' => 'Holden', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Holden')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Honda', 'name_ru' => 'Хонда', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Honda')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Accord', 'name_ru' => 'Accord', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Accord')])
                ->children()->createMany([['name' => 'I', 'name_ru' => 'I', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I')],['name' => 'II', 'name_ru' => 'II', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('II')],['name' => 'III', 'name_ru' => 'III', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('III')],['name' => 'IV', 'name_ru' => 'IV', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('IV')],['name' => 'I', 'name_ru' => 'I', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I')],['name' => 'V', 'name_ru' => 'V', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V')],['name' => 'VI', 'name_ru' => 'VI', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VI')],['name' => 'VII', 'name_ru' => 'VII', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VII')],['name' => 'VII (Рестайлинг)', 'name_ru' => 'VII (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VII (Рестайлинг)')],['name' => 'VIII', 'name_ru' => 'VIII', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VIII')],['name' => 'VIII (Рестайлинг)', 'name_ru' => 'VIII (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VIII (Рестайлинг)')],['name' => 'IX', 'name_ru' => 'IX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('IX')],['name' => 'IX (Рестайлинг)', 'name_ru' => 'IX (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('IX (Рестайлинг)')],['name' => 'X', 'name_ru' => 'X', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X')],]);

            $carBrand->children()->create(['name' => 'Airwave', 'name_ru' => 'Airwave', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Airwave')]);
            $carBrand->children()->create(['name' => 'Ascot', 'name_ru' => 'Ascot', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ascot')]);
            $carBrand->children()->create(['name' => 'Avancier', 'name_ru' => 'Avancier', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Avancier')]);
            $carBrand->children()->create(['name' => 'CR-V', 'name_ru' => 'CR-V', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CR-V')]);
            $carBrand->children()->create(['name' => 'Capa', 'name_ru' => 'Capa', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Capa')]);
            $carBrand->children()->create(['name' => 'City', 'name_ru' => 'City', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('City')]);
            $carBrand->children()->create(['name' => 'Civic', 'name_ru' => 'Civic', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Civic')])
                ->children()->createMany([['name' => 'I', 'name_ru' => 'I', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I')],['name' => 'II', 'name_ru' => 'II', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('II')],['name' => 'III', 'name_ru' => 'III', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('III')],['name' => 'IV', 'name_ru' => 'IV', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('IV')],['name' => 'I', 'name_ru' => 'I', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I')],['name' => 'V', 'name_ru' => 'V', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V')],['name' => 'VI', 'name_ru' => 'VI', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VI')],['name' => 'VII', 'name_ru' => 'VII', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VII')],['name' => 'VII (Рестайлинг)', 'name_ru' => 'VII (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VII (Рестайлинг)')],['name' => 'VIII', 'name_ru' => 'VIII', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VIII')],['name' => 'VIII (Рестайлинг)', 'name_ru' => 'VIII (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VIII (Рестайлинг)')],['name' => 'IX', 'name_ru' => 'IX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('IX')],['name' => 'IX (Рестайлинг)', 'name_ru' => 'IX (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('IX (Рестайлинг)')],['name' => 'X', 'name_ru' => 'X', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X')],]);

            $carBrand->children()->create(['name' => 'Civic Ferio', 'name_ru' => 'Civic Ferio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Civic Ferio')]);
            $carBrand->children()->create(['name' => 'Crossroad', 'name_ru' => 'Crossroad', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Crossroad')]);
            $carBrand->children()->create(['name' => 'Crosstour', 'name_ru' => 'Crosstour', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Crosstour')]);
            $carBrand->children()->create(['name' => 'Domani', 'name_ru' => 'Domani', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Domani')]);
            $carBrand->children()->create(['name' => 'Element', 'name_ru' => 'Element', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Element')]);
            $carBrand->children()->create(['name' => 'Elysion', 'name_ru' => 'Elysion', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Elysion')]);
            $carBrand->children()->create(['name' => 'Fit', 'name_ru' => 'Fit', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fit')]);
            $carBrand->children()->create(['name' => 'Freed', 'name_ru' => 'Freed', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Freed')]);
            $carBrand->children()->create(['name' => 'HR-V', 'name_ru' => 'HR-V', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('HR-V')]);
            $carBrand->children()->create(['name' => 'Insight', 'name_ru' => 'Insight', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Insight')]);
            $carBrand->children()->create(['name' => 'Integra', 'name_ru' => 'Integra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Integra')]);
            $carBrand->children()->create(['name' => 'Jazz', 'name_ru' => 'Jazz', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Jazz')]);
            $carBrand->children()->create(['name' => 'Mobilio', 'name_ru' => 'Mobilio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mobilio')]);
            $carBrand->children()->create(['name' => 'Mobilio Spike', 'name_ru' => 'Mobilio Spike', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mobilio Spike')]);
            $carBrand->children()->create(['name' => 'N-WGN', 'name_ru' => 'N-WGN', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('N-WGN')]);
            $carBrand->children()->create(['name' => 'Odyssey', 'name_ru' => 'Odyssey', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Odyssey')]);
            $carBrand->children()->create(['name' => 'Pilot', 'name_ru' => 'Pilot', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pilot')]);
            $carBrand->children()->create(['name' => 'Prelude', 'name_ru' => 'Prelude', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Prelude')]);
            $carBrand->children()->create(['name' => 'Ridgeline', 'name_ru' => 'Ridgeline', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ridgeline')]);
            $carBrand->children()->create(['name' => 'Stepwgn', 'name_ru' => 'Stepwgn', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Stepwgn')]);
            $carBrand->children()->create(['name' => 'Stream', 'name_ru' => 'Stream', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Stream')]);
            $carBrand->children()->create(['name' => 'Torneo', 'name_ru' => 'Torneo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Torneo')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Horch', 'name_ru' => 'Horch', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Horch')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'HuangHai', 'name_ru' => 'Huanghai', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('HuangHai')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Hudson', 'name_ru' => 'Гудзон', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hudson')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Hummer', 'name_ru' => 'зуммер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hummer')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'H1', 'name_ru' => 'H1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('H1')]);
            $carBrand->children()->create(['name' => 'H2', 'name_ru' => 'H2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('H2')]);
            $carBrand->children()->create(['name' => 'H3', 'name_ru' => 'H3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('H3')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Hyundai', 'name_ru' => 'Хюндай', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hyundai')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Accent', 'name_ru' => 'Accent', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Accent')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],])
            ;
            $carBrand->children()->create(['name' => 'Avante', 'name_ru' => 'Avante', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Avante')]);
            $carBrand->children()->create(['name' => 'Coupe', 'name_ru' => 'Coupe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Coupe')]);
            $carBrand->children()->create(['name' => 'Creta', 'name_ru' => 'Creta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Creta')]);
            $carBrand->children()->create(['name' => 'Elantra', 'name_ru' => 'Elantra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Elantra')]);
            $carBrand->children()->create(['name' => 'Equus', 'name_ru' => 'Equus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Equus')]);
            $carBrand->children()->create(['name' => 'Genesis', 'name_ru' => 'Genesis', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Genesis')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;;
            $carBrand->children()->create(['name' => 'Getz', 'name_ru' => 'Getz', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Getz')]);
            $carBrand->children()->create(['name' => 'Grace', 'name_ru' => 'Grace', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Grace')]);
            $carBrand->children()->create(['name' => 'Grand Starex', 'name_ru' => 'Grand Starex', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Grand Starex')]);
            $carBrand->children()->create(['name' => 'Grandeur', 'name_ru' => 'Grandeur', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Grandeur')]);
            $carBrand->children()->create(['name' => 'H-1', 'name_ru' => 'H-1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('H-1')]);
            $carBrand->children()->create(['name' => 'H200', 'name_ru' => 'H200', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('H200')]);
            $carBrand->children()->create(['name' => 'Lantra', 'name_ru' => 'Lantra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lantra')]);
            $carBrand->children()->create(['name' => 'Matrix', 'name_ru' => 'Matrix', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Matrix')]);
            $carBrand->children()->create(['name' => 'Pony', 'name_ru' => 'Pony', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pony')]);
            $carBrand->children()->create(['name' => 'Santa Fe', 'name_ru' => 'Santa Fe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Santa Fe')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],])
            ;
            $carBrand->children()->create(['name' => 'Solaris', 'name_ru' => 'Solaris', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Solaris')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Sonata', 'name_ru' => 'Sonata', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sonata')])
                ->children()->createMany([
                    ['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],
                    ['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],
                    ['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],
                    ['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],
                    ['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],
                    ['name' => '4 (Рестайлинг)', 'name_ru' => '4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг)')],
                    ['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')],
                    ['name' => '6', 'name_ru' => '6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('6')],
                    ['name' => '7', 'name_ru' => '7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('7')],
                    ['name' => '7 (Рестайлинг)', 'name_ru' => '7 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('7 (Рестайлинг)')]

                ]);
            $carBrand->children()->create(['name' => 'Starex', 'name_ru' => 'Starex', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Starex')]);
            $carBrand->children()->create(['name' => 'Terracan', 'name_ru' => 'Terracan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Terracan')]);
            $carBrand->children()->create(['name' => 'Trajet', 'name_ru' => 'Trajet', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Trajet')]);
            $carBrand->children()->create(['name' => 'Tucson', 'name_ru' => 'Tucson', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tucson')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Veloster', 'name_ru' => 'Veloster', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Veloster')]);
            $carBrand->children()->create(['name' => 'Verna', 'name_ru' => 'Verna', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Verna')]);
            $carBrand->children()->create(['name' => 'i20', 'name_ru' => 'i20', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('i20')]);
            $carBrand->children()->create(['name' => 'i30', 'name_ru' => 'i30', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('i30')]);
            $carBrand->children()->create(['name' => 'i40', 'name_ru' => 'i40', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('i40')]);
            $carBrand->children()->create(['name' => 'ix35', 'name_ru' => 'ix35', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ix35')]);
            $carBrand->children()->create(['name' => 'ix55', 'name_ru' => 'ix55', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ix55')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Infiniti', 'name_ru' => 'Инфинити', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Infiniti')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'EX', 'name_ru' => 'EX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('EX')]);
            $carBrand->children()->create(['name' => 'FX', 'name_ru' => 'FX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('FX')]);
            $carBrand->children()->create(['name' => 'G', 'name_ru' => 'G', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G')]);
            $carBrand->children()->create(['name' => 'I', 'name_ru' => 'I', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I')]);
            $carBrand->children()->create(['name' => 'J', 'name_ru' => 'J', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J')]);
            $carBrand->children()->create(['name' => 'JX', 'name_ru' => 'JX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('JX')]);
            $carBrand->children()->create(['name' => 'M', 'name_ru' => 'M', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M')]);
            $carBrand->children()->create(['name' => 'Q', 'name_ru' => 'Q', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Q')]);
            $carBrand->children()->create(['name' => 'Q30', 'name_ru' => 'Q30', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Q30')]);
            $carBrand->children()->create(['name' => 'Q40', 'name_ru' => 'Q40', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Q40')]);
            $carBrand->children()->create(['name' => 'Q50', 'name_ru' => 'Q50', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Q50')]);
            $carBrand->children()->create(['name' => 'Q60', 'name_ru' => 'Q60', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Q60')]);
            $carBrand->children()->create(['name' => 'Q70', 'name_ru' => 'Q70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Q70')]);
            $carBrand->children()->create(['name' => 'QX30', 'name_ru' => 'QX30', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('QX30')]);
            $carBrand->children()->create(['name' => 'QX4', 'name_ru' => 'QX4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('QX4')]);
            $carBrand->children()->create(['name' => 'QX50', 'name_ru' => 'QX50', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('QX50')]);
            $carBrand->children()->create(['name' => 'QX56', 'name_ru' => 'QX56', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('QX56')]);
            $carBrand->children()->create(['name' => 'QX60', 'name_ru' => 'QX60', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('QX60')]);
            $carBrand->children()->create(['name' => 'QX70', 'name_ru' => 'QX70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('QX70')]);
            $carBrand->children()->create(['name' => 'QX80', 'name_ru' => 'QX80', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('QX80')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Innocenti', 'name_ru' => 'Инноченти', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Innocenti')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'International', 'name_ru' => 'Интернациаонал', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('International')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Invicta', 'name_ru' => 'Invicta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Invicta')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Iran Khodro', 'name_ru' => 'Иран Ходро', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Iran Khodro')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Isdera', 'name_ru' => 'Isdera', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Isdera')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Isuzu', 'name_ru' => 'Isuzu', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Isuzu')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '117', 'name_ru' => '117', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('117')]);
            $carBrand->children()->create(['name' => 'Amigo', 'name_ru' => 'Amigo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Amigo')]);
            $carBrand->children()->create(['name' => 'Ascender', 'name_ru' => 'Ascender', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ascender')]);
            $carBrand->children()->create(['name' => 'Aska', 'name_ru' => 'Aska', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aska')]);
            $carBrand->children()->create(['name' => 'Axiom', 'name_ru' => 'Axiom', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Axiom')]);
            $carBrand->children()->create(['name' => 'Bellett', 'name_ru' => 'Bellett', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bellett')]);
            $carBrand->children()->create(['name' => 'Bighorn', 'name_ru' => 'Bighorn', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bighorn')]);
            $carBrand->children()->create(['name' => 'D-Max', 'name_ru' => 'D-Max', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D-Max')]);
            $carBrand->children()->create(['name' => 'Fargo', 'name_ru' => 'Fargo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fargo')]);
            $carBrand->children()->create(['name' => 'Fargo Filly', 'name_ru' => 'Fargo Filly', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fargo Filly')]);
            $carBrand->children()->create(['name' => 'Florian', 'name_ru' => 'Florian', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Florian')]);
            $carBrand->children()->create(['name' => 'Gemini', 'name_ru' => 'Gemini', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Gemini')]);
            $carBrand->children()->create(['name' => 'Hombre', 'name_ru' => 'Hombre', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hombre')]);
            $carBrand->children()->create(['name' => 'Impulse', 'name_ru' => 'Impulse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Impulse')]);
            $carBrand->children()->create(['name' => 'KB', 'name_ru' => 'KB', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('KB')]);
            $carBrand->children()->create(['name' => 'MU', 'name_ru' => 'MU', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MU')]);
            $carBrand->children()->create(['name' => 'MU-7', 'name_ru' => 'MU-7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MU-7')]);
            $carBrand->children()->create(['name' => 'MU-X', 'name_ru' => 'MU-X', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MU-X')]);
            $carBrand->children()->create(['name' => 'Piazza', 'name_ru' => 'Piazza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Piazza')]);
            $carBrand->children()->create(['name' => 'Rodeo', 'name_ru' => 'Rodeo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rodeo')]);
            $carBrand->children()->create(['name' => 'Stylus', 'name_ru' => 'Stylus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Stylus')]);
            $carBrand->children()->create(['name' => 'TF (Pickup)', 'name_ru' => 'TF (Pickup)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TF (Pickup)')]);
            $carBrand->children()->create(['name' => 'Trooper', 'name_ru' => 'Trooper', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Trooper')]);
            $carBrand->children()->create(['name' => 'VehiCross', 'name_ru' => 'VehiCross', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VehiCross')]);
            $carBrand->children()->create(['name' => 'Wizard', 'name_ru' => 'Wizard', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Wizard')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'JAC', 'name_ru' => 'JAC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('JAC')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Jaguar', 'name_ru' => 'Ягуар', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Jaguar')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'E-Pace', 'name_ru' => 'E-Pace', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E-Pace')]);
            $carBrand->children()->create(['name' => 'E-type', 'name_ru' => 'E-type', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E-type')]);
            $carBrand->children()->create(['name' => 'F-Pace', 'name_ru' => 'F-Pace', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F-Pace')]);
            $carBrand->children()->create(['name' => 'F-Type', 'name_ru' => 'F-Type', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F-Type')]);
            $carBrand->children()->create(['name' => 'I-Pace', 'name_ru' => 'I-Pace', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('I-Pace')]);
            $carBrand->children()->create(['name' => 'Mark 2', 'name_ru' => 'Mark 2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mark 2')]);
            $carBrand->children()->create(['name' => 'S-Type', 'name_ru' => 'S-Type', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S-Type')]);
            $carBrand->children()->create(['name' => 'X-Type', 'name_ru' => 'X-Type', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X-Type')]);
            $carBrand->children()->create(['name' => 'XE', 'name_ru' => 'XE', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XE')]);
            $carBrand->children()->create(['name' => 'XF', 'name_ru' => 'XF', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XF')]);
            $carBrand->children()->create(['name' => 'XFR', 'name_ru' => 'XFR', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XFR')]);
            $carBrand->children()->create(['name' => 'XJ', 'name_ru' => 'XJ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XJ')]);
            $carBrand->children()->create(['name' => 'XJ220', 'name_ru' => 'XJ220', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XJ220')]);
            $carBrand->children()->create(['name' => 'XJR', 'name_ru' => 'XJR', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XJR')]);
            $carBrand->children()->create(['name' => 'XJS', 'name_ru' => 'XJS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XJS')]);
            $carBrand->children()->create(['name' => 'XK', 'name_ru' => 'XK', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XK')]);
            $carBrand->children()->create(['name' => 'XKR', 'name_ru' => 'XKR', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XKR')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Jeep', 'name_ru' => 'Джип', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Jeep')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'CJ', 'name_ru' => 'CJ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CJ')]);
            $carBrand->children()->create(['name' => 'Cherokee', 'name_ru' => 'Cherokee', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cherokee')]);
            $carBrand->children()->create(['name' => 'Commander', 'name_ru' => 'Commander', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Commander')]);
            $carBrand->children()->create(['name' => 'Compass', 'name_ru' => 'Compass', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Compass')]);
            $carBrand->children()->create(['name' => 'Gladiator', 'name_ru' => 'Gladiator', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Gladiator')]);
            $carBrand->children()->create(['name' => 'Grand Cherokee', 'name_ru' => 'Grand Cherokee', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Grand Cherokee')]);
            $carBrand->children()->create(['name' => 'Grand Wagoneer', 'name_ru' => 'Grand Wagoneer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Grand Wagoneer')]);
            $carBrand->children()->create(['name' => 'Liberty (North America)', 'name_ru' => 'Liberty (North America)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Liberty (North America)')]);
            $carBrand->children()->create(['name' => 'Liberty (Patriot)', 'name_ru' => 'Liberty (Patriot)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Liberty (Patriot)')]);
            $carBrand->children()->create(['name' => 'Renegade', 'name_ru' => 'Renegade', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Renegade')]);
            $carBrand->children()->create(['name' => 'Wrangler', 'name_ru' => 'Wrangler', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Wrangler')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Jensen', 'name_ru' => 'Jensen', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Jensen')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Jinbei', 'name_ru' => 'Jinbei', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Jinbei')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'JMC', 'name_ru' => 'JMC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('JMC')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Kia', 'name_ru' => 'Кия', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kia')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Avella', 'name_ru' => 'Avella', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Avella')]);
            $carBrand->children()->create(['name' => 'Cadenza', 'name_ru' => 'Cadenza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cadenza')]);
            $carBrand->children()->create(['name' => 'Capital', 'name_ru' => 'Capital', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Capital')]);
            $carBrand->children()->create(['name' => 'Carens', 'name_ru' => 'Carens', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Carens')]);
            $carBrand->children()->create(['name' => 'Carnival', 'name_ru' => 'Carnival', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Carnival')]);
            $carBrand->children()->create(['name' => 'Carstar', 'name_ru' => 'Carstar', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Carstar')]);
            $carBrand->children()->create(['name' => 'Ceed', 'name_ru' => 'Ceed', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ceed')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],])
            ;
            $carBrand->children()->create(['name' => 'Ceed GT', 'name_ru' => 'Ceed GT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ceed GT')]);
            $carBrand->children()->create(['name' => 'Cerato', 'name_ru' => 'Cerato', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cerato')]);
            $carBrand->children()->create(['name' => 'Clarus', 'name_ru' => 'Clarus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Clarus')]);
            $carBrand->children()->create(['name' => 'Concord', 'name_ru' => 'Concord', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Concord')]);
            $carBrand->children()->create(['name' => 'Elan', 'name_ru' => 'Elan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Elan')]);
            $carBrand->children()->create(['name' => 'Joice', 'name_ru' => 'Joice', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Joice')]);
            $carBrand->children()->create(['name' => 'K900', 'name_ru' => 'K900', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('K900')]);
            $carBrand->children()->create(['name' => 'Magentis', 'name_ru' => 'Magentis', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Magentis')]);
            $carBrand->children()->create(['name' => 'Mohave (Borrego)', 'name_ru' => 'Mohave (Borrego)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mohave (Borrego)')]);
            $carBrand->children()->create(['name' => 'Opirus', 'name_ru' => 'Opirus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Opirus')]);
            $carBrand->children()->create(['name' => 'Optima', 'name_ru' => 'Optima', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Optima')])
                ->children()->createMany([
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],
                    ['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],
                    ['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],
                    ['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],
                    ['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],
                    ['name' => '4 (Рестайлинг)', 'name_ru' => '4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг)')],
                    ['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')],
                    ['name' => '5 (Рестайлинг)', 'name_ru' => '5 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5 (Рестайлинг)')]

                ]);
            $carBrand->children()->create(['name' => 'Picanto', 'name_ru' => 'Picanto', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Picanto')]);
            $carBrand->children()->create(['name' => 'Pregio', 'name_ru' => 'Pregio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pregio')]);
            $carBrand->children()->create(['name' => 'Quoris', 'name_ru' => 'Quoris', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Quoris')]);
            $carBrand->children()->create(['name' => 'Rio', 'name_ru' => 'Rio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rio')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],])
            ;
            $carBrand->children()->create(['name' => 'Sephia', 'name_ru' => 'Sephia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sephia')]);
            $carBrand->children()->create(['name' => 'Shuma', 'name_ru' => 'Shuma', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Shuma')]);
            $carBrand->children()->create(['name' => 'Sorento', 'name_ru' => 'Sorento', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sorento')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3 Prime', 'name_ru' => '3 Prime', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 Prime')],['name' => '3 Prime (Рестайлинг)', 'name_ru' => '3 Prime (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 Prime (Рестайлинг)')],])
            ;
            $carBrand->children()->create(['name' => 'Soul', 'name_ru' => 'Soul', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Soul')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],])
            ;
            $carBrand->children()->create(['name' => 'Spectra', 'name_ru' => 'Spectra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Spectra')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Sportage', 'name_ru' => 'Sportage', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sportage')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],['name' => '4 (Рестайлинг)', 'name_ru' => '4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг)')],])
            ;
            $carBrand->children()->create(['name' => 'Stinger', 'name_ru' => 'Stinger', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Stinger')]);
            $carBrand->children()->create(['name' => 'Venga', 'name_ru' => 'Venga', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Venga')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Koenigsegg', 'name_ru' => 'Koenigsegg', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Koenigsegg')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'KTM AG', 'name_ru' => 'КТМ АГ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('KTM AG')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'LADA (ВАЗ)', 'name_ru' => 'ЛАДА (ВАЗ)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LADA (ВАЗ)')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '1111 Ока', 'name_ru' => '1111 Ока', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1111 Ока')]);
            $carBrand->children()->create(['name' => '2101', 'name_ru' => '2101', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2101')]);
            $carBrand->children()->create(['name' => '2102', 'name_ru' => '2102', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2102')]);
            $carBrand->children()->create(['name' => '2103', 'name_ru' => '2103', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2103')]);
            $carBrand->children()->create(['name' => '2104', 'name_ru' => '2104', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2104')]);
            $carBrand->children()->create(['name' => '2105', 'name_ru' => '2105', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2105')]);
            $carBrand->children()->create(['name' => '2106', 'name_ru' => '2106', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2106')]);
            $carBrand->children()->create(['name' => '2107', 'name_ru' => '2107', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2107')]);
            $carBrand->children()->create(['name' => '2108', 'name_ru' => '2108', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2108')]);
            $carBrand->children()->create(['name' => '2109', 'name_ru' => '2109', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2109')]);
            $carBrand->children()->create(['name' => '21099', 'name_ru' => '21099', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('21099')]);
            $carBrand->children()->create(['name' => '2110', 'name_ru' => '2110', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2110')]);
            $carBrand->children()->create(['name' => '2111', 'name_ru' => '2111', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2111')]);
            $carBrand->children()->create(['name' => '2112', 'name_ru' => '2112', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2112')]);
            $carBrand->children()->create(['name' => '2113', 'name_ru' => '2113', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2113')]);
            $carBrand->children()->create(['name' => '2114', 'name_ru' => '2114', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2114')]);
            $carBrand->children()->create(['name' => '2115', 'name_ru' => '2115', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2115')]);
            $carBrand->children()->create(['name' => '2120 Надежда', 'name_ru' => '2120 Надежда', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2120 Надежда')]);
            $carBrand->children()->create(['name' => '2121 (4x4)', 'name_ru' => '2121 (4x4)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2121 (4x4)')]);
            $carBrand->children()->create(['name' => '2123', 'name_ru' => '2123', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2123')]);
            $carBrand->children()->create(['name' => '2129', 'name_ru' => '2129', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2129')]);
            $carBrand->children()->create(['name' => '2131 (4x4)', 'name_ru' => '2131 (4x4)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2131 (4x4)')]);
            $carBrand->children()->create(['name' => '2328', 'name_ru' => '2328', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2328')]);
            $carBrand->children()->create(['name' => '2329', 'name_ru' => '2329', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2329')]);
            $carBrand->children()->create(['name' => 'Granta', 'name_ru' => 'Granta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Granta')]);
            $carBrand->children()->create(['name' => 'Kalina', 'name_ru' => 'Kalina', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kalina')]);
            $carBrand->children()->create(['name' => 'Largus', 'name_ru' => 'Largus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Largus')]);
            $carBrand->children()->create(['name' => 'Priora', 'name_ru' => 'Priora', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Priora')]);
            $carBrand->children()->create(['name' => 'Vesta', 'name_ru' => 'Vesta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vesta')]);
            $carBrand->children()->create(['name' => 'XRAY', 'name_ru' => 'XRAY', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XRAY')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Lamborghini', 'name_ru' => 'Ламборгини', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lamborghini')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '350/400 GT', 'name_ru' => '350/400 GT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('350/400 GT')]);
            $carBrand->children()->create(['name' => 'Aventador', 'name_ru' => 'Aventador', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aventador')]);
            $carBrand->children()->create(['name' => 'Centenario', 'name_ru' => 'Centenario', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Centenario')]);
            $carBrand->children()->create(['name' => 'Countach', 'name_ru' => 'Countach', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Countach')]);
            $carBrand->children()->create(['name' => 'Diablo', 'name_ru' => 'Diablo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Diablo')]);
            $carBrand->children()->create(['name' => 'Egoista', 'name_ru' => 'Egoista', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Egoista')]);
            $carBrand->children()->create(['name' => 'Espada', 'name_ru' => 'Espada', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Espada')]);
            $carBrand->children()->create(['name' => 'Gallardo', 'name_ru' => 'Gallardo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Gallardo')]);
            $carBrand->children()->create(['name' => 'Huracán', 'name_ru' => 'Huracán', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Huracán')]);
            $carBrand->children()->create(['name' => 'Islero', 'name_ru' => 'Islero', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Islero')]);
            $carBrand->children()->create(['name' => 'Jalpa', 'name_ru' => 'Jalpa', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Jalpa')]);
            $carBrand->children()->create(['name' => 'Jarama', 'name_ru' => 'Jarama', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Jarama')]);
            $carBrand->children()->create(['name' => 'LM001', 'name_ru' => 'LM001', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LM001')]);
            $carBrand->children()->create(['name' => 'LM002', 'name_ru' => 'LM002', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LM002')]);
            $carBrand->children()->create(['name' => 'Miura', 'name_ru' => 'Miura', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Miura')]);
            $carBrand->children()->create(['name' => 'Murcielago', 'name_ru' => 'Murcielago', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Murcielago')]);
            $carBrand->children()->create(['name' => 'Reventon', 'name_ru' => 'Reventon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Reventon')]);
            $carBrand->children()->create(['name' => 'Sesto Elemento', 'name_ru' => 'Sesto Elemento', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sesto Elemento')]);
            $carBrand->children()->create(['name' => 'Silhouette', 'name_ru' => 'Silhouette', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Silhouette')]);
            $carBrand->children()->create(['name' => 'Urraco', 'name_ru' => 'Urraco', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Urraco')]);
            $carBrand->children()->create(['name' => 'Urus', 'name_ru' => 'Urus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Urus')]);
            $carBrand->children()->create(['name' => 'Veneno', 'name_ru' => 'Veneno', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Veneno')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Lancia', 'name_ru' => 'Lancia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lancia')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'A 112', 'name_ru' => 'A 112', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A 112')]);
            $carBrand->children()->create(['name' => 'Appia', 'name_ru' => 'Appia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Appia')]);
            $carBrand->children()->create(['name' => 'Aurelia', 'name_ru' => 'Aurelia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aurelia')]);
            $carBrand->children()->create(['name' => 'Beta', 'name_ru' => 'Beta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Beta')]);
            $carBrand->children()->create(['name' => 'Dedra', 'name_ru' => 'Dedra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dedra')]);
            $carBrand->children()->create(['name' => 'Delta', 'name_ru' => 'Delta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Delta')]);
            $carBrand->children()->create(['name' => 'Flaminia', 'name_ru' => 'Flaminia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Flaminia')]);
            $carBrand->children()->create(['name' => 'Flavia', 'name_ru' => 'Flavia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Flavia')]);
            $carBrand->children()->create(['name' => 'Fulvia', 'name_ru' => 'Fulvia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fulvia')]);
            $carBrand->children()->create(['name' => 'Gamma', 'name_ru' => 'Gamma', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Gamma')]);
            $carBrand->children()->create(['name' => 'Hyena', 'name_ru' => 'Hyena', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hyena')]);
            $carBrand->children()->create(['name' => 'Kappa', 'name_ru' => 'Kappa', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kappa')]);
            $carBrand->children()->create(['name' => 'Lambda', 'name_ru' => 'Lambda', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lambda')]);
            $carBrand->children()->create(['name' => 'Lybra', 'name_ru' => 'Lybra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lybra')]);
            $carBrand->children()->create(['name' => 'Monte Carlo', 'name_ru' => 'Monte Carlo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Monte Carlo')]);
            $carBrand->children()->create(['name' => 'Musa', 'name_ru' => 'Musa', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Musa')]);
            $carBrand->children()->create(['name' => 'Phedra', 'name_ru' => 'Phedra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Phedra')]);
            $carBrand->children()->create(['name' => 'Prisma', 'name_ru' => 'Prisma', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Prisma')]);
            $carBrand->children()->create(['name' => 'Rally 037', 'name_ru' => 'Rally 037', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rally 037')]);
            $carBrand->children()->create(['name' => 'Stratos', 'name_ru' => 'Stratos', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Stratos')]);
            $carBrand->children()->create(['name' => 'Thema', 'name_ru' => 'Thema', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Thema')]);
            $carBrand->children()->create(['name' => 'Thesis', 'name_ru' => 'Thesis', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Thesis')]);
            $carBrand->children()->create(['name' => 'Trevi', 'name_ru' => 'Trevi', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Trevi')]);
            $carBrand->children()->create(['name' => 'Voyager', 'name_ru' => 'Voyager', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Voyager')]);
            $carBrand->children()->create(['name' => 'Y10', 'name_ru' => 'Y10', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Y10')]);
            $carBrand->children()->create(['name' => 'Ypsilon', 'name_ru' => 'Ypsilon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ypsilon')]);
            $carBrand->children()->create(['name' => 'Zeta', 'name_ru' => 'Zeta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Zeta')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Land Rover', 'name_ru' => 'Ланд Ровер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Land Rover')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Defender', 'name_ru' => 'Defender', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Defender')]);
            $carBrand->children()->create(['name' => 'Discovery', 'name_ru' => 'Discovery', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Discovery')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '4 (Рестайлинг)', 'name_ru' => '4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг)')],['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')],])
            ;
            $carBrand->children()->create(['name' => 'Discovery Sport', 'name_ru' => 'Discovery Sport', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Discovery Sport')]);
            $carBrand->children()->create(['name' => 'Freelander', 'name_ru' => 'Freelander', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Freelander')]);
            $carBrand->children()->create(['name' => 'Range Rover', 'name_ru' => 'Range Rover', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Range Rover')]);
            $carBrand->children()->create(['name' => 'Range Rover Evoque', 'name_ru' => 'Range Rover Evoque', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Range Rover Evoque')]);
            $carBrand->children()->create(['name' => 'Range Rover Sport', 'name_ru' => 'Range Rover Sport', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Range Rover Sport')]);
            $carBrand->children()->create(['name' => 'Range Rover Velar', 'name_ru' => 'Range Rover Velar', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Range Rover Velar')]);
            $carBrand->children()->create(['name' => 'Series I', 'name_ru' => 'Series I', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Series I')]);
            $carBrand->children()->create(['name' => 'Series II', 'name_ru' => 'Series II', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Series II')]);
            $carBrand->children()->create(['name' => 'Series III', 'name_ru' => 'Series III', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Series III')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Landwind', 'name_ru' => 'Landwind', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Landwind')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Lexus', 'name_ru' => 'Лексус', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lexus')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'CT', 'name_ru' => 'CT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CT')]);
            $carBrand->children()->create(['name' => 'ES', 'name_ru' => 'ES', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ES')]);
            $carBrand->children()->create(['name' => 'GS', 'name_ru' => 'GS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GS')]);
            $carBrand->children()->create(['name' => 'GS F', 'name_ru' => 'GS F', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GS F')]);
            $carBrand->children()->create(['name' => 'GX', 'name_ru' => 'GX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GX')]);
            $carBrand->children()->create(['name' => 'HS', 'name_ru' => 'HS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('HS')]);
            $carBrand->children()->create(['name' => 'IS', 'name_ru' => 'IS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('IS')]);
            $carBrand->children()->create(['name' => 'IS F', 'name_ru' => 'IS F', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('IS F')]);
            $carBrand->children()->create(['name' => 'LC', 'name_ru' => 'LC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LC')]);
            $carBrand->children()->create(['name' => 'LFA', 'name_ru' => 'LFA', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LFA')]);
            $carBrand->children()->create(['name' => 'LS', 'name_ru' => 'LS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LS')]);
            $carBrand->children()->create(['name' => 'LX', 'name_ru' => 'LX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LX')]);
            $carBrand->children()->create(['name' => 'NX', 'name_ru' => 'NX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('NX')]);
            $carBrand->children()->create(['name' => 'RC', 'name_ru' => 'RC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RC')]);
            $carBrand->children()->create(['name' => 'RC F', 'name_ru' => 'RC F', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RC F')]);
            $carBrand->children()->create(['name' => 'RX', 'name_ru' => 'RX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RX')]);
            $carBrand->children()->create(['name' => 'SC', 'name_ru' => 'SC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SC')]);
            $carBrand->children()->create(['name' => 'UX', 'name_ru' => 'UX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('UX')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Liebao Motor', 'name_ru' => 'Liebao Motor', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Liebao Motor')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Lifan', 'name_ru' => 'Лифан', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lifan')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Breez (520)', 'name_ru' => 'Breez (520)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Breez (520)')]);
            $carBrand->children()->create(['name' => 'Cebrium (720)', 'name_ru' => 'Cebrium (720)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cebrium (720)')]);
            $carBrand->children()->create(['name' => 'Celliya (530)', 'name_ru' => 'Celliya (530)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Celliya (530)')]);
            $carBrand->children()->create(['name' => 'Murman (820)', 'name_ru' => 'Murman (820)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Murman (820)')]);
            $carBrand->children()->create(['name' => 'Myway', 'name_ru' => 'Myway', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Myway')]);
            $carBrand->children()->create(['name' => 'Smily', 'name_ru' => 'Smily', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Smily')]);
            $carBrand->children()->create(['name' => 'Solano', 'name_ru' => 'Solano', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Solano')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'X50', 'name_ru' => 'X50', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X50')]);
            $carBrand->children()->create(['name' => 'X60', 'name_ru' => 'X60', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X60')]);
            $carBrand->children()->create(['name' => 'X70', 'name_ru' => 'X70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X70')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Ligier', 'name_ru' => 'Ligier', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ligier')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Lincoln', 'name_ru' => 'Линкольн', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lincoln')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Aviator', 'name_ru' => 'Aviator', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aviator')]);
            $carBrand->children()->create(['name' => 'Blackwood', 'name_ru' => 'Blackwood', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Blackwood')]);
            $carBrand->children()->create(['name' => 'Capri', 'name_ru' => 'Capri', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Capri')]);
            $carBrand->children()->create(['name' => 'Continental', 'name_ru' => 'Continental', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Continental')]);
            $carBrand->children()->create(['name' => 'Corsair', 'name_ru' => 'Corsair', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Corsair')]);
            $carBrand->children()->create(['name' => 'LS', 'name_ru' => 'LS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LS')]);
            $carBrand->children()->create(['name' => 'MKC', 'name_ru' => 'MKC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MKC')]);
            $carBrand->children()->create(['name' => 'MKS', 'name_ru' => 'MKS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MKS')]);
            $carBrand->children()->create(['name' => 'MKT', 'name_ru' => 'MKT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MKT')]);
            $carBrand->children()->create(['name' => 'MKX', 'name_ru' => 'MKX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MKX')]);
            $carBrand->children()->create(['name' => 'MKZ', 'name_ru' => 'MKZ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MKZ')]);
            $carBrand->children()->create(['name' => 'Mark III', 'name_ru' => 'Mark III', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mark III')]);
            $carBrand->children()->create(['name' => 'Mark IV', 'name_ru' => 'Mark IV', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mark IV')]);
            $carBrand->children()->create(['name' => 'Mark LT', 'name_ru' => 'Mark LT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mark LT')]);
            $carBrand->children()->create(['name' => 'Mark VII', 'name_ru' => 'Mark VII', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mark VII')]);
            $carBrand->children()->create(['name' => 'Mark VIII', 'name_ru' => 'Mark VIII', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mark VIII')]);
            $carBrand->children()->create(['name' => 'Nautilus', 'name_ru' => 'Nautilus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Nautilus')]);
            $carBrand->children()->create(['name' => 'Navigator', 'name_ru' => 'Navigator', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Navigator')]);
            $carBrand->children()->create(['name' => 'Premiere', 'name_ru' => 'Premiere', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Premiere')]);
            $carBrand->children()->create(['name' => 'Town Car', 'name_ru' => 'Town Car', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Town Car')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Lotus', 'name_ru' => 'Лотос', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lotus')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '340R', 'name_ru' => '340R', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('340R')]);
            $carBrand->children()->create(['name' => 'Eclat', 'name_ru' => 'Eclat', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Eclat')]);
            $carBrand->children()->create(['name' => 'Elan', 'name_ru' => 'Elan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Elan')]);
            $carBrand->children()->create(['name' => 'Elise', 'name_ru' => 'Elise', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Elise')]);
            $carBrand->children()->create(['name' => 'Elite', 'name_ru' => 'Elite', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Elite')]);
            $carBrand->children()->create(['name' => 'Esprit', 'name_ru' => 'Esprit', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Esprit')]);
            $carBrand->children()->create(['name' => 'Europa', 'name_ru' => 'Europa', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Europa')]);
            $carBrand->children()->create(['name' => 'Europa S', 'name_ru' => 'Europa S', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Europa S')]);
            $carBrand->children()->create(['name' => 'Evora', 'name_ru' => 'Evora', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Evora')]);
            $carBrand->children()->create(['name' => 'Excel', 'name_ru' => 'Excel', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Excel')]);
            $carBrand->children()->create(['name' => 'Exige', 'name_ru' => 'Exige', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Exige')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'LTI', 'name_ru' => 'LTI', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LTI')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Lucid', 'name_ru' => 'Люцид', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lucid')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Luxgen', 'name_ru' => 'Luxgen', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Luxgen')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Mahindra', 'name_ru' => 'Mahindra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mahindra')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Marcos', 'name_ru' => 'Marcos', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Marcos')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'GTS', 'name_ru' => 'GTS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GTS')]);
            $carBrand->children()->create(['name' => 'LM 400', 'name_ru' => 'LM 400', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LM 400')]);
            $carBrand->children()->create(['name' => 'LM 500', 'name_ru' => 'LM 500', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LM 500')]);
            $carBrand->children()->create(['name' => 'Mantis', 'name_ru' => 'Mantis', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mantis')]);
            $carBrand->children()->create(['name' => 'Marcasite', 'name_ru' => 'Marcasite', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Marcasite')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Marlin', 'name_ru' => 'Marlin', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Marlin')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Marussia', 'name_ru' => 'Маруся', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Marussia')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Maruti', 'name_ru' => 'Maruti', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Maruti')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Maserati', 'name_ru' => 'Мазерати', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Maserati')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '228', 'name_ru' => '228', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('228')]);
            $carBrand->children()->create(['name' => '3200 GT', 'name_ru' => '3200 GT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3200 GT')]);
            $carBrand->children()->create(['name' => '420', 'name_ru' => '420', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('420')]);
            $carBrand->children()->create(['name' => '4200 GT', 'name_ru' => '4200 GT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4200 GT')]);
            $carBrand->children()->create(['name' => 'Barchetta Stradale', 'name_ru' => 'Barchetta Stradale', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Barchetta Stradale')]);
            $carBrand->children()->create(['name' => 'Biturbo', 'name_ru' => 'Biturbo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Biturbo')]);
            $carBrand->children()->create(['name' => 'Bora', 'name_ru' => 'Bora', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bora')]);
            $carBrand->children()->create(['name' => 'Chubasco', 'name_ru' => 'Chubasco', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Chubasco')]);
            $carBrand->children()->create(['name' => 'Ghibli', 'name_ru' => 'Ghibli', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ghibli')]);
            $carBrand->children()->create(['name' => 'GranTurismo', 'name_ru' => 'GranTurismo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GranTurismo')]);
            $carBrand->children()->create(['name' => 'Indy', 'name_ru' => 'Indy', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Indy')]);
            $carBrand->children()->create(['name' => 'Karif', 'name_ru' => 'Karif', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Karif')]);
            $carBrand->children()->create(['name' => 'Khamsin', 'name_ru' => 'Khamsin', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Khamsin')]);
            $carBrand->children()->create(['name' => 'Kyalami', 'name_ru' => 'Kyalami', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kyalami')]);
            $carBrand->children()->create(['name' => 'Levante', 'name_ru' => 'Levante', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Levante')]);
            $carBrand->children()->create(['name' => 'MC12', 'name_ru' => 'MC12', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MC12')]);
            $carBrand->children()->create(['name' => 'Merak', 'name_ru' => 'Merak', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Merak')]);
            $carBrand->children()->create(['name' => 'Mexico', 'name_ru' => 'Mexico', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mexico')]);
            $carBrand->children()->create(['name' => 'Quattroporte', 'name_ru' => 'Quattroporte', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Quattroporte')]);
            $carBrand->children()->create(['name' => 'Royale', 'name_ru' => 'Royale', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Royale')]);
            $carBrand->children()->create(['name' => 'Shamal', 'name_ru' => 'Shamal', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Shamal')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Maybach', 'name_ru' => 'Майбах', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Maybach')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '57', 'name_ru' => '57', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('57')]);
            $carBrand->children()->create(['name' => '62', 'name_ru' => '62', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('62')]);
            $carBrand->children()->create(['name' => 'Exelero', 'name_ru' => 'Exelero', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Exelero')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Mazda', 'name_ru' => 'Мазда', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mazda')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '121', 'name_ru' => '121', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('121')]);
            $carBrand->children()->create(['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')]);
            $carBrand->children()->create(['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],])
            ;
            $carBrand->children()->create(['name' => '3 MPS', 'name_ru' => '3 MPS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 MPS')]);
            $carBrand->children()->create(['name' => '323', 'name_ru' => '323', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('323')]);
            $carBrand->children()->create(['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')]);
            $carBrand->children()->create(['name' => '6', 'name_ru' => '6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('6')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],['name' => '3 (Рестайлинг 2)', 'name_ru' => '3 (Рестайлинг 2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг 2)')],])
            ;
            $carBrand->children()->create(['name' => '626', 'name_ru' => '626', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('626')]);
            $carBrand->children()->create(['name' => '929', 'name_ru' => '929', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('929')]);
            $carBrand->children()->create(['name' => 'Atenza', 'name_ru' => 'Atenza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Atenza')]);
            $carBrand->children()->create(['name' => 'BT-50', 'name_ru' => 'BT-50', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('BT-50')]);
            $carBrand->children()->create(['name' => 'Biante', 'name_ru' => 'Biante', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Biante')]);
            $carBrand->children()->create(['name' => 'Bongo', 'name_ru' => 'Bongo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bongo')]);
            $carBrand->children()->create(['name' => 'Bongo Friendee', 'name_ru' => 'Bongo Friendee', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bongo Friendee')]);
            $carBrand->children()->create(['name' => 'CX-5', 'name_ru' => 'CX-5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CX-5')]);
            $carBrand->children()->create(['name' => 'CX-7', 'name_ru' => 'CX-7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CX-7')]);
            $carBrand->children()->create(['name' => 'CX-9', 'name_ru' => 'CX-9', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CX-9')]);
            $carBrand->children()->create(['name' => 'Capella', 'name_ru' => 'Capella', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Capella')]);
            $carBrand->children()->create(['name' => 'Cronos', 'name_ru' => 'Cronos', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cronos')]);
            $carBrand->children()->create(['name' => 'Demio', 'name_ru' => 'Demio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Demio')]);
            $carBrand->children()->create(['name' => 'Familia', 'name_ru' => 'Familia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Familia')]);
            $carBrand->children()->create(['name' => 'MPV', 'name_ru' => 'MPV', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MPV')]);
            $carBrand->children()->create(['name' => 'Millenia', 'name_ru' => 'Millenia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Millenia')]);
            $carBrand->children()->create(['name' => 'Premacy', 'name_ru' => 'Premacy', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Premacy')]);
            $carBrand->children()->create(['name' => 'Proceed Marvie', 'name_ru' => 'Proceed Marvie', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Proceed Marvie')]);
            $carBrand->children()->create(['name' => 'Protege', 'name_ru' => 'Protege', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Protege')]);
            $carBrand->children()->create(['name' => 'RX-8', 'name_ru' => 'RX-8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RX-8')]);
            $carBrand->children()->create(['name' => 'Tribute', 'name_ru' => 'Tribute', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tribute')]);
            $carBrand->children()->create(['name' => 'Xedos 6', 'name_ru' => 'Xedos 6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Xedos 6')]);
            $carBrand->children()->create(['name' => 'Xedos 9', 'name_ru' => 'Xedos 9', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Xedos 9')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'McLaren', 'name_ru' => 'Макларен', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('McLaren')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '540C', 'name_ru' => '540C', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('540C')]);
            $carBrand->children()->create(['name' => '570GT', 'name_ru' => '570GT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('570GT')]);
            $carBrand->children()->create(['name' => '570S', 'name_ru' => '570S', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('570S')]);
            $carBrand->children()->create(['name' => '600LT', 'name_ru' => '600LT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('600LT')]);
            $carBrand->children()->create(['name' => '650S', 'name_ru' => '650S', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('650S')]);
            $carBrand->children()->create(['name' => '675LT', 'name_ru' => '675LT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('675LT')]);
            $carBrand->children()->create(['name' => '720S', 'name_ru' => '720S', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('720S')]);
            $carBrand->children()->create(['name' => 'F1', 'name_ru' => 'F1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F1')]);
            $carBrand->children()->create(['name' => 'GT', 'name_ru' => 'GT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GT')]);
            $carBrand->children()->create(['name' => 'MP4-12C', 'name_ru' => 'MP4-12C', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MP4-12C')]);
            $carBrand->children()->create(['name' => 'P1', 'name_ru' => 'P1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('P1')]);
            $carBrand->children()->create(['name' => 'Senna', 'name_ru' => 'Senna', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Senna')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Mega', 'name_ru' => 'Мега', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mega')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Mercedes-Benz', 'name_ru' => 'Мерседес Бенц', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mercedes-Benz')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '190 (W201)', 'name_ru' => '190 (W201)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('190 (W201)')]);
            $carBrand->children()->create(['name' => 'A-klasse', 'name_ru' => 'A-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A-klasse')])->children()->createMany([['name' => 'W168/V168', 'name_ru' => 'W168/V168', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W168/V168')],['name' => 'W169', 'name_ru' => 'W169', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W169')],['name' => 'W169 [рестайлинг]', 'name_ru' => 'W169 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W169 [рестайлинг]')],['name' => 'W176', 'name_ru' => 'W176', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W176')],['name' => 'W168/V168', 'name_ru' => 'W168/V168', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W168/V168')],['name' => 'W176 [рестайлинг]', 'name_ru' => 'W176 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W176 [рестайлинг]')],['name' => 'W177/V177', 'name_ru' => 'W177/V177', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W177/V177')],])
            ;
            $carBrand->children()->create(['name' => 'B-klasse', 'name_ru' => 'B-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B-klasse')]);
            $carBrand->children()->create(['name' => 'C-klasse', 'name_ru' => 'C-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C-klasse')])
                ->children()->createMany([['name' => 'W201', 'name_ru' => 'W201', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W201')],['name' => 'W201 [рестайлинг]', 'name_ru' => 'W201 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W201 [рестайлинг]')],['name' => 'W202/S202', 'name_ru' => 'W202/S202', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W202/S202')],['name' => 'W202/S202 [рестайлинг]', 'name_ru' => 'W202/S202 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W202/S202 [рестайлинг]')],['name' => 'W201', 'name_ru' => 'W201', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W201')],['name' => 'W203/S203/CL203', 'name_ru' => 'W203/S203/CL203', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W203/S203/CL203')],['name' => 'W203/S203/CL203 [рестайлинг]', 'name_ru' => 'W203/S203/CL203 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W203/S203/CL203 [рестайлинг]')],['name' => 'W204/S204', 'name_ru' => 'W204/S204', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W204/S204')],['name' => 'W204/S204/C204 [рестайлинг]', 'name_ru' => 'W204/S204/C204 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W204/S204/C204 [рестайлинг]')],['name' => 'W205/S205/C205', 'name_ru' => 'W205/S205/C205', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W205/S205/C205')],['name' => 'W205/S205/C205 [рестайлинг]', 'name_ru' => 'W205/S205/C205 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W205/S205/C205 [рестайлинг]')],]);

            $carBrand->children()->create(['name' => 'C-klasse AMG', 'name_ru' => 'C-klasse AMG', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C-klasse AMG')]);
            $carBrand->children()->create(['name' => 'CL-klasse', 'name_ru' => 'CL-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CL-klasse')]);
            $carBrand->children()->create(['name' => 'CL-klasse AMG', 'name_ru' => 'CL-klasse AMG', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CL-klasse AMG')]);
            $carBrand->children()->create(['name' => 'CLA-klasse', 'name_ru' => 'CLA-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CLA-klasse')]);
            $carBrand->children()->create(['name' => 'CLK-klasse', 'name_ru' => 'CLK-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CLK-klasse')]);
            $carBrand->children()->create(['name' => 'CLS-klasse', 'name_ru' => 'CLS-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('CLS-klasse')]);
            $carBrand->children()->create(['name' => 'E-klasse', 'name_ru' => 'E-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E-klasse')])
                ->children()->createMany([['name' => 'W123', 'name_ru' => 'W123', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W123')],['name' => 'W124', 'name_ru' => 'W124', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W124')],['name' => 'W124 [рестайлинг]', 'name_ru' => 'W124 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W124 [рестайлинг]')],['name' => 'W124 [2-й рестайлинг]', 'name_ru' => 'W124 [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W124 [2-й рестайлинг]')],['name' => 'W123', 'name_ru' => 'W123', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W123')],['name' => 'W210/S210', 'name_ru' => 'W210/S210', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W210/S210')],['name' => 'W210/S210 [рестайлинг]', 'name_ru' => 'W210/S210 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W210/S210 [рестайлинг]')],['name' => 'W211/S211', 'name_ru' => 'W211/S211', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W211/S211')],['name' => 'W211/S211 [рестайлинг]', 'name_ru' => 'W211/S211 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W211/S211 [рестайлинг]')],['name' => 'W212/S212/C207/A207', 'name_ru' => 'W212/S212/C207/A207', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W212/S212/C207/A207')],['name' => 'W212/S212/C207/A207 [рестайлинг]', 'name_ru' => 'W212/S212/C207/A207 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W212/S212/C207/A207 [рестайлинг]')],['name' => 'W213/S213/C238/A238', 'name_ru' => 'W213/S213/C238/A238', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W213/S213/C238/A238')],]);

            $carBrand->children()->create(['name' => 'G-klasse', 'name_ru' => 'G-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G-klasse')]);
            $carBrand->children()->create(['name' => 'G-klasse AMG', 'name_ru' => 'G-klasse AMG', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G-klasse AMG')]);
            $carBrand->children()->create(['name' => 'GL-klasse', 'name_ru' => 'GL-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GL-klasse')]);
            $carBrand->children()->create(['name' => 'GLA-klasse', 'name_ru' => 'GLA-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GLA-klasse')]);
            $carBrand->children()->create(['name' => 'GLC', 'name_ru' => 'GLC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GLC')]);
            $carBrand->children()->create(['name' => 'GLC Coupe', 'name_ru' => 'GLC Coupe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GLC Coupe')]);
            $carBrand->children()->create(['name' => 'GLE', 'name_ru' => 'GLE', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GLE')]);
            $carBrand->children()->create(['name' => 'GLE Coupe', 'name_ru' => 'GLE Coupe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GLE Coupe')]);
            $carBrand->children()->create(['name' => 'GLK-klasse', 'name_ru' => 'GLK-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GLK-klasse')]);
            $carBrand->children()->create(['name' => 'GLS-klasse', 'name_ru' => 'GLS-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GLS-klasse')]);
            $carBrand->children()->create(['name' => 'M-klasse', 'name_ru' => 'M-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('M-klasse')]);
            $carBrand->children()->create(['name' => 'R-klasse', 'name_ru' => 'R-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('R-klasse')]);
            $carBrand->children()->create(['name' => 'S-klasse', 'name_ru' => 'S-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S-klasse')])->children()->createMany([['name' => 'W116', 'name_ru' => 'W116', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W116')],['name' => 'W126 / C126', 'name_ru' => 'W126 / C126', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W126 / C126')],['name' => 'W126 / C126 [рестайлинг]', 'name_ru' => 'W126 / C126 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W126 / C126 [рестайлинг]')],['name' => 'W140/C140', 'name_ru' => 'W140/C140', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W140/C140')],['name' => 'W116', 'name_ru' => 'W116', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W116')],['name' => 'W140/C140 [рестайлинг]', 'name_ru' => 'W140/C140 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W140/C140 [рестайлинг]')],['name' => 'W140 [2-й рестайлинг]', 'name_ru' => 'W140 [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W140 [2-й рестайлинг]')],['name' => 'W220', 'name_ru' => 'W220', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W220')],['name' => 'W220 [рестайлинг]', 'name_ru' => 'W220 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W220 [рестайлинг]')],['name' => 'W221', 'name_ru' => 'W221', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W221')],['name' => 'W221 [рестайлинг]', 'name_ru' => 'W221 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W221 [рестайлинг]')],['name' => 'W222/C217/A217', 'name_ru' => 'W222/C217/A217', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W222/C217/A217')],['name' => 'W222/C217/A217 [рестайлинг]', 'name_ru' => 'W222/C217/A217 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W222/C217/A217 [рестайлинг]')],]);

            $carBrand->children()->create(['name' => 'S-klasse AMG', 'name_ru' => 'S-klasse AMG', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S-klasse AMG')]);
            $carBrand->children()->create(['name' => 'SLK-klasse', 'name_ru' => 'SLK-klasse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SLK-klasse')]);
            $carBrand->children()->create(['name' => 'Viano', 'name_ru' => 'Viano', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Viano')]);
            $carBrand->children()->create(['name' => 'Vito', 'name_ru' => 'Vito', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vito')]);
            $carBrand->children()->create(['name' => 'W123', 'name_ru' => 'W123', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W123')]);
            $carBrand->children()->create(['name' => 'W124', 'name_ru' => 'W124', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W124')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Mercury', 'name_ru' => 'Меркурий', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mercury')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Capri', 'name_ru' => 'Capri', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Capri')]);
            $carBrand->children()->create(['name' => 'Cougar', 'name_ru' => 'Cougar', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cougar')]);
            $carBrand->children()->create(['name' => 'Eight', 'name_ru' => 'Eight', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Eight')]);
            $carBrand->children()->create(['name' => 'Grand Marquis', 'name_ru' => 'Grand Marquis', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Grand Marquis')]);
            $carBrand->children()->create(['name' => 'Marauder', 'name_ru' => 'Marauder', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Marauder')]);
            $carBrand->children()->create(['name' => 'Mariner', 'name_ru' => 'Mariner', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mariner')]);
            $carBrand->children()->create(['name' => 'Marquis', 'name_ru' => 'Marquis', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Marquis')]);
            $carBrand->children()->create(['name' => 'Milan', 'name_ru' => 'Milan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Milan')]);
            $carBrand->children()->create(['name' => 'Montego', 'name_ru' => 'Montego', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Montego')]);
            $carBrand->children()->create(['name' => 'Monterey', 'name_ru' => 'Monterey', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Monterey')]);
            $carBrand->children()->create(['name' => 'Mountaineer', 'name_ru' => 'Mountaineer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mountaineer')]);
            $carBrand->children()->create(['name' => 'Mystique', 'name_ru' => 'Mystique', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mystique')]);
            $carBrand->children()->create(['name' => 'Sable', 'name_ru' => 'Sable', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sable')]);
            $carBrand->children()->create(['name' => 'Topaz', 'name_ru' => 'Topaz', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Topaz')]);
            $carBrand->children()->create(['name' => 'Tracer', 'name_ru' => 'Tracer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tracer')]);
            $carBrand->children()->create(['name' => 'Villager', 'name_ru' => 'Villager', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Villager')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Metrocab', 'name_ru' => 'Metrocab', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Metrocab')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'MG', 'name_ru' => 'MG', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MG')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Microcar', 'name_ru' => 'Microcar', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Microcar')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Minelli', 'name_ru' => 'Минелли', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Minelli')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'MINI', 'name_ru' => 'МИНИ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('MINI')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Cabrio', 'name_ru' => 'Cabrio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cabrio')]);
            $carBrand->children()->create(['name' => 'Clubman', 'name_ru' => 'Clubman', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Clubman')]);
            $carBrand->children()->create(['name' => 'Countryman', 'name_ru' => 'Countryman', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Countryman')]);
            $carBrand->children()->create(['name' => 'Coupe', 'name_ru' => 'Coupe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Coupe')]);
            $carBrand->children()->create(['name' => 'Hatch', 'name_ru' => 'Hatch', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hatch')]);
            $carBrand->children()->create(['name' => 'Paceman', 'name_ru' => 'Paceman', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Paceman')]);
            $carBrand->children()->create(['name' => 'Roadster', 'name_ru' => 'Roadster', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Roadster')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Mitsubishi', 'name_ru' => 'Митсубиси', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mitsubishi')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'ASX', 'name_ru' => 'ASX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ASX')]);
            $carBrand->children()->create(['name' => 'Airtrek', 'name_ru' => 'Airtrek', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Airtrek')]);
            $carBrand->children()->create(['name' => 'Carisma', 'name_ru' => 'Carisma', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Carisma')]);
            $carBrand->children()->create(['name' => 'Chariot', 'name_ru' => 'Chariot', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Chariot')]);
            $carBrand->children()->create(['name' => 'Colt', 'name_ru' => 'Colt', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Colt')]);
            $carBrand->children()->create(['name' => 'Delica', 'name_ru' => 'Delica', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Delica')]);
            $carBrand->children()->create(['name' => 'Delica D:5', 'name_ru' => 'Delica D:5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Delica D:5')]);
            $carBrand->children()->create(['name' => 'Diamante', 'name_ru' => 'Diamante', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Diamante')]);
            $carBrand->children()->create(['name' => 'Dingo', 'name_ru' => 'Dingo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dingo')]);
            $carBrand->children()->create(['name' => 'Dion', 'name_ru' => 'Dion', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dion')]);
            $carBrand->children()->create(['name' => 'Eclipse', 'name_ru' => 'Eclipse', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Eclipse')]);
            $carBrand->children()->create(['name' => 'Eclipse Cross', 'name_ru' => 'Eclipse Cross', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Eclipse Cross')]);
            $carBrand->children()->create(['name' => 'Galant', 'name_ru' => 'Galant', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Galant')])
                ->children()->createMany([
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],
                    ['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],
                    ['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')],
                    ['name' => '6', 'name_ru' => '6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('6')],
                    ['name' => '7', 'name_ru' => '7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('7')],
                    ['name' => '8', 'name_ru' => '8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8')],
                    ['name' => '8 поколение [рестайлинг]', 'name_ru' => '8 поколение [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8 поколение [рестайлинг]')],
                    ['name' => '9', 'name_ru' => '9', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('9')],
                    ['name' => '9 поколение [рестайлинг]', 'name_ru' => '9 поколение [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('9 поколение [рестайлинг]')],
                    ['name' => '9 поколение [2-й рестайлинг]', 'name_ru' => '9 поколение [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('9 поколение [2-й рестайлинг]')]

                ]);
            $carBrand->children()->create(['name' => 'Grandis', 'name_ru' => 'Grandis', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Grandis')]);
            $carBrand->children()->create(['name' => 'L200', 'name_ru' => 'L200', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('L200')]);
            $carBrand->children()->create(['name' => 'Lancer', 'name_ru' => 'Lancer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lancer')])
                ->children()->createMany([['name' => 'A70', 'name_ru' => 'A70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A70')],['name' => 'A70 [рестайлинг]', 'name_ru' => 'A70 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A70 [рестайлинг]')],['name' => 'A70 [2-й рестайлинг]', 'name_ru' => 'A70 [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A70 [2-й рестайлинг]')],['name' => 'EX', 'name_ru' => 'EX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('EX')],['name' => 'A70', 'name_ru' => 'A70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A70')],['name' => 'EX [рестайлинг]', 'name_ru' => 'EX [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('EX [рестайлинг]')],['name' => 'VI', 'name_ru' => 'VI', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VI')],['name' => 'VI [рестайлинг]', 'name_ru' => 'VI [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VI [рестайлинг]')],['name' => 'VI [2-й рестайлинг]', 'name_ru' => 'VI [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VI [2-й рестайлинг]')],['name' => 'VII', 'name_ru' => 'VII', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VII')],['name' => 'VIII', 'name_ru' => 'VIII', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VIII')],['name' => 'VIII [рестайлинг]', 'name_ru' => 'VIII [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VIII [рестайлинг]')],['name' => 'IX', 'name_ru' => 'IX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('IX')],['name' => 'IX [рестайлинг]', 'name_ru' => 'IX [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('IX [рестайлинг]')],['name' => 'Y12', 'name_ru' => 'Y12', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Y12')],['name' => 'X', 'name_ru' => 'X', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X')],['name' => 'X [рестайлинг]', 'name_ru' => 'X [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X [рестайлинг]')],['name' => 'X [2-й рестайлинг]', 'name_ru' => 'X [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X [2-й рестайлинг]')],]);
            $carBrand->children()->create(['name' => 'Legnum', 'name_ru' => 'Legnum', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Legnum')]);
            $carBrand->children()->create(['name' => 'Mirage', 'name_ru' => 'Mirage', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mirage')]);
            $carBrand->children()->create(['name' => 'Montero', 'name_ru' => 'Montero', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Montero')]);
            $carBrand->children()->create(['name' => 'Montero Sport', 'name_ru' => 'Montero Sport', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Montero Sport')]);
            $carBrand->children()->create(['name' => 'Outlander', 'name_ru' => 'Outlander', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Outlander')]);
            $carBrand->children()->create(['name' => 'Pajero', 'name_ru' => 'Pajero', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pajero')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],['name' => '4 (Рестайлинг)', 'name_ru' => '4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг)')],['name' => '4 (Рестайлинг 2)', 'name_ru' => '4 (Рестайлинг 2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг 2)')],])
            ;
            $carBrand->children()->create(['name' => 'Pajero Mini', 'name_ru' => 'Pajero Mini', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pajero Mini')]);
            $carBrand->children()->create(['name' => 'Pajero Pinin', 'name_ru' => 'Pajero Pinin', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pajero Pinin')]);
            $carBrand->children()->create(['name' => 'Pajero Sport', 'name_ru' => 'Pajero Sport', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pajero Sport')]);
            $carBrand->children()->create(['name' => 'Pajero iO', 'name_ru' => 'Pajero iO', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pajero iO')]);
            $carBrand->children()->create(['name' => 'RVR', 'name_ru' => 'RVR', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RVR')]);
            $carBrand->children()->create(['name' => 'Space Star', 'name_ru' => 'Space Star', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Space Star')]);
            $carBrand->children()->create(['name' => 'Space Wagon', 'name_ru' => 'Space Wagon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Space Wagon')]);
            $carBrand->children()->create(['name' => 'i', 'name_ru' => 'i', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('i')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Mitsuoka', 'name_ru' => 'Mitsuoka', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mitsuoka')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Morgan', 'name_ru' => 'Морган', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Morgan')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Morris', 'name_ru' => 'Моррис', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Morris')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Nash', 'name_ru' => 'Nash', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Nash')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Nissan', 'name_ru' => 'Нисан', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Nissan')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Almera', 'name_ru' => 'Almera', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Almera')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Almera Classic', 'name_ru' => 'Almera Classic', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Almera Classic')]);
            $carBrand->children()->create(['name' => 'Avenir', 'name_ru' => 'Avenir', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Avenir')]);
            $carBrand->children()->create(['name' => 'Bluebird', 'name_ru' => 'Bluebird', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bluebird')]);
            $carBrand->children()->create(['name' => 'Cefiro', 'name_ru' => 'Cefiro', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cefiro')]);
            $carBrand->children()->create(['name' => 'Cube', 'name_ru' => 'Cube', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cube')]);
            $carBrand->children()->create(['name' => 'Gloria', 'name_ru' => 'Gloria', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Gloria')]);
            $carBrand->children()->create(['name' => 'Juke', 'name_ru' => 'Juke', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Juke')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Laurel', 'name_ru' => 'Laurel', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Laurel')]);
            $carBrand->children()->create(['name' => 'Leaf', 'name_ru' => 'Leaf', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Leaf')]);
            $carBrand->children()->create(['name' => 'Liberty', 'name_ru' => 'Liberty', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Liberty')]);
            $carBrand->children()->create(['name' => 'March', 'name_ru' => 'March', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('March')]);
            $carBrand->children()->create(['name' => 'Maxima', 'name_ru' => 'Maxima', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Maxima')]);
            $carBrand->children()->create(['name' => 'Micra', 'name_ru' => 'Micra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Micra')]);
            $carBrand->children()->create(['name' => 'Murano', 'name_ru' => 'Murano', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Murano')]);
            $carBrand->children()->create(['name' => 'Note', 'name_ru' => 'Note', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Note')]);
            $carBrand->children()->create(['name' => 'Pathfinder', 'name_ru' => 'Pathfinder', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pathfinder')]);
            $carBrand->children()->create(['name' => 'Patrol', 'name_ru' => 'Patrol', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Patrol')]);
            $carBrand->children()->create(['name' => 'Primera', 'name_ru' => 'Primera', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Primera')]);
            $carBrand->children()->create(['name' => 'Qashqai', 'name_ru' => 'Qashqai', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Qashqai')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Qashqai+2', 'name_ru' => 'Qashqai+2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Qashqai+2')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Sentra', 'name_ru' => 'Sentra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sentra')]);
            $carBrand->children()->create(['name' => 'Serena', 'name_ru' => 'Serena', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Serena')]);
            $carBrand->children()->create(['name' => 'Skyline', 'name_ru' => 'Skyline', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Skyline')]);
            $carBrand->children()->create(['name' => 'Sunny', 'name_ru' => 'Sunny', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sunny')]);
            $carBrand->children()->create(['name' => 'Teana', 'name_ru' => 'Teana', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Teana')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],])
            ;
            $carBrand->children()->create(['name' => 'Terrano', 'name_ru' => 'Terrano', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Terrano')]);
            $carBrand->children()->create(['name' => 'Tiida', 'name_ru' => 'Tiida', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tiida')]);
            $carBrand->children()->create(['name' => 'Wingroad', 'name_ru' => 'Wingroad', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Wingroad')]);
            $carBrand->children()->create(['name' => 'X-Trail', 'name_ru' => 'X-Trail', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('X-Trail')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],])
            ;

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Noble', 'name_ru' => 'Нобле', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Noble')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Oldsmobile', 'name_ru' => 'Oldsmobile', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Oldsmobile')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Opel', 'name_ru' => 'Опел', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Opel')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Adam', 'name_ru' => 'Adam', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Adam')]);
            $carBrand->children()->create(['name' => 'Admiral', 'name_ru' => 'Admiral', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Admiral')]);
            $carBrand->children()->create(['name' => 'Agila', 'name_ru' => 'Agila', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Agila')]);
            $carBrand->children()->create(['name' => 'Ampera', 'name_ru' => 'Ampera', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ampera')]);
            $carBrand->children()->create(['name' => 'Antara', 'name_ru' => 'Antara', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Antara')]);
            $carBrand->children()->create(['name' => 'Ascona', 'name_ru' => 'Ascona', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ascona')])->children()->createMany([['name' => 'A', 'name_ru' => 'A', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A')],['name' => 'B', 'name_ru' => 'B', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B')],['name' => 'C', 'name_ru' => 'C', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C')],['name' => 'A', 'name_ru' => 'A', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A')],])
            ;
            $carBrand->children()->create(['name' => 'Astra', 'name_ru' => 'Astra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Astra')])->children()->createMany([['name' => 'F', 'name_ru' => 'F', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F')],['name' => 'F [рестайлинг]', 'name_ru' => 'F [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F [рестайлинг]')],['name' => 'G', 'name_ru' => 'G', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G')],['name' => 'H', 'name_ru' => 'H', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('H')],['name' => 'F', 'name_ru' => 'F', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('F')],['name' => 'Family/H [рестайлинг]', 'name_ru' => 'Family/H [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Family/H [рестайлинг]')],['name' => 'J', 'name_ru' => 'J', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J')],['name' => 'J [рестайлинг]', 'name_ru' => 'J [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J [рестайлинг]')],['name' => 'K', 'name_ru' => 'K', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('K')],])
            ;
            $carBrand->children()->create(['name' => 'Astra OPC', 'name_ru' => 'Astra OPC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Astra OPC')]);
            $carBrand->children()->create(['name' => 'Calibra', 'name_ru' => 'Calibra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Calibra')]);
            $carBrand->children()->create(['name' => 'Campo', 'name_ru' => 'Campo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Campo')]);
            $carBrand->children()->create(['name' => 'Cascada', 'name_ru' => 'Cascada', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cascada')]);
            $carBrand->children()->create(['name' => 'Combo', 'name_ru' => 'Combo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Combo')]);
            $carBrand->children()->create(['name' => 'Commodore', 'name_ru' => 'Commodore', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Commodore')]);
            $carBrand->children()->create(['name' => 'Corsa', 'name_ru' => 'Corsa', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Corsa')])
                ->children()->createMany([
                    ['name' => '', 'name_ru' => '', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('')],
                    ['name' => '', 'name_ru' => '', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('')],
                    ['name' => '', 'name_ru' => '', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('')],
                    ['name' => 'A', 'name_ru' => 'A', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A')],
                    ['name' => '', 'name_ru' => '', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('')],
                    ['name' => 'A [рестайлинг]', 'name_ru' => 'A [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A [рестайлинг]')],
                    ['name' => 'A [2-й рестайлинг]', 'name_ru' => 'A [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A [2-й рестайлинг]')],
                    ['name' => 'B', 'name_ru' => 'B', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B')],
                    ['name' => 'B [рестайлинг]', 'name_ru' => 'B [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B [рестайлинг]')],
                    ['name' => 'C', 'name_ru' => 'C', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C')],
                    ['name' => 'C [рестайлинг]', 'name_ru' => 'C [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C [рестайлинг]')],
                    ['name' => 'D', 'name_ru' => 'D', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D')],
                    ['name' => 'D [рестайлинг]', 'name_ru' => 'D [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D [рестайлинг]')],
                    ['name' => 'E', 'name_ru' => 'E', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E')]

                ]);
            $carBrand->children()->create(['name' => 'Corsa OPC', 'name_ru' => 'Corsa OPC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Corsa OPC')]);
            $carBrand->children()->create(['name' => 'Frontera', 'name_ru' => 'Frontera', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Frontera')]);
            $carBrand->children()->create(['name' => 'Insignia', 'name_ru' => 'Insignia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Insignia')])->children()->createMany([['name' => 'A', 'name_ru' => 'A', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A')],['name' => 'A [рестайлинг]', 'name_ru' => 'A [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A [рестайлинг]')],['name' => 'B', 'name_ru' => 'B', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B')],['name' => 'A', 'name_ru' => 'A', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A')],])
            ;
            $carBrand->children()->create(['name' => 'Kadett', 'name_ru' => 'Kadett', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kadett')])->children()->createMany([['name' => 'A', 'name_ru' => 'A', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A')],['name' => 'B', 'name_ru' => 'B', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B')],['name' => 'C', 'name_ru' => 'C', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C')],['name' => 'C [рестайлинг]', 'name_ru' => 'C [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C [рестайлинг]')],['name' => 'A', 'name_ru' => 'A', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A')],['name' => 'D', 'name_ru' => 'D', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('D')],['name' => 'E', 'name_ru' => 'E', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E')],['name' => 'E [рестайлинг]', 'name_ru' => 'E [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E [рестайлинг]')],])
            ;
            $carBrand->children()->create(['name' => 'Meriva', 'name_ru' => 'Meriva', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Meriva')]);
            $carBrand->children()->create(['name' => 'Mokka', 'name_ru' => 'Mokka', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mokka')]);
            $carBrand->children()->create(['name' => 'Monterey', 'name_ru' => 'Monterey', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Monterey')]);
            $carBrand->children()->create(['name' => 'Olympia', 'name_ru' => 'Olympia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Olympia')]);
            $carBrand->children()->create(['name' => 'Omega', 'name_ru' => 'Omega', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Omega')]);
            $carBrand->children()->create(['name' => 'Rekord', 'name_ru' => 'Rekord', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rekord')]);
            $carBrand->children()->create(['name' => 'Signum', 'name_ru' => 'Signum', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Signum')]);
            $carBrand->children()->create(['name' => 'Sintra', 'name_ru' => 'Sintra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sintra')]);
            $carBrand->children()->create(['name' => 'Tigra', 'name_ru' => 'Tigra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tigra')]);
            $carBrand->children()->create(['name' => 'Vectra', 'name_ru' => 'Vectra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vectra')])->children()->createMany([['name' => 'A', 'name_ru' => 'A', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A')],['name' => 'B', 'name_ru' => 'B', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B')],['name' => 'B [рестайлинг]', 'name_ru' => 'B [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B [рестайлинг]')],['name' => 'C', 'name_ru' => 'C', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C')],['name' => 'A', 'name_ru' => 'A', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A')],['name' => 'C [рестайлинг]', 'name_ru' => 'C [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C [рестайлинг]')],])
            ;
            $carBrand->children()->create(['name' => 'Vivaro', 'name_ru' => 'Vivaro', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vivaro')]);
            $carBrand->children()->create(['name' => 'Zafira', 'name_ru' => 'Zafira', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Zafira')])->children()->createMany([['name' => 'A', 'name_ru' => 'A', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A')],['name' => 'A [рестайлинг]', 'name_ru' => 'A [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A [рестайлинг]')],['name' => 'B', 'name_ru' => 'B', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B')],['name' => 'Family [рестайлинг]', 'name_ru' => 'Family [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Family [рестайлинг]')],['name' => 'A', 'name_ru' => 'A', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('A')],['name' => 'C', 'name_ru' => 'C', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C')],['name' => 'C [рестайлинг]', 'name_ru' => 'C [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C [рестайлинг]')],])
            ;

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Osca', 'name_ru' => 'Osca', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Osca')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Packard', 'name_ru' => 'Packard', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Packard')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Pagani', 'name_ru' => 'Пагани', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pagani')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Panoz', 'name_ru' => 'Panoz', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Panoz')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Perodua', 'name_ru' => 'Perodua', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Perodua')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Peugeot', 'name_ru' => 'Пежот', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Peugeot')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '1007', 'name_ru' => '1007', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1007')]);
            $carBrand->children()->create(['name' => '104', 'name_ru' => '104', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('104')]);
            $carBrand->children()->create(['name' => '106', 'name_ru' => '106', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('106')]);
            $carBrand->children()->create(['name' => '107', 'name_ru' => '107', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('107')]);
            $carBrand->children()->create(['name' => '108', 'name_ru' => '108', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('108')]);
            $carBrand->children()->create(['name' => '2008', 'name_ru' => '2008', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2008')]);
            $carBrand->children()->create(['name' => '201', 'name_ru' => '201', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('201')]);
            $carBrand->children()->create(['name' => '202', 'name_ru' => '202', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('202')]);
            $carBrand->children()->create(['name' => '203', 'name_ru' => '203', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('203')]);
            $carBrand->children()->create(['name' => '204', 'name_ru' => '204', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('204')]);
            $carBrand->children()->create(['name' => '206', 'name_ru' => '206', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('206')]);
            $carBrand->children()->create(['name' => '207', 'name_ru' => '207', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('207')]);
            $carBrand->children()->create(['name' => '208', 'name_ru' => '208', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('208')]);
            $carBrand->children()->create(['name' => '3008', 'name_ru' => '3008', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3008')]);
            $carBrand->children()->create(['name' => '301', 'name_ru' => '301', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('301')]);
            $carBrand->children()->create(['name' => '306', 'name_ru' => '306', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('306')]);
            $carBrand->children()->create(['name' => '307', 'name_ru' => '307', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('307')]);
            $carBrand->children()->create(['name' => '308', 'name_ru' => '308', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('308')]);
            $carBrand->children()->create(['name' => '4007', 'name_ru' => '4007', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4007')]);
            $carBrand->children()->create(['name' => '405', 'name_ru' => '405', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('405')]);
            $carBrand->children()->create(['name' => '406', 'name_ru' => '406', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('406')]);
            $carBrand->children()->create(['name' => '407', 'name_ru' => '407', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('407')]);
            $carBrand->children()->create(['name' => '408', 'name_ru' => '408', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('408')]);
            $carBrand->children()->create(['name' => '5008', 'name_ru' => '5008', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5008')]);
            $carBrand->children()->create(['name' => '508', 'name_ru' => '508', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('508')]);
            $carBrand->children()->create(['name' => '607', 'name_ru' => '607', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('607')]);
            $carBrand->children()->create(['name' => '807', 'name_ru' => '807', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('807')]);
            $carBrand->children()->create(['name' => 'Expert', 'name_ru' => 'Expert', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Expert')]);
            $carBrand->children()->create(['name' => 'Partner', 'name_ru' => 'Partner', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Partner')]);
            $carBrand->children()->create(['name' => 'Traveller', 'name_ru' => 'Traveller', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Traveller')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'PGO', 'name_ru' => 'PGO', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('PGO')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Piaggio', 'name_ru' => 'Piaggio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Piaggio')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Plymouth', 'name_ru' => 'Плимут', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Plymouth')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Acclaim', 'name_ru' => 'Acclaim', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Acclaim')]);
            $carBrand->children()->create(['name' => 'Barracuda', 'name_ru' => 'Barracuda', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Barracuda')]);
            $carBrand->children()->create(['name' => 'Breeze', 'name_ru' => 'Breeze', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Breeze')]);
            $carBrand->children()->create(['name' => 'Caravelle', 'name_ru' => 'Caravelle', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Caravelle')]);
            $carBrand->children()->create(['name' => 'Fury', 'name_ru' => 'Fury', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fury')]);
            $carBrand->children()->create(['name' => 'Horizon', 'name_ru' => 'Horizon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Horizon')]);
            $carBrand->children()->create(['name' => 'Laser', 'name_ru' => 'Laser', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Laser')]);
            $carBrand->children()->create(['name' => 'Neon', 'name_ru' => 'Neon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Neon')]);
            $carBrand->children()->create(['name' => 'Prowler', 'name_ru' => 'Prowler', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Prowler')]);
            $carBrand->children()->create(['name' => 'Reliant', 'name_ru' => 'Reliant', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Reliant')]);
            $carBrand->children()->create(['name' => 'Road Runner', 'name_ru' => 'Road Runner', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Road Runner')]);
            $carBrand->children()->create(['name' => 'Satellite', 'name_ru' => 'Satellite', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Satellite')]);
            $carBrand->children()->create(['name' => 'Sundance', 'name_ru' => 'Sundance', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sundance')]);
            $carBrand->children()->create(['name' => 'Turismo', 'name_ru' => 'Turismo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Turismo')]);
            $carBrand->children()->create(['name' => 'Valiant', 'name_ru' => 'Valiant', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Valiant')]);
            $carBrand->children()->create(['name' => 'Volare', 'name_ru' => 'Volare', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Volare')]);
            $carBrand->children()->create(['name' => 'Voyager', 'name_ru' => 'Voyager', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Voyager')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Pontiac', 'name_ru' => 'Понтиак', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pontiac')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '6000', 'name_ru' => '6000', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('6000')]);
            $carBrand->children()->create(['name' => 'Aztek', 'name_ru' => 'Aztek', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aztek')]);
            $carBrand->children()->create(['name' => 'Bonneville', 'name_ru' => 'Bonneville', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bonneville')]);
            $carBrand->children()->create(['name' => 'Catalina', 'name_ru' => 'Catalina', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Catalina')]);
            $carBrand->children()->create(['name' => 'Fiero', 'name_ru' => 'Fiero', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fiero')]);
            $carBrand->children()->create(['name' => 'Firebird', 'name_ru' => 'Firebird', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Firebird')]);
            $carBrand->children()->create(['name' => 'G4', 'name_ru' => 'G4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G4')]);
            $carBrand->children()->create(['name' => 'G5', 'name_ru' => 'G5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G5')]);
            $carBrand->children()->create(['name' => 'G6', 'name_ru' => 'G6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G6')]);
            $carBrand->children()->create(['name' => 'G8', 'name_ru' => 'G8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('G8')]);
            $carBrand->children()->create(['name' => 'GTO', 'name_ru' => 'GTO', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('GTO')]);
            $carBrand->children()->create(['name' => 'Grand AM', 'name_ru' => 'Grand AM', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Grand AM')]);
            $carBrand->children()->create(['name' => 'Grand Prix', 'name_ru' => 'Grand Prix', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Grand Prix')]);
            $carBrand->children()->create(['name' => 'Laurentian', 'name_ru' => 'Laurentian', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Laurentian')]);
            $carBrand->children()->create(['name' => 'LeMans', 'name_ru' => 'LeMans', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LeMans')]);
            $carBrand->children()->create(['name' => 'Montana', 'name_ru' => 'Montana', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Montana')]);
            $carBrand->children()->create(['name' => 'Parisienne', 'name_ru' => 'Parisienne', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Parisienne')]);
            $carBrand->children()->create(['name' => 'Phoenix', 'name_ru' => 'Phoenix', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Phoenix')]);
            $carBrand->children()->create(['name' => 'Solstice', 'name_ru' => 'Solstice', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Solstice')]);
            $carBrand->children()->create(['name' => 'Sunbird', 'name_ru' => 'Sunbird', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sunbird')]);
            $carBrand->children()->create(['name' => 'Sunfire', 'name_ru' => 'Sunfire', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sunfire')]);
            $carBrand->children()->create(['name' => 'Tempest', 'name_ru' => 'Tempest', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tempest')]);
            $carBrand->children()->create(['name' => 'Torpedo', 'name_ru' => 'Torpedo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Torpedo')]);
            $carBrand->children()->create(['name' => 'Torrent', 'name_ru' => 'Torrent', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Torrent')]);
            $carBrand->children()->create(['name' => 'Trans Sport', 'name_ru' => 'Trans Sport', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Trans Sport')]);
            $carBrand->children()->create(['name' => 'Vibe', 'name_ru' => 'Vibe', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vibe')]);
            $carBrand->children()->create(['name' => 'Wave', 'name_ru' => 'Wave', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Wave')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Porsche', 'name_ru' => 'Порше', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Porsche')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '356', 'name_ru' => '356', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('356')]);
            $carBrand->children()->create(['name' => '718 Spyder', 'name_ru' => '718 Spyder', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('718 Spyder')]);
            $carBrand->children()->create(['name' => '911', 'name_ru' => '911', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('911')]);
            $carBrand->children()->create(['name' => '911 GT2', 'name_ru' => '911 GT2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('911 GT2')]);
            $carBrand->children()->create(['name' => '911 GT3', 'name_ru' => '911 GT3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('911 GT3')]);
            $carBrand->children()->create(['name' => '911 R', 'name_ru' => '911 R', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('911 R')]);
            $carBrand->children()->create(['name' => '912', 'name_ru' => '912', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('912')]);
            $carBrand->children()->create(['name' => '914', 'name_ru' => '914', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('914')]);
            $carBrand->children()->create(['name' => '918 Spyder', 'name_ru' => '918 Spyder', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('918 Spyder')]);
            $carBrand->children()->create(['name' => '924', 'name_ru' => '924', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('924')]);
            $carBrand->children()->create(['name' => '928', 'name_ru' => '928', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('928')]);
            $carBrand->children()->create(['name' => '944', 'name_ru' => '944', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('944')]);
            $carBrand->children()->create(['name' => '959', 'name_ru' => '959', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('959')]);
            $carBrand->children()->create(['name' => '968', 'name_ru' => '968', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('968')]);
            $carBrand->children()->create(['name' => 'Boxster', 'name_ru' => 'Boxster', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Boxster')]);
            $carBrand->children()->create(['name' => 'Carrera GT', 'name_ru' => 'Carrera GT', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Carrera GT')]);
            $carBrand->children()->create(['name' => 'Cayenne', 'name_ru' => 'Cayenne', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cayenne')]);
            $carBrand->children()->create(['name' => 'Cayman', 'name_ru' => 'Cayman', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cayman')]);
            $carBrand->children()->create(['name' => 'Cayman GT4', 'name_ru' => 'Cayman GT4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cayman GT4')]);
            $carBrand->children()->create(['name' => 'Macan', 'name_ru' => 'Macan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Macan')]);
            $carBrand->children()->create(['name' => 'Panamera', 'name_ru' => 'Panamera', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Panamera')]);
            $carBrand->children()->create(['name' => 'Taycan', 'name_ru' => 'Taycan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Taycan')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Premier', 'name_ru' => 'Премьер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Premier')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Proton', 'name_ru' => 'Протон', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Proton')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'PUCH', 'name_ru' => 'PUCH', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('PUCH')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Puma', 'name_ru' => 'Пума', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Puma')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Qoros', 'name_ru' => 'Qoros', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Qoros')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Qvale', 'name_ru' => 'Qvale', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Qvale')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Rambler', 'name_ru' => 'Рамблер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rambler')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Ravon', 'name_ru' => 'Равон', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ravon')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Reliant', 'name_ru' => 'Релиант', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Reliant')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Renaissance', 'name_ru' => 'Renaissance', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Renaissance')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Renault', 'name_ru' => 'Рено', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Renault')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '10', 'name_ru' => '10', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('10')]);
            $carBrand->children()->create(['name' => '11', 'name_ru' => '11', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('11')]);
            $carBrand->children()->create(['name' => '12', 'name_ru' => '12', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('12')]);
            $carBrand->children()->create(['name' => '14', 'name_ru' => '14', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('14')]);
            $carBrand->children()->create(['name' => '15', 'name_ru' => '15', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('15')]);
            $carBrand->children()->create(['name' => '16', 'name_ru' => '16', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('16')]);
            $carBrand->children()->create(['name' => '19', 'name_ru' => '19', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('19')]);
            $carBrand->children()->create(['name' => '25', 'name_ru' => '25', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('25')]);
            $carBrand->children()->create(['name' => 'Arkana', 'name_ru' => 'Arkana', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Arkana')]);
            $carBrand->children()->create(['name' => 'Clio', 'name_ru' => 'Clio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Clio')]);
            $carBrand->children()->create(['name' => 'Dokker', 'name_ru' => 'Dokker', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dokker')]);
            $carBrand->children()->create(['name' => 'Duster', 'name_ru' => 'Duster', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Duster')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Espace', 'name_ru' => 'Espace', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Espace')]);
            $carBrand->children()->create(['name' => 'Fluence', 'name_ru' => 'Fluence', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fluence')]);
            $carBrand->children()->create(['name' => 'Kadjar', 'name_ru' => 'Kadjar', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kadjar')]);
            $carBrand->children()->create(['name' => 'Kangoo', 'name_ru' => 'Kangoo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kangoo')]);
            $carBrand->children()->create(['name' => 'Kaptur', 'name_ru' => 'Kaptur', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kaptur')]);
            $carBrand->children()->create(['name' => 'Koleos', 'name_ru' => 'Koleos', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Koleos')]);
            $carBrand->children()->create(['name' => 'Laguna', 'name_ru' => 'Laguna', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Laguna')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Latitude', 'name_ru' => 'Latitude', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Latitude')]);
            $carBrand->children()->create(['name' => 'Logan', 'name_ru' => 'Logan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Logan')]);
            $carBrand->children()->create(['name' => 'Megane', 'name_ru' => 'Megane', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Megane')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],['name' => '3 (Рестайлинг 2)', 'name_ru' => '3 (Рестайлинг 2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг 2)')],['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],])
            ;
            $carBrand->children()->create(['name' => 'Safrane', 'name_ru' => 'Safrane', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Safrane')]);
            $carBrand->children()->create(['name' => 'Sandero', 'name_ru' => 'Sandero', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sandero')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Scenic', 'name_ru' => 'Scenic', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Scenic')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],['name' => '3 (Рестайлинг 2)', 'name_ru' => '3 (Рестайлинг 2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг 2)')],['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],])
            ;
            $carBrand->children()->create(['name' => 'Symbol', 'name_ru' => 'Symbol', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Symbol')]);
            $carBrand->children()->create(['name' => 'Talisman', 'name_ru' => 'Talisman', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Talisman')]);
            $carBrand->children()->create(['name' => 'Trafic', 'name_ru' => 'Trafic', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Trafic')]);
            $carBrand->children()->create(['name' => 'Twingo', 'name_ru' => 'Twingo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Twingo')]);
            $carBrand->children()->create(['name' => 'Vel Satis', 'name_ru' => 'Vel Satis', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vel Satis')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Renault Samsung', 'name_ru' => 'Рено Самсунг', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Renault Samsung')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Rezvani', 'name_ru' => 'Резвани', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rezvani')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Rimac', 'name_ru' => 'Римак', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rimac')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Rinspeed', 'name_ru' => 'Rinspeed', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rinspeed')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Rolls-Royce', 'name_ru' => 'Ролс Ройс', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rolls-Royce')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '20/25', 'name_ru' => '20/25', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('20/25')]);
            $carBrand->children()->create(['name' => 'Camargue', 'name_ru' => 'Camargue', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Camargue')]);
            $carBrand->children()->create(['name' => 'Corniche', 'name_ru' => 'Corniche', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Corniche')]);
            $carBrand->children()->create(['name' => 'Cullinan', 'name_ru' => 'Cullinan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cullinan')]);
            $carBrand->children()->create(['name' => 'Dawn', 'name_ru' => 'Dawn', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dawn')]);
            $carBrand->children()->create(['name' => 'Ghost', 'name_ru' => 'Ghost', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ghost')]);
            $carBrand->children()->create(['name' => 'Park Ward', 'name_ru' => 'Park Ward', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Park Ward')]);
            $carBrand->children()->create(['name' => 'Phantom', 'name_ru' => 'Phantom', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Phantom')]);
            $carBrand->children()->create(['name' => 'Silver Cloud', 'name_ru' => 'Silver Cloud', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Silver Cloud')]);
            $carBrand->children()->create(['name' => 'Silver Ghost', 'name_ru' => 'Silver Ghost', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Silver Ghost')]);
            $carBrand->children()->create(['name' => 'Silver Seraph', 'name_ru' => 'Silver Seraph', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Silver Seraph')]);
            $carBrand->children()->create(['name' => 'Silver Shadow', 'name_ru' => 'Silver Shadow', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Silver Shadow')]);
            $carBrand->children()->create(['name' => 'Silver Spirit', 'name_ru' => 'Silver Spirit', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Silver Spirit')]);
            $carBrand->children()->create(['name' => 'Silver Spur', 'name_ru' => 'Silver Spur', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Silver Spur')]);
            $carBrand->children()->create(['name' => 'Silver Wraith', 'name_ru' => 'Silver Wraith', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Silver Wraith')]);
            $carBrand->children()->create(['name' => 'Wraith', 'name_ru' => 'Wraith', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Wraith')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Ronart', 'name_ru' => 'Ronart', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ronart')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Rover', 'name_ru' => 'Ровер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rover')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '100', 'name_ru' => '100', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('100')]);
            $carBrand->children()->create(['name' => '14', 'name_ru' => '14', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('14')]);
            $carBrand->children()->create(['name' => '200', 'name_ru' => '200', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('200')]);
            $carBrand->children()->create(['name' => '25', 'name_ru' => '25', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('25')]);
            $carBrand->children()->create(['name' => '400', 'name_ru' => '400', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('400')]);
            $carBrand->children()->create(['name' => '45', 'name_ru' => '45', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('45')]);
            $carBrand->children()->create(['name' => '600', 'name_ru' => '600', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('600')]);
            $carBrand->children()->create(['name' => '75', 'name_ru' => '75', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('75')]);
            $carBrand->children()->create(['name' => '800', 'name_ru' => '800', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('800')]);
            $carBrand->children()->create(['name' => 'Maestro', 'name_ru' => 'Maestro', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Maestro')]);
            $carBrand->children()->create(['name' => 'Metro', 'name_ru' => 'Metro', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Metro')]);
            $carBrand->children()->create(['name' => 'Mini', 'name_ru' => 'Mini', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mini')]);
            $carBrand->children()->create(['name' => 'P3', 'name_ru' => 'P3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('P3')]);
            $carBrand->children()->create(['name' => 'P4', 'name_ru' => 'P4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('P4')]);
            $carBrand->children()->create(['name' => 'P6', 'name_ru' => 'P6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('P6')]);
            $carBrand->children()->create(['name' => 'SD1', 'name_ru' => 'SD1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SD1')]);
            $carBrand->children()->create(['name' => 'Streetwise', 'name_ru' => 'Streetwise', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Streetwise')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Saab', 'name_ru' => 'Saab', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Saab')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '600', 'name_ru' => '600', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('600')]);
            $carBrand->children()->create(['name' => '9-2X', 'name_ru' => '9-2X', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('9-2X')]);
            $carBrand->children()->create(['name' => '43533', 'name_ru' => '43533', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('43533')]);
            $carBrand->children()->create(['name' => '9-4X', 'name_ru' => '9-4X', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('9-4X')]);
            $carBrand->children()->create(['name' => '43594', 'name_ru' => '43594', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('43594')]);
            $carBrand->children()->create(['name' => '9-7X', 'name_ru' => '9-7X', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('9-7X')]);
            $carBrand->children()->create(['name' => '90', 'name_ru' => '90', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('90')]);
            $carBrand->children()->create(['name' => '900', 'name_ru' => '900', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('900')]);
            $carBrand->children()->create(['name' => '9000', 'name_ru' => '9000', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('9000')]);
            $carBrand->children()->create(['name' => '93', 'name_ru' => '93', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('93')]);
            $carBrand->children()->create(['name' => '95', 'name_ru' => '95', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('95')]);
            $carBrand->children()->create(['name' => '96', 'name_ru' => '96', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('96')]);
            $carBrand->children()->create(['name' => '99', 'name_ru' => '99', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('99')]);
            $carBrand->children()->create(['name' => 'Sonett', 'name_ru' => 'Sonett', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sonett')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Saipa', 'name_ru' => 'Saipa', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Saipa')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Saleen', 'name_ru' => 'Saleen', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Saleen')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Santana', 'name_ru' => 'Сантана', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Santana')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Saturn', 'name_ru' => 'Сатурн', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Saturn')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Astra', 'name_ru' => 'Astra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Astra')]);
            $carBrand->children()->create(['name' => 'Aura', 'name_ru' => 'Aura', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aura')]);
            $carBrand->children()->create(['name' => 'ION', 'name_ru' => 'ION', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ION')]);
            $carBrand->children()->create(['name' => 'LS', 'name_ru' => 'LS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LS')]);
            $carBrand->children()->create(['name' => 'LW', 'name_ru' => 'LW', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('LW')]);
            $carBrand->children()->create(['name' => 'Outlook', 'name_ru' => 'Outlook', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Outlook')]);
            $carBrand->children()->create(['name' => 'Relay', 'name_ru' => 'Relay', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Relay')]);
            $carBrand->children()->create(['name' => 'SC', 'name_ru' => 'SC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SC')]);
            $carBrand->children()->create(['name' => 'SL', 'name_ru' => 'SL', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SL')]);
            $carBrand->children()->create(['name' => 'SW', 'name_ru' => 'SW', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SW')]);
            $carBrand->children()->create(['name' => 'Sky', 'name_ru' => 'Sky', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sky')]);
            $carBrand->children()->create(['name' => 'VUE', 'name_ru' => 'VUE', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('VUE')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Scion', 'name_ru' => 'Скион', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Scion')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'SEAT', 'name_ru' => 'Сиат', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SEAT')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '133', 'name_ru' => '133', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('133')]);
            $carBrand->children()->create(['name' => 'Alhambra', 'name_ru' => 'Alhambra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Alhambra')]);
            $carBrand->children()->create(['name' => 'Altea', 'name_ru' => 'Altea', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Altea')]);
            $carBrand->children()->create(['name' => 'Arona', 'name_ru' => 'Arona', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Arona')]);
            $carBrand->children()->create(['name' => 'Arosa', 'name_ru' => 'Arosa', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Arosa')]);
            $carBrand->children()->create(['name' => 'Ateca', 'name_ru' => 'Ateca', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ateca')]);
            $carBrand->children()->create(['name' => 'Cordoba', 'name_ru' => 'Cordoba', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cordoba')]);
            $carBrand->children()->create(['name' => 'Exeo', 'name_ru' => 'Exeo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Exeo')]);
            $carBrand->children()->create(['name' => 'Fura', 'name_ru' => 'Fura', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fura')]);
            $carBrand->children()->create(['name' => 'Ibiza', 'name_ru' => 'Ibiza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ibiza')]);
            $carBrand->children()->create(['name' => 'Ibiza Cupra', 'name_ru' => 'Ibiza Cupra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ibiza Cupra')]);
            $carBrand->children()->create(['name' => 'Inca', 'name_ru' => 'Inca', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Inca')]);
            $carBrand->children()->create(['name' => 'Leon', 'name_ru' => 'Leon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Leon')]);
            $carBrand->children()->create(['name' => 'Leon Cupra', 'name_ru' => 'Leon Cupra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Leon Cupra')]);
            $carBrand->children()->create(['name' => 'Malaga', 'name_ru' => 'Malaga', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Malaga')]);
            $carBrand->children()->create(['name' => 'Marbella', 'name_ru' => 'Marbella', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Marbella')]);
            $carBrand->children()->create(['name' => 'Mii', 'name_ru' => 'Mii', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mii')]);
            $carBrand->children()->create(['name' => 'Ronda', 'name_ru' => 'Ronda', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ronda')]);
            $carBrand->children()->create(['name' => 'Tarraco', 'name_ru' => 'Tarraco', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tarraco')]);
            $carBrand->children()->create(['name' => 'Toledo', 'name_ru' => 'Toledo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Toledo')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Shanghai Maple', 'name_ru' => 'Шанхайский Мапли', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Shanghai Maple')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'ShuangHuan', 'name_ru' => 'Shuanghuan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ShuangHuan')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Noble', 'name_ru' => 'Noble', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Noble')]);
            $carBrand->children()->create(['name' => 'Sceo', 'name_ru' => 'Sceo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sceo')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Simca', 'name_ru' => 'Simca', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Simca')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Skoda', 'name_ru' => 'Шкода', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Skoda')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '100 Series', 'name_ru' => '100 Series', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('100 Series')]);
            $carBrand->children()->create(['name' => '105, 120', 'name_ru' => '105, 120', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('105, 120')]);
            $carBrand->children()->create(['name' => '1200', 'name_ru' => '1200', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1200')]);
            $carBrand->children()->create(['name' => 'Citigo', 'name_ru' => 'Citigo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Citigo')]);
            $carBrand->children()->create(['name' => 'Fabia', 'name_ru' => 'Fabia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fabia')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],])
            ;
            $carBrand->children()->create(['name' => 'Fabia RS', 'name_ru' => 'Fabia RS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fabia RS')]);
            $carBrand->children()->create(['name' => 'Favorit', 'name_ru' => 'Favorit', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Favorit')]);
            $carBrand->children()->create(['name' => 'Felicia', 'name_ru' => 'Felicia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Felicia')]);
            $carBrand->children()->create(['name' => 'Forman', 'name_ru' => 'Forman', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Forman')]);
            $carBrand->children()->create(['name' => 'Kamiq', 'name_ru' => 'Kamiq', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kamiq')]);
            $carBrand->children()->create(['name' => 'Karoq', 'name_ru' => 'Karoq', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Karoq')]);
            $carBrand->children()->create(['name' => 'Kodiaq', 'name_ru' => 'Kodiaq', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kodiaq')]);
            $carBrand->children()->create(['name' => 'Kodiaq RS', 'name_ru' => 'Kodiaq RS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kodiaq RS')]);
            $carBrand->children()->create(['name' => 'Octavia', 'name_ru' => 'Octavia', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Octavia')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],])
            ;
            $carBrand->children()->create(['name' => 'Octavia RS', 'name_ru' => 'Octavia RS', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Octavia RS')]);
            $carBrand->children()->create(['name' => 'Popular', 'name_ru' => 'Popular', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Popular')]);
            $carBrand->children()->create(['name' => 'Rapid', 'name_ru' => 'Rapid', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rapid')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Roomster', 'name_ru' => 'Roomster', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Roomster')]);
            $carBrand->children()->create(['name' => 'Scala', 'name_ru' => 'Scala', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Scala')]);
            $carBrand->children()->create(['name' => 'Superb', 'name_ru' => 'Superb', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Superb')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],])
            ;
            $carBrand->children()->create(['name' => 'Yeti', 'name_ru' => 'Yeti', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Yeti')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Smart', 'name_ru' => 'Смарт', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Smart')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Forfour', 'name_ru' => 'Forfour', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Forfour')]);
            $carBrand->children()->create(['name' => 'Fortwo', 'name_ru' => 'Fortwo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fortwo')]);
            $carBrand->children()->create(['name' => 'Roadster', 'name_ru' => 'Roadster', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Roadster')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Soueast', 'name_ru' => 'Soueast', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Soueast')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Spectre', 'name_ru' => 'Спектра', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Spectre')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Spyker', 'name_ru' => 'Спикер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Spyker')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'SsangYong', 'name_ru' => 'SsangYong', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SsangYong')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Actyon', 'name_ru' => 'Actyon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Actyon')]);
            $carBrand->children()->create(['name' => 'Actyon Sports', 'name_ru' => 'Actyon Sports', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Actyon Sports')]);
            $carBrand->children()->create(['name' => 'Chairman', 'name_ru' => 'Chairman', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Chairman')]);
            $carBrand->children()->create(['name' => 'Istana', 'name_ru' => 'Istana', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Istana')]);
            $carBrand->children()->create(['name' => 'Kallista', 'name_ru' => 'Kallista', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kallista')]);
            $carBrand->children()->create(['name' => 'Korando', 'name_ru' => 'Korando', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Korando')]);
            $carBrand->children()->create(['name' => 'Korando Family', 'name_ru' => 'Korando Family', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Korando Family')]);
            $carBrand->children()->create(['name' => 'Korando Sports', 'name_ru' => 'Korando Sports', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Korando Sports')]);
            $carBrand->children()->create(['name' => 'Korando Turismo', 'name_ru' => 'Korando Turismo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Korando Turismo')]);
            $carBrand->children()->create(['name' => 'Kyron', 'name_ru' => 'Kyron', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kyron')]);
            $carBrand->children()->create(['name' => 'Musso', 'name_ru' => 'Musso', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Musso')]);
            $carBrand->children()->create(['name' => 'Nomad', 'name_ru' => 'Nomad', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Nomad')]);
            $carBrand->children()->create(['name' => 'Rexton', 'name_ru' => 'Rexton', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rexton')]);
            $carBrand->children()->create(['name' => 'Rodius', 'name_ru' => 'Rodius', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rodius')]);
            $carBrand->children()->create(['name' => 'Stavic', 'name_ru' => 'Stavic', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Stavic')]);
            $carBrand->children()->create(['name' => 'Tivoli', 'name_ru' => 'Tivoli', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tivoli')]);
            $carBrand->children()->create(['name' => 'XLV', 'name_ru' => 'XLV', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XLV')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Steyr', 'name_ru' => 'Steyr', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Steyr')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Studebaker', 'name_ru' => 'Studebaker', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Studebaker')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Golden Hawk', 'name_ru' => 'Golden Hawk', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Golden Hawk')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Subaru', 'name_ru' => 'Субару', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Subaru')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '1000', 'name_ru' => '1000', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1000')]);
            $carBrand->children()->create(['name' => '360', 'name_ru' => '360', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('360')]);
            $carBrand->children()->create(['name' => 'Alcyone', 'name_ru' => 'Alcyone', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Alcyone')]);
            $carBrand->children()->create(['name' => 'Ascent', 'name_ru' => 'Ascent', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ascent')]);
            $carBrand->children()->create(['name' => 'BRZ', 'name_ru' => 'BRZ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('BRZ')]);
            $carBrand->children()->create(['name' => 'Baja', 'name_ru' => 'Baja', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Baja')]);
            $carBrand->children()->create(['name' => 'Bighorn', 'name_ru' => 'Bighorn', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bighorn')]);
            $carBrand->children()->create(['name' => 'Bistro', 'name_ru' => 'Bistro', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bistro')]);
            $carBrand->children()->create(['name' => 'Brat', 'name_ru' => 'Brat', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Brat')]);
            $carBrand->children()->create(['name' => 'Dex', 'name_ru' => 'Dex', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dex')]);
            $carBrand->children()->create(['name' => 'Dias Wagon', 'name_ru' => 'Dias Wagon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Dias Wagon')]);
            $carBrand->children()->create(['name' => 'Domingo', 'name_ru' => 'Domingo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Domingo')]);
            $carBrand->children()->create(['name' => 'Exiga', 'name_ru' => 'Exiga', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Exiga')]);
            $carBrand->children()->create(['name' => 'Forester', 'name_ru' => 'Forester', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Forester')])
                ->children()->createMany([
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],
                    ['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],
                    ['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],
                    ['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],
                    ['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],
                    ['name' => '4 (Рестайлинг)', 'name_ru' => '4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг)')],
                    ['name' => '4 (Рестайлинг 2)', 'name_ru' => '4 (Рестайлинг 2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг 2)')],
                    ['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')]

                ]);
            $carBrand->children()->create(['name' => 'Impreza', 'name_ru' => 'Impreza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Impreza')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '2 (Рестайлинг 2)', 'name_ru' => '2 (Рестайлинг 2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг 2)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],['name' => '4 (Рестайлинг)', 'name_ru' => '4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг)')],['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')],])
            ;
            $carBrand->children()->create(['name' => 'Impreza WRX', 'name_ru' => 'Impreza WRX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Impreza WRX')]);
            $carBrand->children()->create(['name' => 'Impreza WRX STi', 'name_ru' => 'Impreza WRX STi', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Impreza WRX STi')]);
            $carBrand->children()->create(['name' => 'Justy', 'name_ru' => 'Justy', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Justy')]);
            $carBrand->children()->create(['name' => 'Legacy', 'name_ru' => 'Legacy', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Legacy')])
                ->children()->createMany([
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],
                    ['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],
                    ['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '4 (Рестайлинг)', 'name_ru' => '4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг)')],
                    ['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')],
                    ['name' => '5 (Рестайлинг)', 'name_ru' => '5 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5 (Рестайлинг)')],
                    ['name' => '6', 'name_ru' => '6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('6')],
                    ['name' => '6 (Рестайлинг)', 'name_ru' => '6 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('6 (Рестайлинг)')],
                    ['name' => '7', 'name_ru' => '7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('7')]

                ]);
            $carBrand->children()->create(['name' => 'Legacy Lancaster', 'name_ru' => 'Legacy Lancaster', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Legacy Lancaster')]);
            $carBrand->children()->create(['name' => 'Leone', 'name_ru' => 'Leone', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Leone')]);
            $carBrand->children()->create(['name' => 'Levorg', 'name_ru' => 'Levorg', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Levorg')]);
            $carBrand->children()->create(['name' => 'Outback', 'name_ru' => 'Outback', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Outback')])
                ->children()->createMany([
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],
                    ['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],
                    ['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],
                    ['name' => '4 (Рестайлинг)', 'name_ru' => '4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг)')],
                    ['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')],
                    ['name' => '5 (Рестайлинг)', 'name_ru' => '5 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5 (Рестайлинг)')],
                    ['name' => '6', 'name_ru' => '6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('6')]

                ]);
            $carBrand->children()->create(['name' => 'R2', 'name_ru' => 'R2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('R2')]);
            $carBrand->children()->create(['name' => 'SVX', 'name_ru' => 'SVX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SVX')]);
            $carBrand->children()->create(['name' => 'Stella', 'name_ru' => 'Stella', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Stella')]);
            $carBrand->children()->create(['name' => 'Tribeca', 'name_ru' => 'Tribeca', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tribeca')]);
            $carBrand->children()->create(['name' => 'WRX', 'name_ru' => 'WRX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('WRX')]);
            $carBrand->children()->create(['name' => 'WRX STi', 'name_ru' => 'WRX STi', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('WRX STi')]);
            $carBrand->children()->create(['name' => 'XV', 'name_ru' => 'XV', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XV')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Suzuki', 'name_ru' => 'Сузуки', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Suzuki')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'APV', 'name_ru' => 'APV', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('APV')]);
            $carBrand->children()->create(['name' => 'Aerio', 'name_ru' => 'Aerio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aerio')]);
            $carBrand->children()->create(['name' => 'Alto', 'name_ru' => 'Alto', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Alto')]);
            $carBrand->children()->create(['name' => 'Alto Lapin', 'name_ru' => 'Alto Lapin', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Alto Lapin')]);
            $carBrand->children()->create(['name' => 'Baleno', 'name_ru' => 'Baleno', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Baleno')]);
            $carBrand->children()->create(['name' => 'Cappuccino', 'name_ru' => 'Cappuccino', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cappuccino')]);
            $carBrand->children()->create(['name' => 'Cara', 'name_ru' => 'Cara', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cara')]);
            $carBrand->children()->create(['name' => 'Carry', 'name_ru' => 'Carry', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Carry')]);
            $carBrand->children()->create(['name' => 'Celerio', 'name_ru' => 'Celerio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Celerio')]);
            $carBrand->children()->create(['name' => 'Cervo', 'name_ru' => 'Cervo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cervo')]);
            $carBrand->children()->create(['name' => 'Cultus', 'name_ru' => 'Cultus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cultus')]);
            $carBrand->children()->create(['name' => 'Equator', 'name_ru' => 'Equator', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Equator')]);
            $carBrand->children()->create(['name' => 'Ertiga', 'name_ru' => 'Ertiga', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ertiga')]);
            $carBrand->children()->create(['name' => 'Escudo', 'name_ru' => 'Escudo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Escudo')]);
            $carBrand->children()->create(['name' => 'Esteem', 'name_ru' => 'Esteem', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Esteem')]);
            $carBrand->children()->create(['name' => 'Every', 'name_ru' => 'Every', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Every')]);
            $carBrand->children()->create(['name' => 'Forenza', 'name_ru' => 'Forenza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Forenza')]);
            $carBrand->children()->create(['name' => 'Grand Vitara', 'name_ru' => 'Grand Vitara', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Grand Vitara')]);
            $carBrand->children()->create(['name' => 'Hustler', 'name_ru' => 'Hustler', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hustler')]);
            $carBrand->children()->create(['name' => 'Ignis', 'name_ru' => 'Ignis', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ignis')]);
            $carBrand->children()->create(['name' => 'Jimny', 'name_ru' => 'Jimny', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Jimny')]);
            $carBrand->children()->create(['name' => 'Kei', 'name_ru' => 'Kei', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kei')]);
            $carBrand->children()->create(['name' => 'Kizashi', 'name_ru' => 'Kizashi', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Kizashi')]);
            $carBrand->children()->create(['name' => 'Landy', 'name_ru' => 'Landy', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Landy')]);
            $carBrand->children()->create(['name' => 'Liana', 'name_ru' => 'Liana', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Liana')]);
            $carBrand->children()->create(['name' => 'SX4', 'name_ru' => 'SX4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('SX4')]);
            $carBrand->children()->create(['name' => 'Solio', 'name_ru' => 'Solio', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Solio')]);
            $carBrand->children()->create(['name' => 'Splash', 'name_ru' => 'Splash', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Splash')]);
            $carBrand->children()->create(['name' => 'Swift', 'name_ru' => 'Swift', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Swift')]);
            $carBrand->children()->create(['name' => 'Vitara', 'name_ru' => 'Vitara', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vitara')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Talbot', 'name_ru' => 'Talbot', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Talbot')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '1510', 'name_ru' => '1510', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1510')]);
            $carBrand->children()->create(['name' => 'Avenger', 'name_ru' => 'Avenger', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Avenger')]);
            $carBrand->children()->create(['name' => 'Horizon', 'name_ru' => 'Horizon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Horizon')]);
            $carBrand->children()->create(['name' => 'Rancho', 'name_ru' => 'Rancho', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Rancho')]);
            $carBrand->children()->create(['name' => 'Samba', 'name_ru' => 'Samba', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Samba')]);
            $carBrand->children()->create(['name' => 'Solara', 'name_ru' => 'Solara', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Solara')]);
            $carBrand->children()->create(['name' => 'Tagora', 'name_ru' => 'Tagora', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tagora')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'TATA', 'name_ru' => 'TATA', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TATA')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Aria', 'name_ru' => 'Aria', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aria')]);
            $carBrand->children()->create(['name' => 'Estate', 'name_ru' => 'Estate', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Estate')]);
            $carBrand->children()->create(['name' => 'Indica', 'name_ru' => 'Indica', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Indica')]);
            $carBrand->children()->create(['name' => 'Indigo', 'name_ru' => 'Indigo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Indigo')]);
            $carBrand->children()->create(['name' => 'Nano', 'name_ru' => 'Nano', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Nano')]);
            $carBrand->children()->create(['name' => 'Safari', 'name_ru' => 'Safari', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Safari')]);
            $carBrand->children()->create(['name' => 'Sierra', 'name_ru' => 'Sierra', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sierra')]);
            $carBrand->children()->create(['name' => 'Sumo', 'name_ru' => 'Sumo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sumo')]);
            $carBrand->children()->create(['name' => 'Sumo Grande', 'name_ru' => 'Sumo Grande', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sumo Grande')]);
            $carBrand->children()->create(['name' => 'Telcoline', 'name_ru' => 'Telcoline', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Telcoline')]);
            $carBrand->children()->create(['name' => 'Xenon', 'name_ru' => 'Xenon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Xenon')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Tatra', 'name_ru' => 'Татра', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tatra')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '57', 'name_ru' => '57', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('57')]);
            $carBrand->children()->create(['name' => '77', 'name_ru' => '77', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('77')]);
            $carBrand->children()->create(['name' => '80', 'name_ru' => '80', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('80')]);
            $carBrand->children()->create(['name' => '87', 'name_ru' => '87', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('87')]);
            $carBrand->children()->create(['name' => 'T603', 'name_ru' => 'T603', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('T603')]);
            $carBrand->children()->create(['name' => 'T613', 'name_ru' => 'T613', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('T613')]);
            $carBrand->children()->create(['name' => 'T700', 'name_ru' => 'T700', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('T700')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Tazzari', 'name_ru' => 'Tazzari', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tazzari')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Tesla', 'name_ru' => 'Тесла', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tesla')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Model 3', 'name_ru' => 'Model 3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Model 3')]);
            $carBrand->children()->create(['name' => 'Model S', 'name_ru' => 'Model S', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Model S')]);
            $carBrand->children()->create(['name' => 'Model X', 'name_ru' => 'Model X', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Model X')]);
            $carBrand->children()->create(['name' => 'Roadster', 'name_ru' => 'Roadster', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Roadster')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Think', 'name_ru' => 'Финк', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Think')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Tianma', 'name_ru' => 'Tianma', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tianma')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Tianye', 'name_ru' => 'Tianye', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tianye')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Tofas', 'name_ru' => 'Tofas', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tofas')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Toyota', 'name_ru' => 'Тойота', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Toyota')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '4Runner', 'name_ru' => '4Runner', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4Runner')]);
            $carBrand->children()->create(['name' => 'Auris', 'name_ru' => 'Auris', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Auris')]);
            $carBrand->children()->create(['name' => 'Avensis', 'name_ru' => 'Avensis', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Avensis')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],['name' => '3 (Рестайлинг  2)', 'name_ru' => '3 (Рестайлинг  2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг  2)')],])
            ;
            $carBrand->children()->create(['name' => 'Caldina', 'name_ru' => 'Caldina', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Caldina')]);
            $carBrand->children()->create(['name' => 'Camry', 'name_ru' => 'Camry', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Camry')])->children()->createMany([
                ['name' => 'V10', 'name_ru' => 'V10', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V10')],
                ['name' => 'V10 [рестайлинг]', 'name_ru' => 'V10 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V10 [рестайлинг]')],
                ['name' => 'V20', 'name_ru' => 'V20', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V20')],
                ['name' => 'V30', 'name_ru' => 'V30', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V30')],
                ['name' => 'V10', 'name_ru' => 'V10', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V10')],
                ['name' => 'V30 [рестайлинг]', 'name_ru' => 'V30 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V30 [рестайлинг]')],
                ['name' => 'XV10', 'name_ru' => 'XV10', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XV10')],
                ['name' => 'XV10 [рестайлинг]', 'name_ru' => 'XV10 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XV10 [рестайлинг]')],
                ['name' => 'V40', 'name_ru' => 'V40', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V40')],
                ['name' => 'V40 [рестайлинг]', 'name_ru' => 'V40 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V40 [рестайлинг]')],
                ['name' => 'XV20', 'name_ru' => 'XV20', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XV20')],
                ['name' => 'XV20 [рестайлинг]', 'name_ru' => 'XV20 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XV20 [рестайлинг]')],
                ['name' => 'XV30', 'name_ru' => 'XV30', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XV30')],
                ['name' => 'XV30 [рестайлинг]', 'name_ru' => 'XV30 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XV30 [рестайлинг]')],
                ['name' => 'XV40', 'name_ru' => 'XV40', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XV40')],
                ['name' => 'XV40 [рестайлинг]', 'name_ru' => 'XV40 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XV40 [рестайлинг]')],
                ['name' => 'XV50', 'name_ru' => 'XV50', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XV50')],
                ['name' => 'XV50 [рестайлинг]', 'name_ru' => 'XV50 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XV50 [рестайлинг]')],
                ['name' => 'XV70', 'name_ru' => 'XV70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XV70')]

            ]);
            $carBrand->children()->create(['name' => 'Carina', 'name_ru' => 'Carina', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Carina')]);
            $carBrand->children()->create(['name' => 'Carina E', 'name_ru' => 'Carina E', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Carina E')]);
            $carBrand->children()->create(['name' => 'Celica', 'name_ru' => 'Celica', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Celica')]);
            $carBrand->children()->create(['name' => 'Chaser', 'name_ru' => 'Chaser', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Chaser')]);
            $carBrand->children()->create(['name' => 'Corolla', 'name_ru' => 'Corolla', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Corolla')])
                ->children()->createMany([
                    ['name' => 'E10', 'name_ru' => 'E10', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E10')],
                    ['name' => 'E20', 'name_ru' => 'E20', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E20')],
                    ['name' => 'E50', 'name_ru' => 'E50', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E50')],
                    ['name' => 'E50 [рестайлинг]', 'name_ru' => 'E50 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E50 [рестайлинг]')],
                    ['name' => 'E10', 'name_ru' => 'E10', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E10')],
                    ['name' => 'E70', 'name_ru' => 'E70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E70')],
                    ['name' => 'E70 [рестайлинг]', 'name_ru' => 'E70 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E70 [рестайлинг]')],
                    ['name' => 'E80', 'name_ru' => 'E80', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E80')],
                    ['name' => 'E90', 'name_ru' => 'E90', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E90')],
                    ['name' => 'E100', 'name_ru' => 'E100', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E100')],
                    ['name' => 'E110', 'name_ru' => 'E110', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E110')],
                    ['name' => 'E110 [рестайлинг]', 'name_ru' => 'E110 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E110 [рестайлинг]')],
                    ['name' => 'E120', 'name_ru' => 'E120', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E120')],
                    ['name' => 'E130 [рестайлинг]', 'name_ru' => 'E130 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E130 [рестайлинг]')],
                    ['name' => 'E140', 'name_ru' => 'E140', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E140')],
                    ['name' => 'E150 [рестайлинг]', 'name_ru' => 'E150 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E150 [рестайлинг]')],
                    ['name' => 'E160', 'name_ru' => 'E160', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E160')],
                    ['name' => 'E170 [рестайлинг]', 'name_ru' => 'E170 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E170 [рестайлинг]')],
                    ['name' => 'E210', 'name_ru' => 'E210', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('E210')]

                ]);
            $carBrand->children()->create(['name' => 'Corona', 'name_ru' => 'Corona', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Corona')]);
            $carBrand->children()->create(['name' => 'Cresta', 'name_ru' => 'Cresta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Cresta')]);
            $carBrand->children()->create(['name' => 'Crown', 'name_ru' => 'Crown', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Crown')]);
            $carBrand->children()->create(['name' => 'Estima', 'name_ru' => 'Estima', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Estima')]);
            $carBrand->children()->create(['name' => 'Fortuner', 'name_ru' => 'Fortuner', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fortuner')]);
            $carBrand->children()->create(['name' => 'HiAce', 'name_ru' => 'HiAce', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('HiAce')]);
            $carBrand->children()->create(['name' => 'Highlander', 'name_ru' => 'Highlander', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Highlander')]);
            $carBrand->children()->create(['name' => 'Hilux', 'name_ru' => 'Hilux', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hilux')]);
            $carBrand->children()->create(['name' => 'Ipsum', 'name_ru' => 'Ipsum', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ipsum')]);
            $carBrand->children()->create(['name' => 'Land Cruiser', 'name_ru' => 'Land Cruiser', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Land Cruiser')])
                ->children()->createMany([['name' => 'BJ', 'name_ru' => 'BJ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('BJ')],['name' => 'J20', 'name_ru' => 'J20', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J20')],['name' => 'J40/J50', 'name_ru' => 'J40/J50', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J40/J50')],['name' => 'J60', 'name_ru' => 'J60', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J60')],['name' => 'BJ', 'name_ru' => 'BJ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('BJ')],['name' => 'J60 [рестайлинг]', 'name_ru' => 'J60 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J60 [рестайлинг]')],['name' => 'J70', 'name_ru' => 'J70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J70')],['name' => 'J70 [рестайлинг]', 'name_ru' => 'J70 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J70 [рестайлинг]')],['name' => 'J70 [2-й рестайлинг]', 'name_ru' => 'J70 [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J70 [2-й рестайлинг]')],['name' => 'J70 [3-й рестайлинг]', 'name_ru' => 'J70 [3-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J70 [3-й рестайлинг]')],['name' => 'J80', 'name_ru' => 'J80', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J80')],['name' => 'J100', 'name_ru' => 'J100', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J100')],['name' => 'J100 [рестайлинг]', 'name_ru' => 'J100 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J100 [рестайлинг]')],['name' => 'J100 [2-й рестайлинг]', 'name_ru' => 'J100 [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J100 [2-й рестайлинг]')],['name' => 'J200', 'name_ru' => 'J200', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J200')],['name' => 'J200 [рестайлинг]', 'name_ru' => 'J200 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J200 [рестайлинг]')],['name' => 'J200 [2-й рестайлинг]', 'name_ru' => 'J200 [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J200 [2-й рестайлинг]')],]);
            $carBrand->children()->create(['name' => 'Land Cruiser Prado', 'name_ru' => 'Land Cruiser Prado', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Land Cruiser Prado')])->children()->createMany([['name' => 'J70', 'name_ru' => 'J70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J70')],['name' => 'J90', 'name_ru' => 'J90', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J90')],['name' => 'J90 [рестайлинг]', 'name_ru' => 'J90 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J90 [рестайлинг]')],['name' => 'J120', 'name_ru' => 'J120', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J120')],['name' => 'J70', 'name_ru' => 'J70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J70')],['name' => 'J150', 'name_ru' => 'J150', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J150')],['name' => 'J150 [рестайлинг]', 'name_ru' => 'J150 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J150 [рестайлинг]')],['name' => 'J150 [2-й рестайлинг]', 'name_ru' => 'J150 [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('J150 [2-й рестайлинг]')],])
            ;
            $carBrand->children()->create(['name' => 'Lite Ace', 'name_ru' => 'Lite Ace', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lite Ace')]);
            $carBrand->children()->create(['name' => 'Mark II', 'name_ru' => 'Mark II', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Mark II')]);
            $carBrand->children()->create(['name' => 'Prius', 'name_ru' => 'Prius', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Prius')]);
            $carBrand->children()->create(['name' => 'RAV 4', 'name_ru' => 'RAV 4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('RAV 4')])
                ->children()->createMany([
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],
                    ['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],
                    ['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],
                    ['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],
                    ['name' => '3 (Рестайлинг  2)', 'name_ru' => '3 (Рестайлинг  2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг  2)')],
                    ['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],
                    ['name' => '4 (Рестайлинг)', 'name_ru' => '4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг)')],
                    ['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')]

                ]);
            $carBrand->children()->create(['name' => 'Sprinter', 'name_ru' => 'Sprinter', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sprinter')]);
            $carBrand->children()->create(['name' => 'Town Ace', 'name_ru' => 'Town Ace', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Town Ace')]);
            $carBrand->children()->create(['name' => 'Venza', 'name_ru' => 'Venza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Venza')]);
            $carBrand->children()->create(['name' => 'Verso', 'name_ru' => 'Verso', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Verso')]);
            $carBrand->children()->create(['name' => 'Yaris', 'name_ru' => 'Yaris', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Yaris')])->children()->createMany([['name' => 'P1', 'name_ru' => 'P1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('P1')],['name' => 'P1 [рестайлинг]', 'name_ru' => 'P1 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('P1 [рестайлинг]')],['name' => 'XP9', 'name_ru' => 'XP9', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XP9')],['name' => 'XP9 [рестайлинг]', 'name_ru' => 'XP9 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XP9 [рестайлинг]')],['name' => 'P1', 'name_ru' => 'P1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('P1')],['name' => 'XP130', 'name_ru' => 'XP130', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XP130')],['name' => 'XP130 [рестайлинг]', 'name_ru' => 'XP130 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XP130 [рестайлинг]')],['name' => 'XP130 [2-й рестайлинг]', 'name_ru' => 'XP130 [2-й рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XP130 [2-й рестайлинг]')],['name' => 'XP150', 'name_ru' => 'XP150', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XP150')],])
            ;

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Trabant', 'name_ru' => 'Trabant', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Trabant')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '600', 'name_ru' => '600', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('600')]);
            $carBrand->children()->create(['name' => 'P 601', 'name_ru' => 'P 601', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('P 601')]);
            $carBrand->children()->create(['name' => 'P50', 'name_ru' => 'P50', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('P50')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Tramontana', 'name_ru' => 'Tramontana', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tramontana')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Triumph', 'name_ru' => 'Триумф', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Triumph')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Acclaim', 'name_ru' => 'Acclaim', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Acclaim')]);
            $carBrand->children()->create(['name' => 'Spitfire', 'name_ru' => 'Spitfire', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Spitfire')]);
            $carBrand->children()->create(['name' => 'Stag', 'name_ru' => 'Stag', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Stag')]);
            $carBrand->children()->create(['name' => 'TR4', 'name_ru' => 'TR4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TR4')]);
            $carBrand->children()->create(['name' => 'TR6', 'name_ru' => 'TR6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TR6')]);
            $carBrand->children()->create(['name' => 'TR7', 'name_ru' => 'TR7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TR7')]);
            $carBrand->children()->create(['name' => 'TR8', 'name_ru' => 'TR8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TR8')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'TVR', 'name_ru' => 'TVR', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('TVR')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Ultima', 'name_ru' => 'Ултима', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ultima')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Vauxhall', 'name_ru' => 'Vauxhall', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vauxhall')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Vector', 'name_ru' => 'Вектор', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vector')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Venturi', 'name_ru' => 'Venturi', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Venturi')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Volkswagen', 'name_ru' => 'Фольцваген', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Volkswagen')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '181', 'name_ru' => '181', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('181')]);
            $carBrand->children()->create(['name' => 'Amarok', 'name_ru' => 'Amarok', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Amarok')]);
            $carBrand->children()->create(['name' => 'Arteon', 'name_ru' => 'Arteon', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Arteon')]);
            $carBrand->children()->create(['name' => 'Beetle', 'name_ru' => 'Beetle', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Beetle')]);
            $carBrand->children()->create(['name' => 'Bora', 'name_ru' => 'Bora', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Bora')]);
            $carBrand->children()->create(['name' => 'Caddy', 'name_ru' => 'Caddy', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Caddy')]);
            $carBrand->children()->create(['name' => 'Caravelle', 'name_ru' => 'Caravelle', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Caravelle')]);
            $carBrand->children()->create(['name' => 'Corrado', 'name_ru' => 'Corrado', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Corrado')]);
            $carBrand->children()->create(['name' => 'Eos', 'name_ru' => 'Eos', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Eos')]);
            $carBrand->children()->create(['name' => 'EuroVan', 'name_ru' => 'EuroVan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('EuroVan')]);
            $carBrand->children()->create(['name' => 'Fox', 'name_ru' => 'Fox', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Fox')]);
            $carBrand->children()->create(['name' => 'Golf', 'name_ru' => 'Golf', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Golf')])
                ->children()->createMany([
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],
                    ['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],
                    ['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')],
                    ['name' => '6', 'name_ru' => '6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('6')],
                    ['name' => '7', 'name_ru' => '7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('7')],
                    ['name' => '7 [рестайлинг]', 'name_ru' => '7 [рестайлинг]', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('7 [рестайлинг]')],
                    ['name' => '8', 'name_ru' => '8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('8')],

                ]);
            $carBrand->children()->create(['name' => 'Golf GTI', 'name_ru' => 'Golf GTI', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Golf GTI')]);
            $carBrand->children()->create(['name' => 'Golf Plus', 'name_ru' => 'Golf Plus', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Golf Plus')]);
            $carBrand->children()->create(['name' => 'Jetta', 'name_ru' => 'Jetta', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Jetta')])
                ->children()->createMany([
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],
                    ['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],
                    ['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')],
                    ['name' => '5 (Рестайлинг)', 'name_ru' => '5 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5 (Рестайлинг)')],
                    ['name' => '6', 'name_ru' => '6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('6')],
                    ['name' => '6 (Рестайлинг)', 'name_ru' => '6 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('6 (Рестайлинг)')],
                    ['name' => '7', 'name_ru' => '7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('7')],

                ]);
            $carBrand->children()->create(['name' => 'Lupo', 'name_ru' => 'Lupo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lupo')]);
            $carBrand->children()->create(['name' => 'Multivan', 'name_ru' => 'Multivan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Multivan')]);
            $carBrand->children()->create(['name' => 'Passat', 'name_ru' => 'Passat', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Passat')])
                ->children()->createMany([
                    ['name' => 'B1', 'name_ru' => 'B1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B1')],
                    ['name' => 'B2', 'name_ru' => 'B2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B2')],
                    ['name' => 'B3', 'name_ru' => 'B3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B3')],
                    ['name' => 'B4', 'name_ru' => 'B4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B4')],
                    ['name' => 'B1', 'name_ru' => 'B1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B1')],
                    ['name' => 'B5', 'name_ru' => 'B5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B5')],
                    ['name' => 'B5 (Рестайлинг)', 'name_ru' => 'B5 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B5 (Рестайлинг)')],
                    ['name' => 'B6', 'name_ru' => 'B6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B6')],
                    ['name' => 'B7', 'name_ru' => 'B7', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B7')],
                    ['name' => 'B8', 'name_ru' => 'B8', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B8')],
                    ['name' => 'B8 (Рестайлинг)', 'name_ru' => 'B8 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('B8 (Рестайлинг)')],

                ]);
            $carBrand->children()->create(['name' => 'Passat CC', 'name_ru' => 'Passat CC', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Passat CC')]);
            $carBrand->children()->create(['name' => 'Phaeton', 'name_ru' => 'Phaeton', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Phaeton')]);
            $carBrand->children()->create(['name' => 'Pointer', 'name_ru' => 'Pointer', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pointer')]);
            $carBrand->children()->create(['name' => 'Polo', 'name_ru' => 'Polo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Polo')])
                ->children()->createMany([
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],
                    ['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],
                    ['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],
                    ['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],
                    ['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],
                    ['name' => '4', 'name_ru' => '4', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4')],
                    ['name' => '4 (Рестайлинг)', 'name_ru' => '4 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('4 (Рестайлинг)')],
                    ['name' => '5', 'name_ru' => '5', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5')],
                    ['name' => '5 (Рестайлинг)', 'name_ru' => '5 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('5 (Рестайлинг)')],
                    ['name' => '6', 'name_ru' => '6', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('6')]

                ]);
            $carBrand->children()->create(['name' => 'Scirocco', 'name_ru' => 'Scirocco', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Scirocco')]);
            $carBrand->children()->create(['name' => 'Sharan', 'name_ru' => 'Sharan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sharan')]);
            $carBrand->children()->create(['name' => 'Teramont', 'name_ru' => 'Teramont', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Teramont')]);
            $carBrand->children()->create(['name' => 'Tiguan', 'name_ru' => 'Tiguan', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tiguan')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'Touareg', 'name_ru' => 'Touareg', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Touareg')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],])
            ;
            $carBrand->children()->create(['name' => 'Touran', 'name_ru' => 'Touran', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Touran')]);
            $carBrand->children()->create(['name' => 'Transporter', 'name_ru' => 'Transporter', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Transporter')]);
            $carBrand->children()->create(['name' => 'Vento', 'name_ru' => 'Vento', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vento')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Volvo', 'name_ru' => 'Вольво', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Volvo')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '120 Series', 'name_ru' => '120 Series', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('120 Series')]);
            $carBrand->children()->create(['name' => '140 Series', 'name_ru' => '140 Series', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('140 Series')]);
            $carBrand->children()->create(['name' => '164', 'name_ru' => '164', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('164')]);
            $carBrand->children()->create(['name' => '240 Series', 'name_ru' => '240 Series', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('240 Series')]);
            $carBrand->children()->create(['name' => '260 Series', 'name_ru' => '260 Series', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('260 Series')]);
            $carBrand->children()->create(['name' => '300 Series', 'name_ru' => '300 Series', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('300 Series')]);
            $carBrand->children()->create(['name' => '440', 'name_ru' => '440', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('440')]);
            $carBrand->children()->create(['name' => '460', 'name_ru' => '460', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('460')]);
            $carBrand->children()->create(['name' => '480', 'name_ru' => '480', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('480')]);
            $carBrand->children()->create(['name' => '740', 'name_ru' => '740', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('740')]);
            $carBrand->children()->create(['name' => '850', 'name_ru' => '850', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('850')]);
            $carBrand->children()->create(['name' => '940', 'name_ru' => '940', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('940')]);
            $carBrand->children()->create(['name' => '960', 'name_ru' => '960', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('960')]);
            $carBrand->children()->create(['name' => 'C30', 'name_ru' => 'C30', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C30')]);
            $carBrand->children()->create(['name' => 'C70', 'name_ru' => 'C70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C70')]);
            $carBrand->children()->create(['name' => 'S40', 'name_ru' => 'S40', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S40')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'S60', 'name_ru' => 'S60', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S60')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],])
            ;
            $carBrand->children()->create(['name' => 'S60 Cross Country', 'name_ru' => 'S60 Cross Country', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S60 Cross Country')]);
            $carBrand->children()->create(['name' => 'S70', 'name_ru' => 'S70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S70')]);
            $carBrand->children()->create(['name' => 'S80', 'name_ru' => 'S80', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S80')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2 (Рестайлинг 2)', 'name_ru' => '2 (Рестайлинг 2)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг 2)')],])
            ;
            $carBrand->children()->create(['name' => 'S90', 'name_ru' => 'S90', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('S90')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'V40', 'name_ru' => 'V40', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V40')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'V40 Cross Country', 'name_ru' => 'V40 Cross Country', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V40 Cross Country')]);
            $carBrand->children()->create(['name' => 'V50', 'name_ru' => 'V50', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V50')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'V70', 'name_ru' => 'V70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V70')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '3', 'name_ru' => '3', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '3 (Рестайлинг)', 'name_ru' => '3 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3 (Рестайлинг)')],])
            ;
            $carBrand->children()->create(['name' => 'V90 Cross Country', 'name_ru' => 'V90 Cross Country', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('V90 Cross Country')]);
            $carBrand->children()->create(['name' => 'XC40', 'name_ru' => 'XC40', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XC40')]);
            $carBrand->children()->create(['name' => 'XC60', 'name_ru' => 'XC60', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XC60')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'XC70', 'name_ru' => 'XC70', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XC70')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;
            $carBrand->children()->create(['name' => 'XC90', 'name_ru' => 'XC90', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('XC90')])->children()->createMany([['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],['name' => '1 (Рестайлинг)', 'name_ru' => '1 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1 (Рестайлинг)')],['name' => '2', 'name_ru' => '2', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2')],['name' => '2 (Рестайлинг)', 'name_ru' => '2 (Рестайлинг)', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2 (Рестайлинг)')],['name' => '1', 'name_ru' => '1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1')],])
            ;

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Vortex', 'name_ru' => 'Вортекс', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vortex')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Corda', 'name_ru' => 'Corda', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Corda')]);
            $carBrand->children()->create(['name' => 'Estina', 'name_ru' => 'Estina', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Estina')]);
            $carBrand->children()->create(['name' => 'Tingo', 'name_ru' => 'Tingo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tingo')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'W Motors', 'name_ru' => 'W Motors', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('W Motors')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Wanderer', 'name_ru' => 'Вандер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Wanderer')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Wartburg', 'name_ru' => 'Wartburg', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Wartburg')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Westfield', 'name_ru' => 'Westfield', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Westfield')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Wiesmann', 'name_ru' => 'Wiesmann', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Wiesmann')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Willys', 'name_ru' => 'Willys', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Willys')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Xin Kai', 'name_ru' => 'Синь Кай', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Xin Kai')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Zastava', 'name_ru' => 'Застава', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Zastava')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Zenos', 'name_ru' => 'Зенос', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Zenos')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Zenvo', 'name_ru' => 'Zenvo', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Zenvo')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Zibar', 'name_ru' => 'Zibar', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Zibar')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Zotye', 'name_ru' => 'Zotye', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Zotye')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'ZX', 'name_ru' => 'ZX', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ZX')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Автокам', 'name_ru' => 'Автокам', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Автокам')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'ГАЗ', 'name_ru' => 'ГАЗ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ГАЗ')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '12 ЗИМ', 'name_ru' => '12 ЗИМ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('12 ЗИМ')]);
            $carBrand->children()->create(['name' => '13 «Чайка»', 'name_ru' => '13 «Чайка»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('13 «Чайка»')]);
            $carBrand->children()->create(['name' => '14 «Чайка»', 'name_ru' => '14 «Чайка»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('14 «Чайка»')]);
            $carBrand->children()->create(['name' => '18', 'name_ru' => '18', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('18')]);
            $carBrand->children()->create(['name' => '21 «Волга»', 'name_ru' => '21 «Волга»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('21 «Волга»')]);
            $carBrand->children()->create(['name' => '22 «Волга»', 'name_ru' => '22 «Волга»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('22 «Волга»')]);
            $carBrand->children()->create(['name' => '2308 «Атаман»', 'name_ru' => '2308 «Атаман»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2308 «Атаман»')]);
            $carBrand->children()->create(['name' => '2330 «Тигр»', 'name_ru' => '2330 «Тигр»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2330 «Тигр»')]);
            $carBrand->children()->create(['name' => '24 «Волга»', 'name_ru' => '24 «Волга»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('24 «Волга»')]);
            $carBrand->children()->create(['name' => '3102 «Волга»', 'name_ru' => '3102 «Волга»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3102 «Волга»')]);
            $carBrand->children()->create(['name' => '31029 «Волга»', 'name_ru' => '31029 «Волга»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('31029 «Волга»')]);
            $carBrand->children()->create(['name' => '3103 «Волга»', 'name_ru' => '3103 «Волга»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3103 «Волга»')]);
            $carBrand->children()->create(['name' => '3105 «Волга»', 'name_ru' => '3105 «Волга»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3105 «Волга»')]);
            $carBrand->children()->create(['name' => '3110 «Волга»', 'name_ru' => '3110 «Волга»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3110 «Волга»')]);
            $carBrand->children()->create(['name' => '31105 «Волга»', 'name_ru' => '31105 «Волга»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('31105 «Волга»')]);
            $carBrand->children()->create(['name' => '3111 «Волга»', 'name_ru' => '3111 «Волга»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3111 «Волга»')]);
            $carBrand->children()->create(['name' => '46', 'name_ru' => '46', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('46')]);
            $carBrand->children()->create(['name' => '61', 'name_ru' => '61', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('61')]);
            $carBrand->children()->create(['name' => '64', 'name_ru' => '64', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('64')]);
            $carBrand->children()->create(['name' => '67', 'name_ru' => '67', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('67')]);
            $carBrand->children()->create(['name' => '69', 'name_ru' => '69', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('69')]);
            $carBrand->children()->create(['name' => 'Volga Siber', 'name_ru' => 'Volga Siber', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Volga Siber')]);
            $carBrand->children()->create(['name' => 'А', 'name_ru' => 'А', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('А')]);
            $carBrand->children()->create(['name' => 'М-20 «Победа»', 'name_ru' => 'М-20 «Победа»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('М-20 «Победа»')]);
            $carBrand->children()->create(['name' => 'М-72', 'name_ru' => 'М-72', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('М-72')]);
            $carBrand->children()->create(['name' => 'М1', 'name_ru' => 'М1', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('М1')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Ё-мобиль', 'name_ru' => 'Ё-мобиль', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ё-мобиль')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Ё-Кроссовер', 'name_ru' => 'Ё-Кроссовер', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Ё-Кроссовер')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'ЗАЗ', 'name_ru' => 'ЗАЗ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ЗАЗ')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '1102 «Таврия»', 'name_ru' => '1102 «Таврия»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1102 «Таврия»')]);
            $carBrand->children()->create(['name' => '1103 «Славута»', 'name_ru' => '1103 «Славута»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1103 «Славута»')]);
            $carBrand->children()->create(['name' => '1105 «Дана»', 'name_ru' => '1105 «Дана»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('1105 «Дана»')]);
            $carBrand->children()->create(['name' => '965', 'name_ru' => '965', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('965')]);
            $carBrand->children()->create(['name' => '966', 'name_ru' => '966', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('966')]);
            $carBrand->children()->create(['name' => '968', 'name_ru' => '968', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('968')]);
            $carBrand->children()->create(['name' => 'Chance', 'name_ru' => 'Chance', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Chance')]);
            $carBrand->children()->create(['name' => 'Forza', 'name_ru' => 'Forza', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Forza')]);
            $carBrand->children()->create(['name' => 'Lanos', 'name_ru' => 'Lanos', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Lanos')]);
            $carBrand->children()->create(['name' => 'Sens', 'name_ru' => 'Sens', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Sens')]);
            $carBrand->children()->create(['name' => 'Vida', 'name_ru' => 'Vida', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vida')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'ЗИЛ', 'name_ru' => 'ЗИЛ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ЗИЛ')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'ЗиС', 'name_ru' => 'ЗиС', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ЗиС')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'ИЖ', 'name_ru' => 'ИЖ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ИЖ')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '2125 «Комби»', 'name_ru' => '2125 «Комби»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2125 «Комби»')]);
            $carBrand->children()->create(['name' => '2126 «Ода»', 'name_ru' => '2126 «Ода»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2126 «Ода»')]);
            $carBrand->children()->create(['name' => '21261 «Фабула»', 'name_ru' => '21261 «Фабула»', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('21261 «Фабула»')]);
            $carBrand->children()->create(['name' => '2717', 'name_ru' => '2717', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2717')]);
            $carBrand->children()->create(['name' => 'Москвич-412', 'name_ru' => 'Москвич-412', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Москвич-412')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Канонир', 'name_ru' => 'Канонир', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Канонир')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Комбат', 'name_ru' => 'Комбат', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Комбат')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'ЛуАЗ', 'name_ru' => 'ЛуАЗ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ЛуАЗ')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'Москвич', 'name_ru' => 'Москвич', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Москвич')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '2136', 'name_ru' => '2136', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2136')]);
            $carBrand->children()->create(['name' => '2137', 'name_ru' => '2137', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2137')]);
            $carBrand->children()->create(['name' => '2138', 'name_ru' => '2138', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2138')]);
            $carBrand->children()->create(['name' => '2140', 'name_ru' => '2140', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2140')]);
            $carBrand->children()->create(['name' => '2141', 'name_ru' => '2141', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2141')]);
            $carBrand->children()->create(['name' => '2142', 'name_ru' => '2142', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('2142')]);
            $carBrand->children()->create(['name' => '400', 'name_ru' => '400', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('400')]);
            $carBrand->children()->create(['name' => '401', 'name_ru' => '401', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('401')]);
            $carBrand->children()->create(['name' => '402', 'name_ru' => '402', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('402')]);
            $carBrand->children()->create(['name' => '403', 'name_ru' => '403', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('403')]);
            $carBrand->children()->create(['name' => '407', 'name_ru' => '407', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('407')]);
            $carBrand->children()->create(['name' => '408', 'name_ru' => '408', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('408')]);
            $carBrand->children()->create(['name' => '410', 'name_ru' => '410', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('410')]);
            $carBrand->children()->create(['name' => '411', 'name_ru' => '411', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('411')]);
            $carBrand->children()->create(['name' => '412', 'name_ru' => '412', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('412')]);
            $carBrand->children()->create(['name' => '423', 'name_ru' => '423', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('423')]);
            $carBrand->children()->create(['name' => '424', 'name_ru' => '424', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('424')]);
            $carBrand->children()->create(['name' => '426', 'name_ru' => '426', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('426')]);
            $carBrand->children()->create(['name' => '427', 'name_ru' => '427', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('427')]);
            $carBrand->children()->create(['name' => 'Дуэт', 'name_ru' => 'Дуэт', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Дуэт')]);
            $carBrand->children()->create(['name' => 'Иван Калита', 'name_ru' => 'Иван Калита', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Иван Калита')]);
            $carBrand->children()->create(['name' => 'Князь Владимир', 'name_ru' => 'Князь Владимир', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Князь Владимир')]);
            $carBrand->children()->create(['name' => 'Святогор', 'name_ru' => 'Святогор', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Святогор')]);
            $carBrand->children()->create(['name' => 'Юрий Долгорукий', 'name_ru' => 'Юрий Долгорукий', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Юрий Долгорукий')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'СМЗ', 'name_ru' => 'СМЗ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('СМЗ')]);
            $carBrand->saveOrFail();
        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'ТагАЗ', 'name_ru' => 'ТагАЗ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('ТагАЗ')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => 'Aquila', 'name_ru' => 'Aquila', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Aquila')]);
            $carBrand->children()->create(['name' => 'C-30', 'name_ru' => 'C-30', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C-30')]);
            $carBrand->children()->create(['name' => 'C10', 'name_ru' => 'C10', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C10')]);
            $carBrand->children()->create(['name' => 'C190', 'name_ru' => 'C190', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('C190')]);
            $carBrand->children()->create(['name' => 'Road Partner', 'name_ru' => 'Road Partner', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Road Partner')]);
            $carBrand->children()->create(['name' => 'Tager', 'name_ru' => 'Tager', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Tager')]);
            $carBrand->children()->create(['name' => 'Vega', 'name_ru' => 'Vega', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Vega')]);

        });

        DB::transaction(function () {
            $carBrand = CarBrand::make(['type' => 'passenger', 'name' => 'УАЗ', 'name_ru' => 'УАЗ', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('УАЗ')]);
            $carBrand->saveOrFail();

            $carBrand->children()->create(['name' => '3151', 'name_ru' => '3151', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3151')]);
            $carBrand->children()->create(['name' => '3153', 'name_ru' => '3153', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3153')]);
            $carBrand->children()->create(['name' => '3159', 'name_ru' => '3159', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3159')]);
            $carBrand->children()->create(['name' => '3160', 'name_ru' => '3160', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3160')]);
            $carBrand->children()->create(['name' => '3162 Simbir', 'name_ru' => '3162 Simbir', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('3162 Simbir')]);
            $carBrand->children()->create(['name' => '469', 'name_ru' => '469', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('469')]);
            $carBrand->children()->create(['name' => 'Hunter', 'name_ru' => 'Hunter', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Hunter')]);
            $carBrand->children()->create(['name' => 'Patriot', 'name_ru' => 'Patriot', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Patriot')]);
            $carBrand->children()->create(['name' => 'Pickup', 'name_ru' => 'Pickup', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Pickup')]);
            $carBrand->children()->create(['name' => 'Астеро', 'name_ru' => 'Астеро', 'status' => 'active', 'author_id' => 1, 'slug' => Str::slug('Астеро')]);

        });



    }
}

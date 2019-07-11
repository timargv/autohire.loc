<?php


namespace App\UseCases\CarAdverts;


use App\Entity\Cars\Advert\Advert;
use App\Entity\Cars\Attribute;
use App\Entity\Categories\Car\CarBrand;
use App\Entity\Categories\Car\Year;
use App\Http\Requests\Adverts\CreateRequest;
use App\User;
use Illuminate\Support\Facades\DB;

class CarAdvertService
{


    public function create ($userId, CreateRequest $request) : Advert
    {


        /** @var User $user */
        $user = User::findOrFail($userId);

        /** @var CarBrand $carBrand */
        $carBrand = CarBrand::findOrFail($request['car_brand']);

        /** @var Year $carYear */
        $carYear = Year::findOrfail($request['car_year']);

        $attributes = Attribute::all();




        return DB::transaction(function () use ($request, $user, $carBrand, $carYear, $attributes) {

            /** @var Advert $carAdvert */
            $carAdvert = Advert::make([
                'description' => $request['description'],
                'price_per_day' => $request['price_per_day'],
                'address' => $request['address'],
                'type_rental' => $request['type_rental'],

            ]);

            $carAdvert->author()->associate($user);
            $carAdvert->carBrand()->associate($carBrand);
            $carAdvert->carYear()->associate($carYear);


            $carAdvert->saveOrFail();

            foreach ($attributes as $attribute) {
                $value = $request['attributes'][$attribute->id] ?? null;
                if (!empty($value)) {
                    $carAdvert->values()->create([
                        'car_attribute_id' => $attribute->id,
                        'value' => $value,
                    ]);
                }
            }

            return $carAdvert;
        });

    }

}
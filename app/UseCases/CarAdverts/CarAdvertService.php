<?php


namespace App\UseCases\CarAdverts;


use App\Entity\Cars\Advert\Advert;
use App\Entity\Cars\Advert\Photo;
use App\Entity\Cars\Attribute;
use App\Entity\Categories\Car\CarBrand;
use App\Entity\Categories\Car\Year;
use App\Http\Requests\Adverts\AttributesRequest;
use App\Http\Requests\Adverts\CreateRequest;
use App\Http\Requests\Adverts\PhotosRequest;
use App\Http\Requests\Adverts\UpdateRequest;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use function PHPSTORM_META\type;

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


    public function edit ($id, UpdateRequest $request)
    {
        $carAdvert = $this->getCarAdvert($id);

        /** @var CarBrand $carBrand */
        $carBrand = CarBrand::findOrFail($request['car_brand']);

        /** @var Year $carYear */
        $carYear = Year::findOrfail($request['car_year']);

        $carAdvert->update($request->only([
            'description',
            'price_per_day',
            'address',
            'type_rental',
        ]));

        $carAdvert->carBrand()->associate($carBrand);
        $carAdvert->carYear()->associate($carYear);

        $attributes = Attribute::all();

        DB::transaction(function () use ($request, $carAdvert, $attributes) {
            $carAdvert->values()->delete();

            foreach ($attributes as $attribute) {
                $value = $request['attributes'][$attribute->id] ?? null;
                if (!empty($value)) {
                    $carAdvert->values()->create([
                        'car_attribute_id' => $attribute->id,
                        'value' => $value,
                    ]);
                }
            }
            $carAdvert->update();
        });
    }

    public function editAttributes($id, AttributesRequest $request): void
    {
        $carAdvert = $this->getCarAdvert($id);

        $attributes = Attribute::all();

        DB::transaction(function () use ($request, $carAdvert, $attributes) {
            $carAdvert->values()->delete();

            foreach ($attributes as $attribute) {
                $value = $request['attributes'][$attribute->id] ?? null;
                if (!empty($value)) {
                    $carAdvert->values()->create([
                        'car_attribute_id' => $attribute->id,
                        'value' => $value,
                    ]);
                }
            }
            $carAdvert->update();
        });
    }

    public function addPhotos ($id, PhotosRequest $request) : void
    {
        $carAdvert = $this->getCarAdvert($id);

        DB::transaction(function () use ($request, $carAdvert) {
            $path = $this->pathPhoto()['original'];
            $thumbPath = $this->pathPhoto()['thumbnail'];
            $itemPath = $this->pathPhoto()['item'];
            $smallPath = $this->pathPhoto()['small'];
            $middlePath = $this->pathPhoto()['medium'];
            $largePath = $this->pathPhoto()['large'];

            $carAdvertPhotos = $carAdvert->photos()->count();


            foreach ($request['files'] as $key => $file) {

                $img = Image::make($file);

                if (!file_exists($path) && !file_exists($itemPath) && !file_exists($thumbPath) && !file_exists($smallPath) && !file_exists($middlePath) && !file_exists($largePath)) {
                    mkdir($path, 666, true);
                    mkdir($thumbPath, 666, true);
                    mkdir($itemPath, 666, true);
                    mkdir($smallPath, 666, true);
                    mkdir($middlePath, 666, true);
                    mkdir($largePath, 666, true);
                }

                $fileName = $carAdvert->id.'-'.uniqid().'-'. (new \DateTime)->getTimeStamp() . '.png';

                $img->save($path . $fileName);
                $img->fit(1000, 1000, function ($image) { $image->upsize(); })->save($largePath .$fileName, 100);
                $img->fit(450, 450, function ($image) { $image->upsize(); })->save($middlePath . $fileName, 100);
                $img->fit(150, 150, function ($image) { $image->upsize(); })->save($smallPath . $fileName, 100);
                $img->fit(320, 320, function ($image) { $image->upsize(); })->save($thumbPath . $fileName, 100);
                $img->fit(80, 80, function ($image) { $image->upsize(); })->save($itemPath . $fileName, 100);


                if ($key == 0) {
                    $carAdvert->photos()->create([
                        'file' => $fileName,
//                        'sort' => 1,
                        'type' =>  $carAdvertPhotos == 0 ? 'main' : '',
                    ]);
                } else {
                    $carAdvert->photos()->create([
                        'file' => $fileName,
//                        'sort' => 1,
                    ]);
                }


            }
            $carAdvert->update();

        });
    }

    public function deletePhoto ($id, $photoId)
    {

        $carAdvert = $this->getCarAdvert($id);
        $carPhoto = $this->getCarPhoto($photoId);

        $carAdvert->photos()->find($carPhoto->id)->delete();
        Storage::disk('public')->delete([
            $this->pathPhoto()['original'].$carPhoto->file,
            $this->pathPhoto()['thumbnail'].$carPhoto->file,
            $this->pathPhoto()['item'].$carPhoto->file,
            $this->pathPhoto()['small'].$carPhoto->file,
            $this->pathPhoto()['medium'].$carPhoto->file,
            $this->pathPhoto()['large'].$carPhoto->file,
        ]);

        $carAdvert->photos()->inRandomOrder()->take(1)->update([
            'type' => Photo::TYPE_MAIN_PHOTO,
        ]);


    }

    private function getCarAdvert($id) : Advert
    {
        return Advert::findOrFail($id);
    }

    private function getCarPhoto($id) : Photo
    {
        return Photo::findOrFail($id);
    }

    private function pathPhoto()
    {
        $paths = [
            'original' => public_path() . '\storage\car-adverts\original\\',
            'thumbnail' => public_path() . '\storage\car-adverts\thumbnail\\',
            'item' => public_path() . '\storage\car-adverts\item\\',
            'small' => public_path() . '\storage\car-adverts\small\\',
            'medium' => public_path() . '\storage\car-adverts\medium\\',
            'large' => public_path() . '\storage\car-adverts\large\\',
        ];
        return $paths;
    }

}
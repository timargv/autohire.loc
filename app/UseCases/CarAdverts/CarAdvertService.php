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
use App\Http\Requests\Adverts\RejectRequest;
use App\Http\Requests\Adverts\UpdateRequest;
use App\User;
use Carbon\Carbon;
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
        $carBrand = $request['car_brand'] ? CarBrand::findOrFail($request['car_brand']) : null ;
        $carModel = $request['car_model'] ? CarBrand::findOrFail($request['car_model']) : null ;
        $carSeries = $request['car_series'] ? CarBrand::findOrFail($request['car_series']) : null ;


        /** @var Year $carYear */
        $carYear = Year::findOrfail($request['car_year']);

        $attributes = Attribute::all();


        return DB::transaction(function () use ($request, $user, $carBrand, $carModel, $carSeries, $carYear, $attributes) {

            /** @var Advert $carAdvert */
            $carAdvert = Advert::make([
                'description' => $request['description'],
                'price_per_day' => $request['price_per_day'],
                'address' => $request['address'],
                'type_rental' => $request['type_rental'],
                'status' => Advert::STATUS_DRAFT,
            ]);

            $carAdvert->author()->associate($user);
            $carAdvert->carBrand()->associate($carBrand);
            $carAdvert->carModel()->associate($carModel);
            $carAdvert->carSerie()->associate($carSeries);
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
        $carBrand = $request['car_brand'] ? CarBrand::findOrFail($request['car_brand']) : null ;
        $carModel = $request['car_model'] ? CarBrand::findOrFail($request['car_model']) : null ;
        $carSeries = $request['car_series'] ? CarBrand::findOrFail($request['car_series']) : null ;

        /** @var Year $carYear */
        $carYear = Year::findOrfail($request['car_year']);

        $carAdvert->update($request->only([
            'description',
            'price_per_day',
            'address',
            'type_rental',
        ]));

        $carAdvert->carBrand()->associate($carBrand);
        $carAdvert->carModel()->associate($carModel);
        $carAdvert->carSerie()->associate($carSeries);
        $carAdvert->carYear()->associate($carYear);

        $attributes = Attribute::all();

        DB::transaction(function () use ($request, $carAdvert, $carBrand, $carModel, $carSeries, $attributes) {
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

    public function remove($id) {

        $carAdvert = $this->getCarAdvert($id);
        if ($carAdvert->photos) {
            $this->deletePhotos($carAdvert->id);
        }
        $carAdvert->delete();

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
                    mkdir($path, 0755, true);
                    mkdir($thumbPath, 0755, true);
                    mkdir($itemPath, 0755, true);
                    mkdir($smallPath, 0755, true);
                    mkdir($middlePath, 0755, true);
                    mkdir($largePath, 0755, true);
                }

                $fileName = $carAdvert->id.'-'.uniqid().'-'. (new \DateTime)->getTimeStamp() . '.png';

                $img->save($path . $fileName);
                $img->fit(1024, 768, function ($image) { $image->upsize(); })->save($largePath .$fileName, 100);
                $img->fit(800, 600, function ($image) { $image->upsize(); })->save($middlePath . $fileName, 100);
                $img->fit(512, 384, function ($image) { $image->upsize(); })->save($smallPath . $fileName, 100);
                $img->fit(320, 240, function ($image) { $image->upsize(); })->save($thumbPath . $fileName, 100);
                $img->fit(256, 192, function ($image) { $image->upsize(); })->save($itemPath . $fileName, 100);


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

    public function makePhotoMain ($carAdvertId, $photoId) : void
    {

        $carAdvert = $this->getCarAdvert($carAdvertId);
        $carPhoto = $this->getCarPhoto($photoId);

        $carAdvert->photos()->update(['type' => '']);
        $carAdvert->photos()->where('id', $carPhoto->id)->update(['type' => Photo::TYPE_MAIN_PHOTO]);

    }

    public function deletePhotos ($carAdvertId)
    {
        $carAdvert = $this->getCarAdvert($carAdvertId);

        foreach ($carAdvert->photos as $carPhoto) {
            $carPhoto = $this->getCarPhoto($carPhoto->id);
            Storage::disk('public')->delete([
                $this->pathPhotoDelete()['original'] . $carPhoto->file,
                $this->pathPhotoDelete()['thumbnail'] . $carPhoto->file,
                $this->pathPhotoDelete()['item'] . $carPhoto->file,
                $this->pathPhotoDelete()['small'] . $carPhoto->file,
                $this->pathPhotoDelete()['medium'] . $carPhoto->file,
                $this->pathPhotoDelete()['large'] . $carPhoto->file,

            ]);
            $carPhoto->delete();
        }

    }

    /*
     * Удалить одну фотографию в объявлении
     * */
    public function deletePhoto ($id, $photoId)
    {
        $carAdvert = $this->getCarAdvert($id);
        $carPhoto = $this->getCarPhoto($photoId);
        $this->deleteCarPhotoFile($carPhoto->file);
	    $carAdvert->photos()->find($carPhoto->id)->delete();

        $carAdvert->photos()->inRandomOrder()->take(1)->update([
            'type' => Photo::TYPE_MAIN_PHOTO,
        ]);
    }

    /*
     * Отправить объявление в модерацию
     * */
    public function sendToModeration($id): void
    {
        $carAdvert = $this->getCarAdvert($id);
        $carAdvert->sendToModeration();
    }

    public function moderate($id): void
    {
        $carAdvert = $this->getCarAdvert($id);
        $carAdvert->moderate(Carbon::now());
//        event(new ModerationPassed($advert));
    }

    public function reject($id, RejectRequest $request): void
    {
        $carAdvert = $this->getCarAdvert($id);
        $carAdvert->reject($request['reason']);
    }

    public function close($id): void
    {
        $carAdvert = $this->getCarAdvert($id);
        $carAdvert->close();
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
          'original' => public_path() . '/storage/car-adverts/original/',
          'thumbnail' => public_path() . '/storage/car-adverts/thumbnail/',
          'item' => public_path() . '/storage/car-adverts/item/',
          'small' => public_path() . '/storage/car-adverts/small/',
          'medium' => public_path() . '/storage/car-adverts/medium/',
          'large' => public_path() . '/storage/car-adverts/large/',
        ];
        return $paths;
    }

    private function pathPhotoDelete()
    {
        $paths = [
          'original' => '/car-adverts/original/',
          'thumbnail' => '/car-adverts/thumbnail/',
          'item' => '/car-adverts/item/',
          'small' => '/car-adverts/small/',
          'medium' => '/car-adverts/medium/',
          'large' => '/car-adverts/large/',
        ];
        return $paths;
    }


    public function deleteCarPhotoFile($fileName) {
        Storage::disk('public')->delete([
            $this->pathPhotoDelete()['original'].$fileName,
            $this->pathPhotoDelete()['thumbnail'].$fileName,
            $this->pathPhotoDelete()['item'].$fileName,
            $this->pathPhotoDelete()['small'].$fileName,
            $this->pathPhotoDelete()['medium'].$fileName,
            $this->pathPhotoDelete()['large'].$fileName,

        ]);
    }

}

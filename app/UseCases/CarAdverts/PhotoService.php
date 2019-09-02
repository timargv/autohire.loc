<?php


namespace App\UseCases\CarAdverts;


use App\Entity\Cars\Advert\Advert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PhotoService
{

    // https://source.unsplash.com/1600x900/?auto,bmw

    public function addPhoto($carAdvertId, $filePhoto)
    {

        /* @var Advert $carAdvert */
        $carAdvert = $this->getAdvert($carAdvertId);

        $fileName = null;

        return DB::transaction(function () use ($carAdvert, $filePhoto, $fileName) {
            $path = $this->pathPhoto()['original'];
            $thumbPath = $this->pathPhoto()['thumbnail'];
            $itemPath = $this->pathPhoto()['item'];
            $smallPath = $this->pathPhoto()['small'];
            $middlePath = $this->pathPhoto()['medium'];
            $largePath = $this->pathPhoto()['large'];

            $carAdvertPhotos = $carAdvert->photos()->count();


            foreach ($filePhoto as $key => $file) {

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
            return $fileName;

        });

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


    private function getAdvert($id)
    {
        return Advert::findOrFail($id);
    }

}
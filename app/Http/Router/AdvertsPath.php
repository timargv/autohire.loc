<?php


namespace App\Http\Router;

use App\Entity\Categories\Car\CarBrand;

use Illuminate\Contracts\Routing\UrlRoutable;
use Illuminate\Support\Facades\Cache;

class AdvertsPath implements UrlRoutable
{

    /**
     * @var CarBrand
     * */
    public $carBrand;

    public function withCarAdvert(?CarBrand $carBrand): self
    {
        $clone = clone $this;
        $clone->carBrand = $carBrand;
        return $clone;
    }

    public function getRouteKey()
    {
        if (!$this->carBrand) {
            throw new \BadMethodCallException('Empty page.');
        }

        return Cache::tags(CarBrand::class)->rememberForever('car_brand_path_' . $this->carBrand->id, function () {
            return $this->carBrand->getPath();
        });
    }

    public function getRouteKeyName(): string
    {
        return 'adverts_path';
    }

    public function resolveRouteBinding($value)
    {
        $chunks = explode('/', $value);

        /** @var CarBrand|null $carBrand */
        $carBrand = null;
        do {
            $slug = reset($chunks);
            if ($slug && $next = CarBrand::where('slug', $slug)->where('parent_id', $carBrand ? $carBrand->id : null)->first()) {
                $carBrand = $next;
                array_shift($chunks);
            }
        } while (!empty($slug) && !empty($next));


        if (!empty($chunks)) {
            abort(404);
        }

        return $this
            ->withCarAdvert($carBrand);
    }

}
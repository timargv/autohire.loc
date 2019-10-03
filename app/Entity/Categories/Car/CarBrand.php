<?php

namespace App\Entity\Categories\Car;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Kalnoy\Nestedset\NodeTrait;

/**
 * @property int $id
 * @property string $name
 * @property string $name_ru
 * @property string $status
 * @property string $slug
 * @property int|null $parent_id
 * @property CarBrand $parent
 * @property CarBrand[] $children
 *
 * @method Builder roots()
 */

class CarBrand extends Model
{

    use NodeTrait;

    protected $table = 'car_brands';
    protected $fillable = ['name', 'name_ru', 'status', 'slug', 'parent_id', 'author_id'];


    //-------------------
//    public function products () {
//        return $this->belongsToMany(Advert::class,'car_id','id');
//    }

    public function getPath(): string
    {
        return implode('/', array_merge($this->ancestors()->defaultOrder()->pluck('slug')->toArray(), [$this->slug]));
//        return ($this->parent ? $this->parent->getPath() . '/' : '') . $this->slug;
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function depthCarBrand ($id) {
        return self::withDepth()->find($id);
    }
}

<?php

namespace App\Entity\Categories\Car;

use App\Entity\Cars\Advert\Advert;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;


class CarBrand extends Model
{

    use NodeTrait;

    protected $table = 'car_brands';
    protected $fillable = ['name', 'name_ru', 'status', 'slug', 'parent_id', 'author_id'];


    //-------------------
//    public function products () {
//        return $this->belongsToMany(Advert::class,'car_id','id');
//    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }


    public function depthCarBrand ($id) {
        return self::withDepth()->find($id);
    }
}

<?php

namespace App\Entity\Categories\Car;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class CarBrand extends Model
{

    use NodeTrait;

    protected $table = 'car_brands';
    protected $fillable = ['name', 'name_ru', 'status', 'slug', 'parent_id', 'author_id'];
}

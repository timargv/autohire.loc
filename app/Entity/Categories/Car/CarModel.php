<?php

namespace App\Entity\Categories\Car;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class CarModel extends Model
{

    use NodeTrait;

    protected $table = 'car_models';
    protected $fillable = ['name', 'name_ru', 'status', 'slug', 'parent_id', 'author_id'];
}

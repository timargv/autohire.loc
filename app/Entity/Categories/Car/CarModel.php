<?php

namespace App\Entity\Categories\Car;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{

    protected $table = 'car_models';
    protected $fillable = ['name', 'name_ru', 'status', 'slug', 'parent_id', 'author_id'];
}

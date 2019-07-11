<?php

namespace App\Entity\Categories\Car;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * @property string name
 * @property string name_ru
 * @property string status
 * @property string slug
 */
class CarBrand extends Model
{

    use NodeTrait;

    protected $table = 'car_brands';
    protected $fillable = ['name', 'name_ru', 'status', 'slug', 'parent_id', 'author_id'];
}

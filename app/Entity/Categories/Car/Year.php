<?php

namespace App\Entity\Categories\Car;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Year extends Model
{

    use NodeTrait;

    protected $table = 'car_years';
    protected $fillable = ['name', 'status', 'slug', 'parent_id', 'author_id'];

}

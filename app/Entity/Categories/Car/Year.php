<?php

namespace App\Entity\Categories\Car;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{

    protected $table = 'car_years';
    protected $fillable = ['name', 'status', 'slug', 'parent_id', 'author_id'];

}

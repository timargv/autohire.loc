<?php

namespace App\Entity\Cars\Advert;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    protected $table = 'car_advert_values';
    protected $fillable = ['car_advert_id', 'car_attribute_id', 'value'];


    public $timestamps = false;
}

<?php

namespace App\Entity\Cars\Advert;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'car_advert_photos';


    protected $fillable = ['file', 'car_advert_id'];
    public $timestamps = false;

}

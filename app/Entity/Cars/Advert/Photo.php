<?php

namespace App\Entity\Cars\Advert;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    public const TYPE_MAIN_PHOTO = 'main';

    protected $table = 'car_advert_photos';


    protected $fillable = ['file', 'car_advert_id', 'type'];
    public $timestamps = false;

}

<?php

namespace App\Entity\Cars\Advert;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string file
 */
class Photo extends Model
{

    public const TYPE_MAIN_PHOTO = 'main';

    protected $table = 'car_advert_photos';


    protected $fillable = ['file', 'type'];
    public $timestamps = false;

}

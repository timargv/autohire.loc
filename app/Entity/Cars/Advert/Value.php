<?php

namespace App\Entity\Cars\Advert;

use App\Entity\Cars\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer car_advert_id
 * @property integer car_attribute_id
 * @property string value
 */
class Value extends Model
{
    protected $table = 'car_advert_values';
    protected $fillable = ['car_advert_id', 'car_attribute_id', 'value'];

    public $timestamps = false;

    public function carAdvert () {
        return $this->belongsTo(Advert::class);
    }

    public function getCarAttribute ($id) {
        return Attribute::findOrFail($id);
    }

}

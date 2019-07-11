<?php

namespace App\Entity\Cars;

use App\Entity\Cars\Advert\Value;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $type
 * @property boolean $required
 * @property array $variants
 * @property integer $sort
 */

class Attribute extends Model
{
    public const TYPE_STRING = 'string';
    public const TYPE_INTEGER = 'integer';
    public const TYPE_FLOAT = 'float';


    protected $table = 'car_attributes';

    public $timestamps = false;

    protected $fillable = ['name', 'type', 'required', 'variants', 'is_visible', 'status', 'sort'];

    protected $casts = [
        'variants' => 'array',
    ];

    public static function typesList(): array
    {
        return [
            self::TYPE_STRING => __('fillable.String'),
            self::TYPE_INTEGER => __('fillable.Integer'),
            self::TYPE_FLOAT => __('fillable.Float'),
        ];
    }

    public function isString(): bool
    {
        return $this->type === self::TYPE_STRING;
    }

    public function isInteger(): bool
    {
        return $this->type === self::TYPE_INTEGER;
    }

    public function isFloat(): bool
    {
        return $this->type === self::TYPE_FLOAT;
    }

    public function isNumber(): bool
    {
        return $this->isInteger() || $this->isFloat();
    }

    public function isSelect(): bool
    {
        return \count($this->variants) > 0;
    }

    /**
     * @return Attribute[]
     */
    public static  function allAttributes() : array
    {
        return self::orderBy('sort')->getModels();
    }


    public function values() {
        return $this->belongsTo(Value::class);
    }
}

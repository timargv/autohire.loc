<?php

namespace App\Entity\Cars\Advert;

use App\Entity\Categories\Car\CarBrand;
use App\Entity\Categories\Car\Year;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $author_id
 * @property int $category_id
 * @property string $description
 * @property int $price_per_day
 * @property string $address
 * @property string $status
 * @property string $type_rental
 * @property string $reject_reason
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property User $user
 * @property CarBrand $carBrand
 * @property Value[] $values
 * @property Photo[] $photos
 * @method Builder active()
 * @method Builder forUser(User $user)
 */
class Advert extends Model
{

    public const TYPE_RENTAL_DAILY = 'daily';
    public const TYPE_RENTAL_LONG_TERM = 'long_term';
    public const TYPE_RENTAL_FOR_REDEMPTION = 'for_redemption';

    public const STATUS_DRAFT = 'draft';
    public const STATUS_MODERATION = 'moderation';
    public const STATUS_ACTIVE = 'active';
    public const STATUS_CLOSED = 'closed';


    protected $table = 'car_adverts';
    protected $guarded = ['id'];



    //  Массив из типа аренды авто
    public static function typeRental () : array
    {
        return [
            self::TYPE_RENTAL_DAILY => __('fillable.Daily'),
            self::TYPE_RENTAL_LONG_TERM => __('fillable.LongTerm'),
            self::TYPE_RENTAL_FOR_REDEMPTION => __('fillable.ForRedemption'),
        ];
    }

    //  Массив статуса
    public static function statusesList(): array
    {
        return [
            self::STATUS_DRAFT => __(''),
            self::STATUS_MODERATION => 'On Moderation',
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_CLOSED => 'Closed',
        ];
    }


    // Получить значание атрибута
    public function getValue($id)
    {
        foreach ($this->values as $value) {
            if ($value->attribute_id === $id) {
                return $value->value;
            }
        }
        return null;
    }


    //    =============================

    public function isDraft(): bool
    {
        return $this->status === self::STATUS_DRAFT;
    }

    public function isOnModeration(): bool
    {
        return $this->status === self::STATUS_MODERATION;
    }

    public function isActive(): bool
    {
        return $this->status === self::STATUS_ACTIVE;
    }

    public function isClosed(): bool
    {
        return $this->status === self::STATUS_CLOSED;
    }

    //    =============================


    //    Отнощения
    //    =============================

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function carBrand()
    {
        return $this->belongsTo(CarBrand::class, 'car_brand_id', 'id');
    }

    public function carYear()
    {
        return $this->belongsTo(Year::class, 'car_years_id', 'id');
    }

    public function values()
    {
        return $this->hasMany(Value::class, 'car_advert_id', 'id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'advert_id', 'id');
    }



    // Заготовки для запросов

    public function scopeActive(Builder $query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    public function scopeForUser(Builder $query, User $user)
    {
        return $query->where('author_id', $user->id);
    }

    public function scopeForCategory(Builder $query, CarBrand $carBrand)
    {
        return $query->whereIn('car_brand_id', array_merge(
            [$carBrand->id],
            $carBrand->descendants()->pluck('id')->toArray()
        ));
    }

}

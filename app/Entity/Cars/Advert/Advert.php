<?php

namespace App\Entity\Cars\Advert;

use App\Entity\Cars\Attribute;
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

    protected $casts = [
        'published_at' => 'datetime',
        'expires_at' => 'datetime',
    ];

    protected $with = ['photos', 'carBrand', 'carYear', 'values', 'attributes'];


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
            self::STATUS_DRAFT => __('Черновик'),
            self::STATUS_MODERATION => __('На Модерации'),
            self::STATUS_ACTIVE => __('Актуально'),
            self::STATUS_CLOSED => __('Снято с аренды'),
        ];
    }


    // Получить значание атрибута
    public function getValue($id)
    {
        foreach ($this->values as $value) {
            if ($value->car_attribute_id === $id) {
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
        return $this->belongsTo(Year::class, 'car_year_id', 'id');
    }

    public function values()
    {
        return $this->hasMany(Value::class, 'car_advert_id', 'id');
    }

    public function attributes ()
    {
        return $this->belongsToMany(Attribute::class, 'car_advert_values', 'car_advert_id', 'car_attribute_id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'car_advert_id', 'id');
    }

    //    =============================


    //    Функции для объявлении
    //    =============================


    // Статус черновик с объяснением от модератора или администратора
    public function reject($reason): void
    {
        $this->update([
            'status' => self::STATUS_DRAFT,
            'reject_reason' => $reason,
        ]);
    }

    public function sendToModeration(): void
    {
        if (!$this->isDraft() && !$this->isClosed()) {
            throw new \DomainException('Объявление не черновик.');
        }
        if (!\count($this->photos)) {
            throw new \DomainException('Загрузите фотографию.');
        }
        $this->update([
            'status' => self::STATUS_MODERATION,
        ]);
    }

    public function moderate(Carbon $date): void
    {
        if ($this->status !== self::STATUS_MODERATION) {
            throw new \DomainException('Advert is not sent to moderation.');
        }
        $this->update([
            'published_at' => $date,
            'expires_at' => $date->copy()->addDays(15),
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    public function close(): void
    {
        $this->update([
            'status' => self::STATUS_CLOSED,
        ]);
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



    // Получить основную картинку
    public function getMainPhoto ($photos)
    {
        $photoMain = 'https://vk.com/images/dquestion_app_widget_1_b.png';

        foreach ($photos as $photo) {
            if ($photo->type === Photo::TYPE_MAIN_PHOTO) {
                $photoMain = $photo->file;
            }
        }

        return $photoMain;
    }

    // Получить основную картинку
    public function getMainPhotoModel ($photos)
    {
        $photoMain = 'https://vk.com/images/dquestion_app_widget_1_b.png';

        foreach ($photos as $photo) {
            if ($photo->type === Photo::TYPE_MAIN_PHOTO) {
                $photoMain = $photo;
            }
        }

        return $photoMain;
    }


    // Получить тип аренды
    public function getTypeRental ()
    {
        if (array_key_exists($this->type_rental, self::typeRental())) {
            return self::typeRental()[$this->type_rental];
        } return;
    }


    public function getCarAttributeModelValue ($values)
    {
        if ($value = $values->where('car_attribute_id', 1)->first()){
            return $value['value'];
        }
    }

    public function isCarAttributeModel ($value): bool
    {
        return $value->car_attribute_id === 1;
    }


    public function photosCount ()
    {
        $maxPhotos = 30;
        $countPhotos = count($this->photos()->get());

        if ($countPhotos <= $maxPhotos && $this->photos()->count() > 0) {
            return $maxPhotos - $countPhotos;
        } return $maxPhotos;
    }

}

<?php

namespace App\Entity\Cars\Advert;

use App\Entity\Cars\Advert\Dialog\Dialog;
use App\Entity\Cars\Attribute;
use App\Entity\Categories\Car\CarBrand;
use App\Entity\Categories\Car\Year;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

/**
 * @property int $id
 * @property int $author_id
 * @property int $car_brand_id
 * @property int $car_model_id
 * @property int $car_serie_id
 * @property int $car_year_id
 * @property string $description
 * @property int $price_per_day
 * @property string $address
 * @property string $status
 * @property string $type_rental
 * @property string $reject_reason
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $published_at
 * @property Carbon $expires_at
 *
 * @property User $author
 * @property CarBrand $carBrand
 * @property CarBrand $carModel
 * @property CarBrand $carSerie
 * @property CarBrand $carYear
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
        'published_at' => 'datetime',   // опубликовано
        'expires_at' => 'datetime',     // истекает
    ];

    protected $with = ['photos', 'author', 'carBrand', 'carModel', 'carSerie', 'carYear', 'values', 'attributes'];


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
        return $this->belongsTo(User::class, 'author_id', 'id') ;
    }

    public function carBrand()
    {
        return $this->belongsTo(CarBrand::class, 'car_brand_id', 'id');
    }

    public function carModel()
    {
        return $this->belongsTo(CarBrand::class, 'car_model_id', 'id');
    }

    public function carSerie()
    {
        return $this->belongsTo(CarBrand::class, 'car_serie_id', 'id');
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

    public function favorites() {
        return $this->belongsToMany(User::class, 'car_advert_favorites', 'car_advert_id', 'user_id');
    }

    public function dialogs()
    {
        return $this->hasMany(Dialog::class, 'car_advert_id', 'id');
    }


    //    =============================


    //    Функции для объявлении
    //    =============================

    /*
     * Сменить статус объявления на модерации
     * */
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

    /*
     * Сменить статус объявление: прошел модерацию и активирован на 15 дней
     * */
    public function moderate(Carbon $date): void
    {
        if ($this->status !== self::STATUS_MODERATION) {
            throw new \DomainException('Объявление не отправлено на модерацию.');
        }
        $this->update([
            'published_at' => $date,
            'expires_at' => $date->copy()->addDays(15),
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /*
     * Объявление не принято с объяснением от модератора или администратора переведен в статус черновик
     */
    public function reject($reason): void
    {
        $this->update([
            'status' => self::STATUS_DRAFT,
            'reject_reason' => $reason,
        ]);
    }

    /*
     * Закрыть объявление по истечении времени
     * */
    public function expire(): void
    {
        $this->update([
            'status' => self::STATUS_CLOSED,
        ]);
    }

    /*
     * Статус объявления: сменить на черновик
     * */
    public function close(): void
    {
        $this->update([
            'status' => self::STATUS_CLOSED,
        ]);
    }


    /*
     * Статус объявления: сменить на закрыть
     * */
    public function draft(): void
    {
        $this->update([
            'status' => self::STATUS_DRAFT,
        ]);
    }


    // Заготовки для запросов
    public function scopeActive(Builder $query)
    {
        return $query->where('status', '=', self::STATUS_ACTIVE);
    }

    public function scopeForUser(Builder $query, User $user)
    {
        return $query->where('author_id', $user->id);
    }

    public function scopeForCarBrand(Builder $query, CarBrand $carBrand)
    {
        return $query->where('car_brand_id', $carBrand->id);
    }

    public function scopeForCarModel(Builder $query, CarBrand $carModel)
    {
        return $query->where('car_model_id', $carModel->id);
    }

    public function scopeForCarSeries(Builder $query, CarBrand $carSeries)
    {
        return $query->where('car_serie_id', $carSeries->id);
    }

    public function scopeFavoredByUser(Builder $query, User $user) {
        return $query->whereHas('favorites', function (Builder $query) use ($user) {
            $query->where('user_id', $user->id);
        });
    }


    //=========================== Dialogs functions ===========================

    /**
     * Получить или создать диалог от -> клиента[fromId]
     * если нашел или создал то написать сообщение от себя(клиента)[fromId]
     */
    // Получи или создай новый диалог
    // Напиши клиентское сообщение
    public function writeClientMessage(int $fromId, string $message): void
    {
        $this->getOrCreateDialogWith($fromId)->writeMessageByClient($fromId, $message);
    }

    // Получить свои диалоги с сообщениями - c клиентом ($toId = кому из пользователей)
    // Напиши пользовательское сообщение
    // получить диалог с сообщениями от клиента
    public function writeOwnerMessage(int $toId, string $message): void
    {
        $this->getDialogWith($toId)->writeMessageByOwner($this->author_id, $message);
    }

    // Прочитай сообщения клиента
    public function readClientMessages(int $userId): void
    {
        $this->getDialogWith($userId)->readByClient();
    }

    // Прочитай мои сообщения
    public function readOwnerMessages(int $userId): void
    {
        $this->getDialogWith($userId)->readByOwner();
    }

    // Получить диалог
    private function getDialogWith(int $userId): Dialog
    {
        $dialog = $this->dialogs()->where([
            'user_id' => $this->author_id,
            'client_id' => $userId
        ])->first();

        if (!$dialog) {
            throw new \DomainException('Диалог не найден');
        }
        return $dialog;
    }

    // Получить или создать диалог
    private function getOrCreateDialogWith(int $userId): Dialog
    {
        if ($userId === $this->author_id) {
            throw new \DomainException('Вы не можете отправить сообщение самому себе');
        }
        return $this->dialogs()->firstOrCreate([
            'user_id' => $this->author_id,
            'client_id' => $userId
        ]);
    }

    //==================================



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


    /*
     * Сколько фотографий еще можно добавить
     * */
    public function photosCount ()
    {
        $maxPhotos = 30;
        $countPhotos = count($this->photos()->get());
        if ($countPhotos <= $maxPhotos && $countPhotos > 0) {
            return $maxPhotos - $countPhotos;
        } return $maxPhotos;
    }


}



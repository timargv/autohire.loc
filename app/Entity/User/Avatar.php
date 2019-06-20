<?php

namespace App\Entity\User;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Avatar extends Model
{
    public const STATUS_NOT_MATCH = 'not_match';
    public const STATUS_MODERATION = 'moderation';
    public const STATUS_ACTIVE = 'active';

    protected $fillable = ['user_id', 'image', 'status'];

    protected $table = 'user_avatar';


    // ------- Получить пользователя, владеющего данным аватором.
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    // ------- Список статуса
    public static function statusAvatar(): array
    {
        return [
            self::STATUS_NOT_MATCH => __('fillable.NotMatch'),
            self::STATUS_MODERATION => __('fillable.Moderation'),
            self::STATUS_ACTIVE => __('fillable.Active'),
        ];
    }

    public function isNotMatch() {
        return $this->status === self::STATUS_NOT_MATCH;
    }

    public function isModeration() {
        return $this->status === self::STATUS_MODERATION;
    }

    public function isActive() {
        return $this->status === self::STATUS_ACTIVE;
    }

    public static function countModerationAvatars () {
        return Cache::remember('countModerationPhotos', 20, function () {
            return static::query()->where('status', self::STATUS_MODERATION)->count();
        });
    }
}

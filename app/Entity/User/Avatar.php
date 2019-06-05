<?php

namespace App\Entity\User;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    public const STATUS_NOT_MATCH = 'not_match';
    public const STATUS_MODERATION = 'moderation';
    public const STATUS_ACTIVE = 'active';

    protected $fillable = ['user_id', 'avatar', 'status'];

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
            self::STATUS_NOT_MATCH => 'Не соответсвует правилам сайта',
            self::STATUS_MODERATION => 'Moderation',
            self::STATUS_ACTIVE => 'Active',
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
}

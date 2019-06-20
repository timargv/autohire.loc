<?php

namespace App\Entity\Tenant;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

/**
 * @property mixed status
 */
class BlackListPhoto extends Model
{

    public const STATUS_NOT_MATCH = 'not_match';
    public const STATUS_MODERATION = 'moderation';
    public const STATUS_ACTIVE = 'active';

    public const STATUS_MAIN = 1;

    //
    protected $table = 'black_list_tenant_photos';
    protected $fillable = ['photo', 'is_main', 'black_list_tenant_id', 'author_id', 'status'];


    // --------- Block List Tenant
    public function blackList () {
        return $this->belongsTo(BlackList::class, 'black_list_tenant_id');
    }

    // --------- Author Black List
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }


    // ------- Список статуса
    public static function statusPhoto(): array
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

    public function isMain() : bool
    {
        return $this->is_main === self::STATUS_MAIN;
    }


    // Кешированое количество не проверенных фотографий к арендателю из черного списка
    public static function countModerationPhotos () {
        return Cache::remember('countModerationPhotos', 20, function () {
            return static::query()->where('status', self::STATUS_MODERATION)->count();
        });
    }
}

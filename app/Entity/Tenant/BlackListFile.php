<?php

namespace App\Entity\Tenant;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed type
 */
class BlackListFile extends Model
{

    public const STATUS_NOT_MATCH = 'not_match';
    public const STATUS_MODERATION = 'moderation';
    public const STATUS_ACTIVE = 'active';

    public const TYPE_PASSPORT = 'passport';
    public const TYPE_DRIVER_LICENSE = 'driver_license';
    public const TYPE_OTHER_DOCUMENTS = 'other_documents';



    //
    protected $table = 'black_list_tenant_files';
    protected $fillable = ['file', 'is_visible', 'type', 'black_list_tenant_id', 'author_id', 'status'];

    protected $casts = [
        'is_visible' => 'boolean',
    ];


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
    public static function statusFile(): array
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



    // ------- Type File - Тип Файла
    public static function typeFile (): array
    {
        return [
            self::TYPE_PASSPORT => __('fillable.Passport'),
            self::TYPE_DRIVER_LICENSE => __('fillable.DriverLicense'),
            self::TYPE_OTHER_DOCUMENTS => __('fillable.OtherDocuments'),
        ];
    }

    public function isPassport() {
        return $this->type === self::TYPE_PASSPORT;
    }

    public function isDriverLicense() {
        return $this->type === self::TYPE_DRIVER_LICENSE;
    }

    public function isOtherDocument() {
        return $this->type === self::TYPE_OTHER_DOCUMENTS;
    }

}

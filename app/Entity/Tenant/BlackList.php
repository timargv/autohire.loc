<?php

namespace App\Entity\Tenant;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed author_id
 * @property mixed id
 */
class BlackList extends Model
{
    public const STATUS_NOT_MATCH = 'not_match';
    public const STATUS_MODERATION = 'moderation';
    public const STATUS_ACTIVE = 'active';

    //
    protected $table = 'black_list_tenants';
    protected $fillable = ['name', 'city', 'author_id', 'status'];

    protected $casts = [
        'is_visible' => 'boolean',
    ];


    // --------- Author Black List
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }


    // --------- Comments Black List
    public function comments()
    {
        return $this->hasMany(BlackListComment::class, 'black_list_tenant_id', 'id')->with('author');
    }


    // --------- Photos Black List
    public function photos()
    {
        return $this->hasMany(BlackListPhoto::class, 'black_list_tenant_id', 'id');
    }


    // --------- File Black List
    public function files()
    {
        return $this->hasMany(BlackListFile::class, 'black_list_tenant_id', 'id');
    }


    // ------- Список статуса
    public static function statusTenant(): array
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
}

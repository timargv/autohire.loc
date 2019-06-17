<?php

namespace App\Entity\Tenant;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed author_id
 */
class BlackListComment extends Model
{

    public const STATUS_NOT_MATCH = 'not_match';
    public const STATUS_MODERATION = 'moderation';
    public const STATUS_ACTIVE = 'active';

    //
    protected $table = 'black_list_tenant_comments';
    protected $fillable = ['comment', 'black_list_tenant_id', 'author_id', 'status'];


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
    public static function statusComment(): array
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

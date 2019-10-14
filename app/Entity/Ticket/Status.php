<?php

namespace App\Entity\Ticket;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property int $user_id
 * @property int $ticket_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $status
*/

class Status extends Model
{

    public const OPEN = 'open';
    public const CLOSED = 'closed';
    public const APPROVED = 'approved';

    protected $table = 'ticket_statuses';

    protected $guarded = ['id'];

    public static function statusesList(): array
    {
        return [
            self::OPEN => __('Открытый'),
            self::CLOSED => __('Закрыто'),
            self::APPROVED => __('Одобренный'),
        ];
    }

    public function isOpen(): bool
    {
        return $this->status === self::OPEN;
    }

    public function isClosed():bool
    {
        return $this->status === self::CLOSED;
    }

    public function isApproved():bool
    {
        return $this->status === self::APPROVED;
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

<?php

namespace App\Entity\Ticket;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Self_;

/**
 * @property int $id
 * @property int $user_id
 * @property int $ticket_id
 * @property string $message
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @return bool isMessageOwn()
*/

class Message extends Model
{

    protected $table = 'ticket_messages';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function isMessageOwn(): bool
    {
        return $this->user_id === Auth::id();
    }
}

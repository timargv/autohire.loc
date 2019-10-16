<?php

namespace App\Entity\Cars\Advert\Dialog;

use App\Entity\Cars\Advert\Advert;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * @property int $id
 * @property int $car_advert_id
 * @property int $user_id
 * @property int $client_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int $user_new_messages
 * @property int $client_new_messages
 * @method Builder forUser(User $user)
 */
class Dialog extends Model
{

    protected $table = 'car_advert_dialogs';
    protected $guarded = ['id'];

//    protected $with = ['client', 'messages'];

    public function writeMessageByOwner(int $userId, string $message): void
    {
        $this->messages()->create([
            'user_id' => $userId,
            'message' => $message
        ]);
        $this->client_new_messages++;
        $this->save();
    }

    public function writeMessageByClient(int $userId, string $message): void
    {
        $this->messages()->create([
            'user_id' => $userId,
            'message' => $message,
        ]);
        $this->user_new_messages++;
        $this->save();
    }

    public function readByOwner(): void
    {
        $this->update(['user_new_messages' => 0]);
    }

    public function readByClient(): void
    {
        $this->update(['client_new_messages' => 0]);
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id', 'id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'dialog_id', 'id');
    }

    public function carAdvert()
    {
        return $this->belongsTo(Advert::class, 'car_advert_id', 'id');
    }

    public function scopeForUser(Builder $query, User $user)
    {
        return $query->where('user_id', $user->id)->orWhere('client_id', $user->id);
    }

    public function getNewMessagesCount()
    {
        if ($this->client_id === Auth::id()) {
            return $this->client_new_messages;
        } else {
            return $this->user_new_messages;
        }
    }
}

<?php

namespace App\Entity\Cars\Advert\Dialog;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * $property int $id
 * $property Carbon $created_at
 * $property Carbon $updated_at
 * $property int $user_id
 * $property int $dialog_id
 * $property string $message
 */
class Message extends Model
{
    protected $table = 'car_advert_dialog_messages';

    protected $guarded = ['id'];

    protected $with = ['user'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

<?php

namespace App\Entity\User;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'user_list_groups';

    protected $fillable = ['name', 'author_id', 'slug'];

    public function users() {
        return $this->belongsToMany(
            User::class,
            'user_groups',
            'group_id',
            'user_id'
        );
    }
}

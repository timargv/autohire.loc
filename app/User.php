<?php

namespace App;


use App\Entity\User\Avatar;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\Auth\ResetPasswordNotification;

use Illuminate\Support\Str;

/**
 * @property mixed $cart
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $email_verified_at
 * @property \Carbon\Carbon $created_at
 * @property string $phone_verify_token
 * @property mixed id
 * @property mixed name
 */
class User extends Authenticatable
{
    use Notifiable;

    public const STATUS_NOT_MATCH = 'not_match';
    public const STATUS_MODERATION = 'moderation';

    public const STATUS_WAIT = 'wait';
    public const STATUS_ACTIVE = 'active';

    public const ROLE_USER = 'user';
    public const ROLE_MODERATOR = 'moderator';
    public const ROLE_ADMIN = 'admin';


    protected $fillable = [
        'name',
        'forename',
        'surname',
        'patronymic',
        'email',
        'password',
        'status',
        'role',
        'verify_token',
        'email_verified_at',

        'phone',
        'phone_auth',
        'phone_verify_token',

        'city',
        'about',

    ];


    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $casts = [
        'phone_verified' => 'boolean',
        'phone_verify_token_expire' => 'datetime',
        'phone_auth' => 'boolean',
    ];

    // ---------- Аватар пользователя
    public function avatar()
    {
        return $this->hasOne(Avatar::class, 'user_id');
    }

    public function favorites()
    {
        return $this->belongsToMany(Advert::class, 'advert_favorites', 'user_id', 'advert_id');
    }


    public static function rolesList(): array
    {
        return [
            self::ROLE_USER => __('fillable.User'),
            self::ROLE_MODERATOR => __('fillable.Moderator'),
            self::ROLE_ADMIN => __('fillable.Administrator'),
        ];
    }

    public static function statusList(): array
    {
        return [
            self::STATUS_WAIT => __('fillable.Disabled'),
            self::STATUS_ACTIVE => __('fillable.Active'),
        ];
    }

    // ------- Список статуса
    public static function statusAvatar(): array
    {
        return [
            self::STATUS_NOT_MATCH => __('fillable.NotMatch'),
            self::STATUS_MODERATION => __('fillable.Moderation'),
            self::STATUS_ACTIVE => __('fillable.Active'),
        ];
    }

    public static function register(string $name, string $email, string $password): self
    {
        return static::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'verify_token' => Str::uuid(),
            'remember_token' => Str::uuid(),
            'role' => self::ROLE_USER,
            'status' => self::STATUS_WAIT,
        ]);


    }

    public function verify(): void
    {
        if (!$this->isWait()) {
            throw new \DomainException('User is already verified. ( Пользователь верефицирован)');
        }

        $this->update([
            'status' => self::STATUS_ACTIVE,
            'verify_token' => null,
            'email_verified_at' => now(),
        ]);

    }

    public static function new($name, $email): self
    {
        return static::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt(Str::random()),
            'role' => self::ROLE_USER,
            'status' => self::STATUS_ACTIVE,
        ]);
    }


    public function isWait(): bool
    {
        return $this->status === self::STATUS_WAIT;
    }

    public function isActive(): bool
    {
        return $this->status === self::STATUS_ACTIVE;
    }

    public function isModerator(): bool
    {
        return $this->role === self::ROLE_MODERATOR;
    }


    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }


    public function changeRole($role): void
    {
        if (!array_key_exists($role, self::rolesList())) {
            throw new \InvalidArgumentException('Неопределенная роль "' . $role . '"');
        }
        if ($this->role === $role) {
            throw new \DomainException('Роль уже назначена.');
        }
        if (!\Auth::user()->isAdmin()) {
            throw new \DomainException('Вы не можете менять роль пользователю.');
        }
        $this->update(['role' => $role]);
    }


    public function changeStatus($status): void
    {
        if (!array_key_exists($status, self::statusList())) {
            throw new \InvalidArgumentException('Неопределенный статус "' . $status . '"');
        }
        if ($this->status === $status) {
            throw new \DomainException('Статус уже присвоен.');
        }
        $this->update(['status' => $status]);
    }


    public function unverifyPhone(): void
    {
        $this->phone_verified = false;
        $this->phone_verify_token = null;
        $this->phone_verify_token_expire = null;
        $this->phone_auth = false;
        $this->saveOrFail();
    }

    public function requestPhoneVerification(Carbon $now): string
    {
        if (empty($this->phone)) {
            throw new \DomainException('Номер телефона пуст.');
        }
        if (!empty($this->phone_verify_token) && $this->phone_verify_token_expire && $this->phone_verify_token_expire->gt($now)) {
            throw new \DomainException('Токен уже запрошен.');
        }
        $this->phone_verified = false;
        $this->phone_verify_token = (string)random_int(10000, 99999);
        $this->phone_verify_token_expire = $now->copy()->addSeconds(300);
        $this->saveOrFail();

        return $this->phone_verify_token;
    }

    public function verifyPhone($token, Carbon $now): void
    {
        if ($token !== $this->phone_verify_token) {
            throw new \DomainException('Неверный верификационный токен.');
        }
        if ($this->phone_verify_token_expire->lt($now)) {
            throw new \DomainException('Срок действия токена истек.');
        }
        $this->phone_verified = true;
        $this->phone_verify_token = null;
        $this->phone_verify_token_expire = null;
        $this->saveOrFail();
    }

    public function enablePhoneAuth(): void
    {
        if (!empty($this->phone) && !$this->isPhoneVerified()) {
            throw new \DomainException('Номер телефона пуст.');
        }
        $this->phone_auth = true;
        $this->saveOrFail();
    }

    public function disablePhoneAuth(): void
    {
        $this->phone_auth = false;
        $this->saveOrFail();
    }

    public function addToFavorites($id): void
    {
        if ($this->hasInFavorites($id)) {
            throw new \DomainException('Это объявление уже добавлено в избранное.');
        }
        $this->favorites()->attach($id);
    }

    public function removeFromFavorites($id): void
    {
        $this->favorites()->detach($id);
    }

    public function hasInFavorites($id): bool
    {
        return $this->favorites()->where('id', $id)->exists();
    }

    public function isPhoneVerified(): bool
    {
        return $this->phone_verified;
    }

    public function isPhoneAuthEnabled(): bool
    {
        return (bool)$this->phone_auth;
    }

    public function hasFilledProfile(): bool
    {
        return !empty($this->name) && !empty($this->last_name) && $this->isPhoneVerified();
    }

    public function userPhoneChar($user)
    {
        $charPhone = preg_split('//', $user->phone, -1, PREG_SPLIT_NO_EMPTY);
        if (count($charPhone)==10) {
            return '+7 ('.implode(array_slice($charPhone, 0, 3, true)). ') '
                .implode(array_slice($charPhone, 3, 3, true)).'-'
                .implode(array_slice($charPhone, 6, 2, true)).'-'
                .implode(array_slice($charPhone, 8, 2, true));
        } return '—';
    }


//    public function sendPasswordResetNotification($token)
//    {
//        $this->notify(new ResetPasswordNotification($token));
//    }

}

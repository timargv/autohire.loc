<?php

namespace App\Entity\Ticket;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $subject
 * @property string $content
 * @property string $status
 *
 * @method Builder forUser(User $user)
 */

class Ticket extends Model
{
    protected $table = 'ticket_tickets';

    protected $guarded = ['id'];


    public static function new(int $userId, string $subject, string $content): self
    {
        $ticket = self::create([
            'user_id' => $userId,
            'subject' => $subject,
            'content' => $content,
            'status'  => Status::OPEN
        ]);

        $ticket->setStatus(Status::OPEN, $userId);
        return $ticket;
    }

    public function edit(string $subject, string $content): void
    {
        $this->update([
            'subject' => $subject,
            'content' => $content
        ]);
        $this->update();
    }

    public function addMessage(int $userId, $message): void
    {
        if (!$this->allowsMessages()) {
            throw new \DomainException('Тикет закрыт для сообщений');
        }
        $this->messages()->create([
            'user_id' => $userId,
            'message' => $message
        ]);
        $this->update();
    }

    // Если тикет не закрыт
    public function allowsMessages(): bool
    {
        return !$this->isClosed();
    }

    // Если он не одобрен то одобрить
    public function approve(int $userId): void
    {
        if ($this->isApproved()) {
            throw new \DomainException('Ticket is already approved.');
        }
        $this->setStatus(Status::APPROVED, $userId);
    }

    // Если он не закрыт то закрыть
    public function close(int $userId): void
    {
        if ($this->isClosed()) {
            throw new \DomainException('Ticket is already closed.');
        }
        $this->setStatus(Status::CLOSED, $userId);
    }

    // Нельзя переоткрыть закрытый тикет
    public function reopen(int $userId): void
    {
        if (!$this->isClosed()) {
            throw new \DomainException('Ticket is not closed.');
        }
        $this->setStatus(Status::APPROVED, $userId);
    }

    // Открытый ?
    public function isOpen(): bool
    {
        return $this->status === Status::OPEN;
    }

    // Закрытый ?
    public function isClosed(): bool
    {
        return $this->status === Status::CLOSED;
    }

    // Одобренный ?
    public function isApproved(): bool
    {
        return $this->status === Status::APPROVED;
    }

    // Удалить если открыт
    public function canBeRemoved(): bool
    {
        return $this->isOpen();
    }

    // Связь пользователя
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Связь со статусам
    public function statuses()
    {
        return $this->hasMany(Status::class, 'ticket_id', 'id');
    }

    // Связь с сообщениями в тикете
    public function messages()
    {
        return $this->hasMany(Message::class, 'ticket_id', 'id');
    }

    // Создать историю статуса и ставить статус в тикет
    private function setStatus($status, ?int $userId): void
    {
        $this->statuses()->create(['status' => $status, 'user_id' => $userId]);
        $this->update(['status' => $status]);
    }

    public function scopeForUser(Builder $query, User $user)
    {
        return $query->where('user_id', $user->id);
    }


}

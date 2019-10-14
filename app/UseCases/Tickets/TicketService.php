<?php


namespace App\UseCases\Tickets;


use App\Entity\Ticket\Ticket;
use App\Http\Requests\Ticket\CreateRequest;
use App\Http\Requests\Ticket\EditRequest;
use App\Http\Requests\Ticket\MessageRequest;

class TicketService
{
    // Создать тикет
    public function create(int $userId, CreateRequest $request): Ticket
    {
        return Ticket::new($userId, $request['subject'], $request['content']);
    }

    // Редактировать тикет
    public function edit (int $id, EditRequest $request): void
    {
        $ticket = $this->getTicket($id);
        $ticket->edit($request['subject'], $request['content']);
    }

    // Добавить сообщение
    public function message(int $userId, int $id, MessageRequest $request): void
    {
        $ticket = $this->getTicket($id);
        $ticket->addMessage($userId, $request['message']);
    }

    // Одобрить
    public function approve(int $userId, int $id): void
    {
        $ticket = $this->getTicket($id);
        $ticket->approve($userId);
    }

    // Закрыть
    public function close(int $userId, int $id): void
    {
        $ticket = $this->getTicket($id);
        $ticket->close($userId);
    }

    // Переоткрыть
    public function reopen(int $userId, int $id): void
    {
        $ticket = $this->getTicket($id);
        $ticket->reopen($userId);
    }

    // Удалить свой тикет
    public function removeByOwner(int $id): void
    {
        $ticket = $this->getTicket($id);
        if (!$ticket->canBeRemoved()) {
            throw new \DomainException('Невозможно удалить активный тикет');
        }
        $ticket->delete();
    }

    // Удалить тикет
    public function removeByAdmin(int $id): void
    {
        $ticket = $this->getTicket($id);
        $ticket->delete();
    }

    private function getTicket($id): Ticket
    {
        return Ticket::findOrFail($id);
    }

}

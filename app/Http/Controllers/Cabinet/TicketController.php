<?php

namespace App\Http\Controllers\Cabinet;

use App\Entity\Ticket\Message;
use App\Entity\Ticket\Status;
use App\Entity\Ticket\Ticket;
use App\Http\Requests\Ticket\CreateRequest;
use App\Http\Requests\Ticket\MessageRequest;
use App\UseCases\Tickets\TicketService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TicketController extends Controller
{
    private $service;

    public function __construct(TicketService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $tickets = Ticket::forUser(Auth::user())->orderByDesc('updated_at')->paginate(15);
        $statuses = Status::statusesList();
        return view('cabinet.tickets.index', compact('tickets', 'statuses'));
    }

    public function show(Ticket $ticket)
    {
        $this->checkAccess($ticket);
        return view('cabinet.tickets.show', compact('ticket'));
    }

    public function create()
    {
        return view('cabinet.tickets.create');
    }

    public function store(CreateRequest $request)
    {
        try {
            $ticket = $this->service->create(Auth::id(), $request);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cabinet.tickets.show', $ticket);
    }

    public function message(MessageRequest $request, Ticket $ticket)
    {
        $this->checkAccess($ticket);
        try {
            $this->service->message(Auth::id(), $ticket->id, $request);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect()->route('cabinet.tickets.show', $ticket);
    }

    public function destroy(Ticket $ticket)
    {
        $this->checkAccess($ticket);
        try {
            $this->service->removeByOwner($ticket->id);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect()->route('cabinet.tickets.index')->with('success', 'Тикет удален.');
    }

    private function checkAccess(Ticket $ticket): void
    {
        if (!Gate::allows('manage-own-ticket', $ticket)) {
            abort(404);
        }
    }

}

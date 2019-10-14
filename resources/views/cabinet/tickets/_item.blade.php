<div class="card rounded-0 border-0 ">
    <div class="card-body p-0">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th>
                    <span>Статус</span>
                </th>
                <th >
                    <div class="row">
                        <div class="col-6">{{ __('fillable.Tickets') }}</div>
                        <div class="col-6">
                        </div>
                    </div>
                </th>
                <th>
                    <span>Создан</span>
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse($tickets as $ticket)
                <tr>
                    <td width="100px">
                        @if ($ticket->isOpen())
                            <span class="badge bg-warning">{{ $statuses[$ticket->status] }}</span>
                        @endif
                        @if ($ticket->isClosed())
                            <span class="badge bg-danger text-white">{{ $statuses[$ticket->status] }}</span>
                        @endif
                        @if ($ticket->isApproved())
                            <span class="badge bg-light-blue">{{ $statuses[$ticket->status] }}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('cabinet.tickets.show', $ticket) }}" class="w-100 position-relative">
                            {{ $ticket->subject }}
                        </a>
                    </td>
                    <td>
                         {{ $ticket->created_at->diffForHumans() }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td>
                        <div class="w-100 p-5">
                            <div class="text-muted h5 mb-2">Тикеты</div>
                            <div class="text-black-50 mb-3">
                                У Вас нет тикетов.
                            </div>

                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

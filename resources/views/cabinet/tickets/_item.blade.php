<div class="card rounded-0 border-0 ">
    <div class="card-body p-0">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th width="80px">
                    <span>Статус</span>
                </th>
                <th width="250px">
                    <div class="row">
                        <div class="col-6">{{ __('fillable.Tickets') }}</div>
                        <div class="col-6">
                        </div>
                    </div>
                </th>
                <th width="150px">
                    <span>Создан</span>
                </th>
                <th width="150px"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($tickets as $ticket)
                <tr>
                    <td >
                        <div style="width: 80px">
                            @if ($ticket->isOpen())
                                <span class="badge bg-warning">{{ $statuses[$ticket->status] }}</span>
                            @endif
                            @if ($ticket->isClosed())
                                <span class="badge bg-danger text-white">{{ $statuses[$ticket->status] }}</span>
                            @endif
                            @if ($ticket->isApproved())
                                <span class="badge bg-light-blue">{{ $statuses[$ticket->status] }}</span>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div style="width: 100%; min-width: 250px;">
                            <a href="{{ route('cabinet.tickets.show', $ticket) }}" class="w-100 position-relative">
                                {{ $ticket->subject }}
                            </a>
                        </div>
                    </td>
                    <td>
                         <div style="width: 150px">
                             {{ $ticket->created_at->diffForHumans() }}
                         </div>
                    </td>
                    <td class="pb-0">
                       <div class="float-right" style="width: 90px">
                           @if ($ticket->canBeRemoved())
                               <form method="POST" action="{{ route('cabinet.tickets.destroy', $ticket) }}">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-light btn-sm "><i class="fal fa-trash-alt pr-1"></i> {{ __('button.Delete') }}</button>
                               </form>
                           @endif
                       </div>
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

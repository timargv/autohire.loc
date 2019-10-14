<table class="table table-borderless table-responsive-sm bg-white">
    <thead class="thead-light">
    <tr>
        <th width="65px">ID</th>
        <th>Тема</th>
        <th width="150px">{{__('fillable.User')}}</th>
        <th>{{__('fillable.Status')}}</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($tickets as $ticket)
        <tr>
            <td>{{ $ticket->id }}</td>
            <td><a href="{{ route('admin.tickets.show', $ticket) }}">{{ $ticket->subject }}</a></td>
            <td width="150px">{{ $ticket->user->name }}</td>
            <td>
                @if ($ticket->isOpen())
                    <span class="badge bg-warning">{{ $statuses[$ticket->status] }}</span>
                @endif
                @if ($ticket->isClosed())
                    <span class="badge bg-danger">{{ $statuses[$ticket->status] }}</span>
                @endif
                @if ($ticket->isApproved())
                    <span class="badge bg-light-blue">{{ $statuses[$ticket->status] }}</span>
                @endif
            </td>
        </tr>
    @endforeach

    </tbody>
</table>

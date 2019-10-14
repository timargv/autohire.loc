<div class="d-flex flex-row input-group-sm">
    <a href="{{ route('admin.tickets.edit', $ticket) }}" class="btn btn-warning btn-sm mr-1"><i class="fa fa-edit"></i> {{ __('button.Edit') }}</a>

    @if ($ticket->isOpen())
        <form method="POST" action="{{ route('admin.tickets.approve', $ticket) }}" class="mr-1">
            @csrf
            <button class="btn bg-olive btn-sm"><i class="fa fa-check pr-1"></i>
                 {{ __('button.Accept') }}</button>
        </form>
    @endif

    @if (!$ticket->isClosed())
        <form method="POST" action="{{ route('admin.tickets.close', $ticket) }}" class="mr-1">
            @csrf
            <button class="btn bg-purple btn-sm"><i class="fa fa-times pr-1"></i> {{ __('button.Close') }}</button>
        </form>
    @endif

    @if ($ticket->isClosed())
        <form method="POST" action="{{ route('admin.tickets.reopen', $ticket) }}" class="mr-1">
            @csrf
            <button class="btn bg-olive btn-sm"><i class="fa fa-refresh pr-1"></i> {{ __('button.Reopen') }}</button>
        </form>
    @endif

    <form method="POST" action="{{ route('admin.tickets.destroy', $ticket) }}" class="mr-1">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm"><i class="fa fa-trash pr-1"></i> {{ __('button.Delete') }}</button>
    </form>
</div>


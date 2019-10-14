@extends('layouts.app')

@section('content')
    @include('cabinet.tickets._nav', ['page' => 'tickets'])

    <div class="pt-3 pb-3  w-md-75 w-100 clearfix">
        <h4 class="text-muted w-75 float-left">#{{ $ticket->subject }}</h4>
        <div class="float-left w-25">
            @if ($ticket->canBeRemoved())
                <form method="POST" action="{{ route('cabinet.tickets.destroy', $ticket) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-light btn-sm float-right"><i class="fal fa-trash-alt pr-1"></i> {{ __('button.Delete') }}</button>
                </form>
            @endif
        </div>
    </div>
    <div class="card border-0 w-md-75 w-100">
        <div class="card-body">
            {!! nl2br(e($ticket->content)) !!}
        </div>
        <div class="card-footer border-0 text-black-50 text-right">
            {{ $ticket->created_at->diffForHumans() }}, {{ $ticket->user->name }}
        </div>
    </div>

    <div class="text-muted text-center my-3 my-md-5 h5 font-weight-normal">
        <div class="d-flex flex-row">
            <div class="flex-fill d-flex align-content-center flex-wrap">
                <div class="w-100 border align-self-center"></div>
            </div>
            <div class="px-3">Все сообщения</div>
            <div class="flex-fill d-flex align-content-center flex-wrap">
                <div class="w-100 border align-self-center"></div>
            </div>
        </div>
    </div>

    @include('.cabinet.tickets.messages._item', ['messages' => $ticket->messages() ])

    @if ($ticket->allowsMessages())
        <form method="POST" action="{{ route('cabinet.tickets.message', $ticket) }}">
            @csrf

            <div class="form-group">
                <textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" rows="3" required>{{ old('message') }}</textarea>
                @if ($errors->has('message'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('message') }}</strong></span>
                @endif
            </div>

            <div class="form-group mb-0">
                <button type="submit" class="btn bg-siran text-white">{{ __('button.SendMessage') }}</button>
            </div>
        </form>
    @endif


@endsection

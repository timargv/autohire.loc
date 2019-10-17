@extends('layouts.app')
@section('breadcrumbs', '')
@section('content')
    @include('cabinet.dialogs._nav', ['page' => 'dialogs'])

    <div class="pt-3 pb-3  w-md-75 w-100 clearfix d-none">
{{--        <h4 class="text-muted w-75 float-left">#{{ $carAdvertName }}</h4>--}}
        <div class="float-left w-25">
{{--            <form method="POST" action="{{ route('cabinet.tickets.destroy', $ticket) }}">--}}
{{--                @csrf--}}
{{--                @method('DELETE')--}}
{{--                <button class="btn btn-light btn-sm float-right"><i class="fal fa-trash-alt pr-1"></i> {{ __('button.Delete') }}</button>--}}
{{--            </form>--}}
        </div>
    </div>
    <div class="card border-0 w-md-75 w-100 d-none">
        <div class="card-body">
        </div>
        <div class="card-footer border-0 text-black-50 text-right">
            {{ $dialog->created_at->diffForHumans() }}, {{ $dialog->client->name }}
        </div>
    </div>

    <div class="w-md-75 w-100">
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

        <div class="mb-4">
            @include('cabinet.dialogs.messages._create', ['dialog' => $dialog, 'carAdvert' => $carAdvert])
        </div>

        @include('cabinet.dialogs.messages._item', ['messages' => $messages ])

        {{ $messages->appends(request()->query())->links() }}


    </div>


@endsection

@extends('layouts.app')

@section('content')
    @include('cabinet.tickets._nav')

    @include('cabinet.tickets._nav_button', ['page' => ''])

    @include('cabinet.tickets._item', ['tickets' => $tickets])

    {{ $tickets->appends(request()->query())->links() }}

@endsection


@extends('layouts.app')
@section('breadcrumbs', '')
@section('content')
    @include('cabinet.dialogs._nav')


    @include('cabinet.dialogs._item', ['dialogs' => $dialogs])

    {{ $dialogs->appends(request()->query())->links() }}

@endsection


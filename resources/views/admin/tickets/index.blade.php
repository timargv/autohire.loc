@extends('admin.layouts.app', ['page' => 'tickets'])
@section('TitlePage')
    @include('admin.layouts.partials.title_page', ['titlePage' => __('fillable.AllTickets'), 'subTitlePage' => null])
@endsection
@section('content')

    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Все Тикеты</h3>

            <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="min-width: 150px;">

                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            @include('admin.tickets._item', ['tickets' => $tickets, 'statuses' => $statuses])
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            {{ $tickets->appends(request()->query())->links() }}
        </div>
    </div>

@endsection

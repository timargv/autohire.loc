@extends('admin.layouts.app', ['page' => 'tickets'])

@section('TitlePage')
    @include('admin.layouts.partials.title_page', ['titlePage' => '#'. $ticket->subject, 'subTitlePage' => null])
@endsection

@section('content')

    <div class="row">
        <div class="col-md-7">
            <div class="box box-widget">
                @include ('admin.tickets._user_item', ['user' => $ticket->user, 'date' => $ticket->created_at->diffForHumans() ])
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- post text -->
                    {!! nl2br(e($ticket->content)) !!}
                </div>
                <!-- /.box-body -->
                @include ('admin.tickets.messages._item', ['messages' => $ticket->messages()->orderBy('id')->with('user')->get()])
                <!-- /.box-footer -->
                <div class="box-footer">
                    @include ('admin.tickets.messages._create', ['user' => Auth::user()])
                </div>
                <!-- /.box-footer -->
            </div>

        </div>
        <div class="col-md-5">
            <div class="mb-3">
                @include ('admin.tickets._nav_ticket', ['tickets' => $ticket])
            </div>

            <div class="box box-widget">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered table-striped">
                        <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $ticket->id }}</td>
                        </tr>
                        <tr>
                            <th>Создано</th>
                            <td>{{ $ticket->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Обновлено</th>
                            <td>{{ $ticket->updated_at }}</td>
                        </tr>
                        <tr>
                            <th>Пользователь</th>
                            <td><a href="{{ route('admin.users.show', $ticket->user) }}" target="_blank">{{ $ticket->user->name }}</a></td>
                        </tr>
                        <tr>
                            <th>Статус</th>
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
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="box box-solid">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>User</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($ticket->statuses()->orderBy('id')->with('user')->get() as $status)
                    <tr>
                        <td>{{ $status->created_at }}</td>
                        <td>{{ $status->user->name }}</td>
                        <td>
                            @if ($status->isOpen())
                                <span class="badge bg-warning">{{ $statuses[$status->status] }}</span>
                            @endif
                            @if ($status->isApproved())
                                <span class="badge bg-success">{{ $statuses[$status->status] }}</span>
                            @endif
                            @if ($status->isClosed())
                                <span class="badge bg-light-blue">{{ $statuses[$status->status] }}</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>


@endsection

@extends('layouts.app')

@section('breadcrumbs', '')

@section('content')
    @include('cabinet.black-list-tenant._nav')
    @include('cabinet.black-list-tenant._nav_button', ['page' => 'create'])

    <div class="card rounded-0 border-0 shadow-sm">
        <div class="card-header border-0 h5">
            {{ __('fillable.Create') .' '. __('fillable.Photo') }}
            <a href="{{ route('cabinet.black.list.tenants.show', $tenant) }}" class="btn btn-danger btn-sm float-right"><i class="fal fa-arrow-left mr-1"></i> Вернутся назад</a>
        </div>
        <div class="card-body">
            <form method="POST" action="?"
                  class="dropzone" id="dropzoneTenant">
                @csrf
                <input type="hidden" name="blackList" value="{{ $tenant->id }}">
            </form>

            <div class="d-flex mb-3">
                <a href="{{ route('cabinet.black.list.tenants.show', $tenant) }}" class="d-inline-block btn btn-success btn-md mx-auto"><i class="fal fa-save mr-1"></i> Сохранить и посмотреть</a>
            </div>

            <div class="alert alert-info">
                <strong>Рекомендации и ограничения</strong> <br />
                Запрещается размещение на фото контактной информации, а также ретушь с целью выделения фото среди других.
                <span class="d-block  text-danger ">Не больше 5мб, jpg, jpeg, png.</span>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://unpkg.com/croppie@2.6.4/croppie.js"></script>
@stop

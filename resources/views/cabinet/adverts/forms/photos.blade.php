@extends('layouts.app')

@section('content')
    @include('cabinet.adverts._nav')
{{--    @include('cabinet.adverts._nav_button', ['page' => ''])--}}

    <div class="card rounded-0 border-0 shadow-sm">
        <div class="card-header border-0 h5">
            {{ __('fillable.Create') .' '. __('fillable.Photo') }}
            <a href="{{ route('cabinet.adverts.show', $carAdvert) }}" class="btn btn-danger btn-sm float-right"><i class="fal fa-arrow-left mr-1"></i> Вернутся назад</a>
        </div>
        <div class="card-body">
{{--            <form method="POST" action="?" enctype="multipart/form-data">--}}
{{--                @csrf--}}

{{--                <div class="alert alert-info">--}}
{{--                    <strong>Рекомендации и ограничения</strong> <br />--}}
{{--                    Запрещается размещение на фото контактной информации, а также ретушь с целью выделения фото среди других. Не рекомендуется добавление фотографий, размещенных в других объявлениях о продаже. В случае обнаружения подобных фотографий администрация auto.ru уведомит об этом других посетителей при просмотре данного объявления.--}}
{{--                </div>--}}

{{--                @if (count($errors) > 0)--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <div class="alert alert-danger mt-3" role="alert">--}}
{{--                            {{ $error }}--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                @endif--}}

{{--                <div class="form-group">--}}
{{--                    <div class="custom-file mb-1">--}}
{{--                        <input type="file" class="custom-file-input {{ $errors->has('files') ? ' is-invalid' : '' }}" id="customFileLangHTML" name="files[]" multiple required>--}}
{{--                        <label class="custom-file-label" for="customFileLangHTML" data-browse="Осталось {{ $carAdvert->photosCount() }} фото">Осталось {{ $carAdvert->photosCount() }} фото</label>--}}
{{--                        @if ($errors->has('price_per_day'))--}}
{{--                            <span class="invalid-feedback"><strong>{{ $errors->first('files') }}</strong></span>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    <span class="pt-4 small text-danger ">Не больше 5мб, jpg, jpeg, png.</span>--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <button type="submit" class="btn btn-primary">{{__('button.Save')}}</button>--}}
{{--                </div>--}}
{{--            </form>--}}

            <form method="POST" action="?" enctype="multipart/form-data"
                  class="dropzone" id="carAdvertPhoto">
                @csrf
                <input type="hidden" name="carAdvert" value="{{ $carAdvert->id }}">
            </form>

            <div class="d-flex mb-3">
                <a href="{{ route('cabinet.adverts.show', $carAdvert) }}" class="d-inline-block btn btn-success btn-sm mx-auto"><i class="fal fa-save mr-1"></i> Сохранить</a>
            </div>

            <div class="alert alert-info">
                <strong>Рекомендации и ограничения</strong> <br />
                Запрещается размещение на фото контактной информации, а также ретушь с целью выделения фото среди других. Не рекомендуется добавление фотографий, размещенных в других объявлениях о продаже. В случае обнаружения подобных фотографий администрация {{ config('app.name', 'AutoHire') }} уведомит об этом других посетителей при просмотре данного объявления.
                <span class="d-block  text-danger ">Не больше 5мб, jpg, jpeg, png.</span>
            </div>
        </div>
    </div>
@endsection

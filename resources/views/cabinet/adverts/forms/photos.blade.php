@extends('layouts.app')

@section('content')
    @include('cabinet.adverts._nav')
    @include('cabinet.adverts._nav_button', ['page' => ''])
    <div class="card rounded-0 border-0 shadow-sm">
        <div class="card-header border-0 h5">
            {{ __('fillable.Update') .' '. __('fillable.Advert') }}
        </div>
        <div class="card-body">
            <form method="POST" action="?" enctype="multipart/form-data">
                @csrf

                <div class="alert alert-info">
                    <strong>Рекомендации и ограничения</strong> <br />
                    Запрещается размещение на фото контактной информации, а также ретушь с целью выделения фото среди других. Не рекомендуется добавление фотографий, размещенных в других объявлениях о продаже. В случае обнаружения подобных фотографий администрация auto.ru уведомит об этом других посетителей при просмотре данного объявления.
                </div>


                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLangHTML" name="files[]" multiple required>
                        <label class="custom-file-label" for="customFileLangHTML" data-browse="Осталось {{ $carAdvert->photosCount() }} фото">Осталось {{ $carAdvert->photosCount() }} фото</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{__('button.Save')}}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
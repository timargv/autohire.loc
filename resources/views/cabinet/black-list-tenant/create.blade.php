@extends('layouts.app')

@section('content')
    @include('cabinet.black-list-tenant._nav')
    @include('cabinet.black-list-tenant._nav_button', ['page' => 'create'])

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('cabinet.black.list.tenants.story') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-md-4">
                    <div class="card border-0 mb-5">
                        <div class="card-header border-0 text-muted h5">
                            Добавь фото
                        </div>
                        <div class="card-body border-0 p-0">
{{--                            <img src="https://vk.com/images/dquestion_app_widget_1_b.png" alt="" class="w-100" />--}}
                        </div>
                        <div class="card-footer border-0 px-2">
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input name="photo" type="file" class="custom-file-input border-0" id="photo" aria-describedby="photo">
                                    <label class="custom-file-label border-0 " for="photo">Добавьте фотографию</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="name" class="col-form-label">{{ __('fillable.Name') }}</label>
                        <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="city" class="col-form-label">{{ __('fillable.City') }}</label>
                        <input id="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required>
                        @if ($errors->has('city'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('city') }}</strong></span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="comment" class="col-form-label">{{ __('fillable.Comment') }}</label>
                        <textarea id="comment" class="form-control{{ $errors->has('comment') ? ' is-invalid' : '' }}" name="comment" rows="5">{{ old('comment') }}</textarea>
                        @if ($errors->has('comment'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('comment') }}</strong></span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{__('button.Save')}}</button>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
@endsection

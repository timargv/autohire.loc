@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 px-0">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-header border-0">{{ __('Проверьте свой адрес электронной почты') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('На ваш адрес электронной почты отправлена новая ссылка для подтверждения.') }}
                        </div>
                    @endif

                    {{ __('Прежде чем продолжить, проверьте свою электронную почту на наличие ссылки для подтверждения..') }}
                    {{ __('Если вы не получили письмо') }}, <a class="text-blue-tone-dark-50" href="{{ route('verification.resend') }}">{{ __('нажмите здесь, чтобы запросить другой') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

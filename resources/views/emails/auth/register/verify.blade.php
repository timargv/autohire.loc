@component('mail::message')
# Подтверждение электонной почты

{{ __('email.PleaseClickOnLink') }}

@component('mail::button', ['url' => route('register.verify', ['token' => $user->verify_token])])
{{__('email.VerifyEmail')}}
@endcomponent

{{__('noise.Thank')}}, {{ $user->name }}<br>
{{ config('app.name') }}
@endcomponent

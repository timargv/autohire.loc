@component('mail::message')
# Подтверждение электонной почты

Пожалуйста, перейдите по ссылке ничеже:

@component('mail::button', ['url' => route('register.verify', ['token' => $user->verify_token])])
Подтвердить электронную почту
@endcomponent

Спасибо,<br>
{{ config('app.name') }}
@endcomponent

<?php

namespace App\Mail\Auth;

use App\User;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyMail extends Mailable
{
    use SerializesModels;

    // Создание публичной переменно $user
    public $user;

    public function __construct(User $user)
    {
        //
        $this->user = $user;
    }

    public function build()
    {
        return $this->from('info@autohire.loc', 'AutoHire Регистрация')
                    ->subject(__('register.VerificationRegister'))
                    ->markdown('emails.auth.register.verify');
    }
}

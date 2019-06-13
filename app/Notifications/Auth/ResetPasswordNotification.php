<?php

namespace App\Notifications\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Mail\Auth\ResetPassword as Mailable;


class ResetPasswordNotification extends Notification
{
    use Queueable;


    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        $subject = 'Восстановление пароля';
        return (new Mailable($this->token, $notifiable))
                ->subject($subject)
                ->to($notifiable->email);
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

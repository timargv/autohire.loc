<?php

namespace App\Notifications\Advert;

use App\Entity\Cars\Advert\Advert;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ModerationPassedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private $carAdvert;

    public function __construct(Advert $carAdvert)
    {
        $this->carAdvert = $carAdvert;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable) : MailMessage
    {
        return (new MailMessage)
            ->subject('Модерация пройдена')
            ->greeting('Привет!')
            ->line('Ваше объявление успешно прошло модерацию.')
            ->action('Просмотр объявления', route('cars.adverts.show', $this->carAdvert))
            ->line('Спасибо за использование нашего приложения!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

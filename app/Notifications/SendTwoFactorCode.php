<?php

namespace App\Notifications;

use App\Models\UserCode;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendTwoFactorCode extends Notification
{
    use Queueable;


    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(UserCode $notifiable): MailMessage
    {
        return (new MailMessage)
                //->line('The introduction to the notification.')
                //->action('Notification Action', url('/'))
                //->line('Thank you for using our application!');

                ->line("Your two-factor code is {$notifiable->code}")
                ->action('Notification Action', url('/'))
                ->line('If you didn\'t request this, please ignore.');

    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

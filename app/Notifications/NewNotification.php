<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

// class NewNotification extends Notification implements ShouldQueue
class NewNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $tutor_tuition;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($tutor_tuition)
    {
        $this->tutor_tuition = $tutor_tuition;
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
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Asslamu alaikum.')
                    ->line('Thank you'.'Thank')
                    // ->line('Thank you' .$this->tutor_tuition->name. 'Thank')
                    // ->action('Notification Action', url('/change-password'))
                    ->line('Thank you for Applying!');
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

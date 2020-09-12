<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SubscriptionConfirmation extends Notification
{
    use Queueable;
    protected $user;
    protected $package;
    protected $duration_of_subscription;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$package,$duration_of_subscription)
    {
        $this->user = $user;
        $this->package = $package;
        $this->duration_of_subscription = $duration_of_subscription;
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
                    ->greeting('Hello '.$this->user->name)
                    ->line('Your Subscription for the '.$this->package->name.' Package has just been approved.')
                    ->line('Enjoy the '.$this->package->internet_speeds.' package for the next '.$this->duration_of_subscription)
                    ->line('Thank you!');
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

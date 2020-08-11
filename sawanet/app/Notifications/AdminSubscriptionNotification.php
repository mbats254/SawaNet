<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminSubscriptionNotification extends Notification
{
    use Queueable;
    protected $admin;
    protected $user;
    protected $package;
    protected $user_subscription;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($admin,$user,$package,$user_subscription)
    {
        $this->admin = $admin;
        $this->user = $user;
        $this->package = $package;
        $this->user_subscription = $user_subscription;
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
        $url = 'confirm/payments/'.$this->user_subscription->uniqid;
        return (new MailMessage)
                    ->greeting('Hello '.$this->admin->name)
                    ->line('This is to inform you that '.$this->user->name.' has subscribed to the '.$this->package->name)
                    ->line('Please Make Sure To Confirm Payments')
                    ->action('Confirm Payments', url($url))
                    ->line('Thank you for using our application!');
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

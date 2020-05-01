<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class Contact extends Notification
{
    use Queueable;
    protected $this_admin;
    protected $contact_us;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($this_admin,$contact_us)
    {
        $this->this_admin = $this_admin;
        $this->contact_us = $contact_us;
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
                    ->greeting('Hello '.$this->this_admin->name)
                    ->line(new HtmlString('An Application has been made by <a href="mailto:'.$this->contact_us->email.'"><b>'.$this->contact_us->name.'</b></a>'))
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

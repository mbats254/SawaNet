<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AssignmentSentParent extends Notification
{
    use Queueable;
    protected $assignment;
    protected $i_student;
    protected $subject;
    protected $date;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($assignment,$i_student,$subject,$date)
    {
        $this->assignment = $assignment;
        $this->i_student = $i_student;
        $this->subject = $subject;
        $this->date = $date;
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
        $url = '/view/assignment/'.$this->assignment->uniqid;
        return (new MailMessage)
                    ->greeting('Hello Parent/Guardian')
                    ->line('An assignment for your child '.$this->i_student->name.' for '.$this->subject->name.' has been posted on Funzi.')
                    ->line('Please Note: The deadline for posting it is '.$this->date)
                    ->action('View Assignment', url($url))
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

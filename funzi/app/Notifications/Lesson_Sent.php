<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Lesson_Sent extends Notification
{
    use Queueable;
    protected $lesson;
    protected $i_student;
    protected $subject;
    protected $date;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($lesson,$i_student,$subject,$date)
    {
        $this->lesson = $lesson;
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
        $url = '/view/lesson/'.$this->lesson->uniqid;
        return (new MailMessage)
                    ->greeting('Hello '.$this->i_student->name)
                    ->line('A lesson for '.$this->subject->name.' has been posted on Funzi.')
                    ->line('Please Note: The deadline to go through it is: '.$this->date)
                    ->action('View Lesson', url($url))
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

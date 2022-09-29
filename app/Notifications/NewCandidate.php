<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCandidate extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($id_job, $title, $user_id)
    {
        $this->id_job = $id_job;
        $this->title = $title;
        $this->user_id = $user_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', "database"];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        $url = url('/candidates', $this->title );
        return (new MailMessage)
                    ->line('Received a new candidate')
                    ->line("Job offer" . $this->title)
                    ->action('Show notification', $url)
                    ->line('Thank you for using our application!');
    }

    public function toDatabase($notifiable)
    {
        return [
           'id_job' => $this->id_job,
           'title' => $this->title,
           'user_id' => $this->user_id
        ];
    }
}
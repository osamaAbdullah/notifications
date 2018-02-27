<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PostNewNotification extends Notification
{
    use Queueable;
    private $data;

    public function __construct($data)
    {
        $this->data = $data ;
    }

    public function via($notifiable)
    {
        return ['database'];
    }


    public function toDatabase()
    {
        return [
            'id' => 1,
            'title' => 'this is post title',
            'date' => '05-05-2015',
            'data' => $this->data
        ];
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

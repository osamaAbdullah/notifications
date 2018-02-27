<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;

class ResetNotification extends Notification
{
    use Queueable;


    public function __construct()
    {
        //
    }


    public function via($notifiable)
    {
        return ['nexmo'];
    }


    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
            ->content('fuck you');
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

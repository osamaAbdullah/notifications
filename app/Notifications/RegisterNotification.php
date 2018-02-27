<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use ReflectionProperty;

class RegisterNotification extends Notification
{
    use Queueable;

    private $user;

    public function __construct($user)
    {
        $this->user=$user;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
//                    ->line('Hi '.$this->user->name)
//                    ->action('Activate your account', url('google.com'))
//                    ->line('Thank you for using our application!');
                      ->view('welcome',['user' => $this->user]);
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

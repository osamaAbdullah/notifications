<?php

namespace App\Http\Controllers;

use App\Notifications\PostNewNotification;
use App\Notifications\RegisterNotification;
use App\Notifications\ResetNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class NotificationsController extends Controller
{
    public function DatabaseNotification ()
    {
        //send notification for authenticated user
//        $user = Auth::user();
//        $user->notify(new PostNewNotification());
//        dd('done');

        //send notification for all users
//        $user = User::get();
//        $data = 'send';
//        Notification::send($user,new PostNewNotification($data));
//        dd('done');

        //show all notification for authenticated user
//        $user = Auth::user();
//        foreach ($user->notifications as $notification)
//        {
//            var_dump($notification->data);
//        }


//        //show read notification for authenticated user
//        $user = Auth::user();
//        foreach ($user->readnotifications as $notification)
//        {
//            var_dump($notification->data);
//        }

//        //show unread notification for authenticated user
//        $user = Auth::user();
//        foreach ($user->unreadnotifications as $notification)
//        {
//            var_dump($notification->data);
//        }

//        //read all notification for authenticated user
//        $user = Auth::user();
//        foreach ($user->unreadnotifications as $notification)
//        {
//            $notification->markAsRead();
//        }

//        //delete notification for authenticated user
//        $user = Auth::user();
//        $user->notifications()->delete();
    }
    public function MailNotification ()
    {
        $user = Auth::user();
        Notification::send($user,new RegisterNotification($user));
        dd('done');

    }

    public function SmsNotification ()
    {
        $user = Auth::user();
        Notification::send($user,new ResetNotification());
        dd('done');

    }

}

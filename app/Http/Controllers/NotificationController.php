<?php

namespace App\Http\Controllers;

use App\Contracts\NotificationInterface;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    protected $notification;

    public function __construct(NotificationInterface $notification){
           $this->notification = $notification;
    }

    public function sendNotification()
    {
        $msg1 = $this->notification->send("First message");
        $msg2 = $this->notification->send("Second message");

        return $msg1 . "<br>" . $msg2;

    }
}

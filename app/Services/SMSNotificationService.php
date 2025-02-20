<?php

namespace App\Services;

use App\Contracts\NotificationInterface;

class SMSNotificationService implements NotificationInterface
{


    public $instanceId;

    public function __construct()
    {
        // Unique ID for each instance
        $this->instanceId = uniqid();
    }
    public function send($message)
    {
        return "Email sent: " . $message . " | Instance ID: " . $this->instanceId;
    }
}

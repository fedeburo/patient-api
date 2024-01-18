<?php
namespace App\Services;

use App\Contracts\NotificationService;

class SmsNotificationService implements NotificationService
{
    public function send($recipient, $message)
    {
        // Logic to send sms
    }
}

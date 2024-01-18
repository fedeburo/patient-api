<?php
namespace App\Services;

use App\Contracts\NotificationService;
use Illuminate\Support\Facades\Mail;
use App\Mail\PatientConfirmationEmail;

class EmailNotificationService implements NotificationService
{
    public function send($recipient, $message)
    {
        Mail::to($recipient)->queue(new PatientConfirmationEmail($message));
    }
}

<?php
namespace App\Listeners;

use App\Events\PatientRegistered;
use App\Services\EmailNotificationService;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPatientConfirmation implements ShouldQueue
{
    protected $notificationService;

    // Here, we can add the SMSNotificationService, or make injectction dependency depending in any config value of the user, 
    // using the interface of NotificationService
    public function __construct(EmailNotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function handle(PatientRegistered $event)
    {
        $this->notificationService->send($event->patient->email, $event->patient);
    }
}

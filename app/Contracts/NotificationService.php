<?php
namespace App\Contracts;

interface NotificationService
{
    public function send($recipient, $message);
}

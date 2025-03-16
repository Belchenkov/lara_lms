<?php

namespace App\Services;

use App\Enums\ApproveStatus;
use App\Mail\InstructorRequestApprovedMail;
use App\Mail\InstructorRequestRejectMail;
use Illuminate\Support\Facades\Mail;

class SendNotifications
{
    public function sendNotification(string $status, Mail $mail): void
    {
        switch ($status) {
            case ApproveStatus::APPROVED->value:
                (config('mail_queue.is_queue'))
                    ? $mail->queue(new InstructorRequestApprovedMail())
                    : $mail->send(new InstructorRequestApprovedMail());
                break;
            case ApproveStatus::REJECTED->value:
                (config('mail_queue.is_queue'))
                    ? $mail->queue(new InstructorRequestRejectMail())
                    : $mail->send(new InstructorRequestRejectMail());
                break;
            default:
                break;
        }
    }
}

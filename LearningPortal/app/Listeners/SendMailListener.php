<?php

namespace App\Listeners;

use App\Events\SendMail;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\SendMailJob;

class SendMailListener
{

    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SendMail $event): void
    {
        dispatch(new SendMailJob($event->user, $event->email_type, $event->expires, $event->course));
    }
}

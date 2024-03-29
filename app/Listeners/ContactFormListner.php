<?php

namespace App\Listeners;

use App\Events\ContactForm;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactFormListner
{
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
    public function handle(ContactForm $event)
    {
        $ip = json_encode($event->data['ip']);

        Mail::to(env('SUPPORT_EMAIL_ADDRESS'))->send(
            new \App\Mail\ClientContactMail($event->data, $ip)
        );
    }
}

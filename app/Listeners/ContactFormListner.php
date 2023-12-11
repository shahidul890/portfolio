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
        $ip = $event->data['ip'];

        $http = Http::withoutVerifying()
        ->get("https://ipinfo.io/$ip?token=6cc45549a56a40");

        $ipResponse = json_encode($http->object());

        Mail::to("contact.shahidul@gmail.com")->send(new \App\Mail\ClientContactMail($event->data, $ipResponse));
    }
}

<?php

namespace App\Listeners;

use App\Events\MailEvent;
use App\Mail\ContactUSMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class Maillistener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\MailEvent  $event
     * @return void
     */
    public function handle(MailEvent $event)
    {
    // dd($event);
    Mail::to(config('mail.from.address_to'))->send( new ContactUSMail($event->AllData) );
    }
}

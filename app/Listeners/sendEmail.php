<?php

namespace App\Listeners;
use App\Event\NewContent;
use App\Mail\NewContent as NewContentMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendEmail
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
     * @param  NewContent  $event
     * @return void
     */
    public function handle(NewContent $event)
    {
        Mail::to('mansourian2018@gmail.com')->send(new NewContentMail($event->contentName,$event->contentEmail,$event->contentDescription));
    }
}

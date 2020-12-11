<?php

namespace App\Listeners;

use App\Event\NewContent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Smsirlaravel;
class sendMessage
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
        Smsirlaravel::sendVerification('123','09146610775');
    }
}

<?php

namespace App\Listeners;

use App\Events\TelegramBot;
use App\Notifications\Bot\Telegram;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class telegramMessage
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
     * @param  object  $event
     * @return void
     */
    public function handle(TelegramBot $event)
    {
        $response = (new Telegram())->toTelegram($event->chatId);
        dd($response);
    }
}

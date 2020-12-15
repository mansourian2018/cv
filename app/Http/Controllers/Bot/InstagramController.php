<?php

namespace App\Http\Controllers\Bot;

use App\Events\TelegramBot;
use App\Http\Controllers\Controller;
use App\Notifications\Bot\Telegram;
use Illuminate\Http\Request;
use NotificationChannels\Telegram\TelegramMessage;
use NotificationChannels\Telegram\TelegramChannel;
use Illuminate\Notifications\Notification;

class InstagramController extends Controller
{
    public function test()
    {
         $telegram = new Telegram();
         $telegram->toTelegram(request('message.chat.id'));
    }
}

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
        $data = json_encode(request());
        $api = "https://api.telegram.org/bot".env('TELEGRAM_BOT_TOKEN')."/";
        $method = "sendMessage";
        $params = "?chat_id=".$data['message']['chat']['id']."&text=hello";
        $url = $api.$method.$params;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
         $telegram = new Telegram();
         $telegram->toTelegram(request('message.chat.id'));
    }
}

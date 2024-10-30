<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function setWebhook()
    {
        $url = config('telegram.bots.mybot.webhook_url');
        return Telegram::setWebhook(['url' => $url]);
    }

    public function handle()
    {
        $update = Telegram::getWebhookUpdate();
        Log::debug($update->toArray());
    }
}

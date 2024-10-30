<?php

use App\Http\Controllers\TelegramController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TelegramController::class, 'index']);
Route::get('/set-webhook', [TelegramController::class, 'setWebhook']);
Route::post('/telegram/webhook', [TelegramController::class, 'handle']);

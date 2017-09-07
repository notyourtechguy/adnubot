<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('help', 'App\Http\Controllers\BotController@help');

$botman->hears('login {username} {password}', 'App\Http\Controllers\BotController@login');

$botman->fallback(function($bot) {
    $bot->reply('Please login to use the bot.');
    $bot->reply('Type help to show commands');
});
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;

class BotManController extends Controller
{
    public function handle(Request $request)
    {
        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

        $config = [
        ];

        $botman = BotManFactory::create($config);

        $botman->hears('', function($bot) {
            $bot->reply('Hello!');
            $bot->ask('Whats your name?', function($answer, $bot) {
                $bot->say('Welcome '.$answer->getText());
            });
        });

        $botman->listen();
    }
}

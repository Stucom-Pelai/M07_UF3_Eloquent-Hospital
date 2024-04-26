<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Http\Request;

class BotManController extends Controller
{    
    protected $email;
    protected $name;
    public function handle()
    {
        $botman = app('botman');
        $botman->hears('{message}', function ($botman, $message) {
            if ($message == __('messages.Hello')) {
                $this->askName($botman);
                
            } else {
                $botman->reply(__("messages.error_message"));
            }
        });
        $botman->listen();
    }
    
    public function askName($botman)
    {
        $botman->ask(__("messages.Whats your name?"), function (Answer $answer) {
            $name = $answer->getText();
            $this->say(__("messages.Hello ") . $name);
        });
    }

}

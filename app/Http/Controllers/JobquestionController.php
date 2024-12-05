<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\JobQuestion;

class JobquestionController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('Are u ok',function($bot){
        	$bot->reply('I am rabeya');

        });

        $botman->listen();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
   
    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function newConversation(BotMan $bot)
    {
        $bot->newConversation(new JobQuestion());
    }


    
}
